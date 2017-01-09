<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * Class MemberController
 * @package Admin\Controller
 * 会员管理
 */
class MemberController extends AdminBasicController {

    public $member_obj = '';
    public function _initialize(){
        $this->checkLogin();
        $this->member_obj = D('Member');
    }
    /**
     * 显示会员列表
     */
    public function memberList(){
        //不同状态下的会员
        if(empty($_REQUEST['m_nickname'])){
            if(I('request.status') == 'lock'){
                $where['status'] = array('eq',4);
            }if($_REQUEST['status'] == 'free'){
                $where['status'] = array('eq',6);
            }
            $parameter['status'] = I('request.status');
        }
        //昵称查找
        if(!empty($_REQUEST['m_nickname'])){
            $where['m_nickname'] = array('LIKE',"%".I('request.m_nickname')."%");
            $parameter['m_nickname'] = I('request.m_nickname');
        }
        //ID查找
        if(!empty($_REQUEST['m_id'])){
            $where['m_id'] = I('request.m_id');
            $parameter['m_id'] = I('request.m_id');
        }
        //性别查找
        if($_REQUEST['m_type'] != ''){
            $where['m_type'] = I('request.m_type');
            $parameter['m_type'] = I('request.m_type');
        }
        //职位查找
        if($_REQUEST['z_id'] != ''){
            $where['z_id'] = I('request.z_id');
            $parameter['z_id'] = I('request.z_id');
        }
        //排序
        //dump($_REQUEST);exit;
        $order = 'ctime desc';
        /*if(!empty($_REQUEST['sort_order'])){
            $sort = explode(':',$_REQUEST['sort_order']);
            $order = $sort[0].' '.$sort[1];
            $parameter['sort_order'] = I('request.sort_order');
        }*/
        //$where['m_type'] = array('eq',1);
        $member = $this->member_obj->selectMember($where,$order,$this->getPageNumber(),$parameter);
        $member_list = $member['list'];
        $position = C('POSITION');
        foreach($member_list as $k=>$v){
            if($v['m_type']=='1'){
                $member_list[$k]['p_name'] = $position[$v['z_id']];
            }elseif($v['m_type']=='2'){
                $member_list[$k]['p_name'] = '客户';
            }elseif($v['m_type'] == '3'){
                $member_list[$k]['p_name'] = '交易顾问';
            }else{
                $member_list[$k]['p_name'] = '未知角色';
            }
        }

        if($member_list){
            $this->assign('page',$member['page']);
            $this->assign('mem_list',$member_list);
        }
        $this->assign('position',C('POSITION'));
        //提交的参数传回前台 赋值到搜索表单
        $this->assign('request',$_REQUEST);
        //页数跳转
        $this->assign('url',U('Member/memberList',$_REQUEST));
        //编辑后返回
        $this->setEditBack(U('Member/memberList',$_REQUEST));
        $this->display('memberList');
    }

    /**
     * 添加会员
     */
    public function addMember(){
        $this->checkAuth('Member','addMember');
        if(empty($_POST)){
            $this->assign('position',C('POSITION'));
            $this->display('addMember');
        }else{
            if($_POST['m_type']=='1' && !isset($_POST['z_id'])){
                $this->error("请选择员工所属职位");
            }
            $data = $this->member_obj->create();
            if($data){
                //默认数据
                $data['m_email'] = I('post.m_account');
                $data['status'] = 1;//状态
                $data['m_head'] = 'default.png';//默认头像
                $add_res = $this->member_obj->addMember($data);
                if($add_res){
                    $this->success('添加会员成功',U('Member/memberList'));
                }else{
                    $this->error('添加会员失败');
                }
            }else{
                $this->error($this->member_obj->getError());
            }
        }
    }

    /**
     * 编辑会员信息
     */
    public function editMember(){
        $this->checkAuth('Member','editMember');
        if(empty($_POST)){
            $time = time();
            $where['m_id'] = I('get.m_id');
            $member = $this->member_obj->findMember($where);
            if($member){
                $this->assign('time',$time);
                $this->assign('member',$member);
                $this->display('editMember');
            }else{
                $this->error('该会员不存在或被删除');
            }
        }else{
            $where['m_id'] = I('post.m_id');
            $data = $this->member_obj->create();
            if($data){
                $data['m_head'] = $_POST['m_head'];
                $upd_res = $this->member_obj->editMember($where,$data);
                if($upd_res){
                    $this->success('编辑会员成功',cookie("EDIT_BACK"));
                }else{
                    $this->error('编辑会员失败');
                }
            }else{
                $this->error($this->member_obj->getError());
            }
        }
    }

    /**
     * 修改密码
     */
    public function modifyPwd(){
        if(empty($_POST)){
            $this->display('editMember');
        }else{
            $where['m_id'] = I('post.m_id');
            if($_POST['pwd'] != $_POST['pwded']){
                $this->error('两次密码输入不一致！');
            }
            $data['m_password'] = md5($_POST['pwd']);
            $id = $this->member_obj->editMember($where,$data);
            if($id){
                $this->success('编辑会员成功',cookie("EDIT_BACK"));
            }else{
                $this->error('编辑会员失败');
            }
        }
    }

    /**
     * 修改积分
     */
    public function editScore(){
        $this->checkAuth('Member','editMember');
        if(empty($_POST['change_rule'])){
            $this->error('您未选择修改规则');exit;
        }
        if($_POST['change_rule'] == 1){
            //$score = intval(-$_POST['change_measure']);
            $upd_res = $this->member_obj->where(array('m_id'=>I('post.m_id')))->setDec('m_score',intval($_POST['change_measure']));
        }if($_POST['change_rule'] == 2){
            //$score = intval($_POST['change_measure']);
            $upd_res = $this->member_obj->where(array('m_id'=>I('post.m_id')))->setInc('m_score',intval($_POST['change_measure']));
        }
        //$upd_res = $this->score->editScore($_POST['s_id'],9,'',$score);
        if($upd_res){
            /************ 发站内信 **********/
            //$this->message->send(0,$_POST['s_id'],"积分变更提醒",$_POST['change_cause']);
            //$this->success('修改积分成功',U('Member/editMember',array('m_id'=>I('post.m_id'))));
            $this->success('修改积分成功',cookie("EDIT_BACK"));
        }else{
            $this->error('修改积分失败');
        }
    }

    /**
     * 删除操作
     */
    public function deleteMember(){
        $this->checkAuth('Member','deleteMember');
        if(empty($_REQUEST['m_id'])){
            $this->error('您未选择任何操作对象');
        }
        $where['m_id'] = array('IN',I('request.m_id'));
        $data['status'] = 9;
        $data['utime'] = time();
        $upd_res = $this->member_obj->editMember($where,$data);
        if($upd_res){
            //其他删除操作

            $this->success('删除操作成功');
        }else{
            $this->error('删除操作失败');
        }
    }

    /**
     * 批量修改积分  查询所选目标 显示页面
     */
    public function editScoreBatch(){
        $this->checkAuth('Member','editMember');
        if(empty($_POST['m_id'])){
            $this->error('您未选择任何操作对象');
        }
        $where['m_id'] = array('IN',I('post.m_id'));
        $mem_list = $this->member_obj->selectMember($where);
        $this->assign('mem_list',$mem_list);
        $this->display('editScoreBatch');
    }

    /**
     * 执行批量修改积分操作
     */
    public function doEditScoreBatch(){
        if(empty($_POST['change_rule'])){
            $this->error('您未选择修改规则');exit;
        }
        if($_POST['change_rule'] == 1){
            //$score = intval(-$_POST['change_measure']);
            $upd_res = $this->member_obj->where(array('m_id'=>array('IN',I('post.m_id'))))->setDec('m_score',intval(I('post.change_measure')));
        }if($_POST['change_rule'] == 2){
            //$score = intval($_POST['change_measure']);
            $upd_res = $this->member_obj->where(array('m_id'=>array('IN',I('post.m_id'))))->setInc('m_score',intval(I('post.change_measure')));
        }
        //$upd_res = $this->score->editScore($_POST['s_id'],9,'',$score);
        if($upd_res){
            /************ 发站内信 **********/
            //$this->message->send(0,$_POST['s_id'],"积分变更提醒",$_POST['change_cause']);
            //$this->success('修改积分成功',U('Member/editMember',array('m_id'=>I('post.m_id'))));
            $this->success('修改积分成功',cookie("EDIT_BACK"));
        }else{
            $this->error('修改积分失败');
        }
    }

    /**
     * 导出数据
     */
    public function exportExcel(){
        //实例化对象
        $util_obj = D('Util','Service');
        $member_obj = D('Member');
        //字段数据
        $fields_data = I('post.fields_data');
        //内容数据  根据当前的筛选条件
        $order = 'ctime desc';
        if(!empty($_POST['m_nickname'])){       //昵称查找
            $where['m_nickname'] = array('LIKE',"%".I('post.m_nickname')."%");
        }
        if(!empty($_POST['m_id'])){           //ID查找
            $where['m_id'] = I('post.m_id');
        }
        if($_POST['m_sex'] != ''){          //性别查找
            $where['m_sex'] = I('post.m_sex');
        }
        if(!empty($_POST['sort_order'])){           //排序条件
            $sort = explode(':',I('post.sort_order'));
            $order = $sort[0].' '.$sort[1];
        }
        //会员类型
        $where['m_type'] = array('eq',1);
        $mem_list = $member_obj->selectMember($where,$order,'');
        //处理内容数据  时间 性别等
        foreach($mem_list as $key => $value){
            $mem_list[$key]['ctime'] = date('Y-m-d',$value['ctime']);
            if($value['m_sex'] == 1){
                $mem_list[$key]['m_sex'] = '男';
            }else{
                $mem_list[$key]['m_sex'] = '女';
            }
        }
        //执行导出函数
        $util_obj->exportExcel($fields_data,$mem_list,'MEMBER');
    }
}