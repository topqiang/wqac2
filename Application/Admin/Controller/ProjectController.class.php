<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * Class ProjectController
 * @package Admin\Controller
 * 项目管理
 */
class ProjectController extends AdminBasicController {

    public $Project = '';
    public $Member = '';

    public function _initialize(){
        $this->checkLogin();
        $this->Project = D('Project');
        $this->Member = D("Member");
    }

    /**
     * 添加项目
     */
    public function addProject(){
        //$this->checkAuth('Member','addMember');
        if(empty($_POST)){

            $time = time();
            $this->assign('time',$time);
            $this->assign('constitute',C('CONSTITUTE'));

            $this->display('addProject');
        }else{
            if($data=$this->Project->create()){
                if($_FILES['p_logo']['name'] && $_FILES['p_pics']['name']){
                    $res = uploadFile1('','pLogo');
                    if($res['success']){
                        $files = $res['success'];
                        $p_pics = '';
                        foreach($files as $k => $v){
                            if($v['key']=='p_logo'){
                                $data['p_logo'] = date('Ym').'/'.$v['savename'];
                            }
                            if($v['key']=='p_pics'){
                                if($p_pics){
                                    $p_pics = $p_pics.','.date('Ym').'/'.$v['savename'];
                                }else{
                                    $p_pics = date('Ym').'/'.$v['savename'];
                                }
                            }

                        }
                        $data['p_pics'] = $p_pics;
                    }else{
                        $this->error($res['error']);
                    }
                }else{
                    $this->error('请上传图片');
                }
                $data['ctime'] = time();
                $data['c_ids'] = json_encode(I('post.c_ids'));
                if($this->Project->addProject($data)){
                    $this->success("添加成功",U('Project/selectProject'));
                }else{
                    $this->success("添加失败");
                }
            }else{
                $this->error($this->Project->getError());
            }
        }
    }

    /**
     * 显示项目列表
     */
    public function selectProject(){
        $where=array();
        if(isset($_POST['p_name'])){
            $where['p_name'] = array('like','%'.$_POST['p_name'].'%');
        }
        $project = $this->Project->selectProject($where,'sort_order desc',10);
        $project_list = $project['list'];
        foreach($project_list as $k=>$v){
            //项目所有者姓名
            $member_info = $this->Member->findMember(array('m_id'=>$v['own_m_id']));
            $project_list[$k]['own_m_nickname'] = $member_info['m_nickname'];
            //交易顾问名称
            if($adviser_m_nickname = $this->Member->where(array('m_id'=>$v['adviser_id']))->getField('m_nickname')){
                $project_list[$k]['adviser_m_nickname'] = $adviser_m_nickname;
            }else{
                $project_list[$k]['adviser_m_nickname'] = '公司';
            }
            //参与人员姓名
            $project_list[$k]['join_m_ids_arr'] = json_decode($v['join_m_ids']);

            //dump($project_list);exit;

            $project_list[$k]['join_m_nickname'] = '';
            foreach($project_list[$k]['join_m_ids_arr'] as $key=>$var){
                $member_info = $this->Member->findMember(array('m_id'=>$var));
                $project_list[$k]['join_m_ids_arr']['p_id'] = $member_info['z_id'];
                $member_info_next = $this->Member->findMember(array('m_id'=>($var+1)));
                $project_list[$k]['join_m_ids_arr']['n_p_id'] = $member_info_next['z_id'];
                if($project_list[$k]['join_m_ids_arr']['p_id'] == $project_list[$k]['join_m_ids_arr']['n_p_id']){
                    $project_list[$k]['join_m_nickname'].=$member_info['m_nickname'].' ';
                }else{
                    $project_list[$k]['join_m_nickname'].=$member_info['m_nickname'].'&nbsp;&nbsp;';
                }

            }
            /*foreach($join_m_ids_arr_2 as $kk=>$vv){
                foreach($vv as $kkk=>$vvv){
                    $project_list[$k]['join_m_nickname'].= $vvv.' ';
                }
                $project_list[$k]['join_m_nickname'].='<br>';

            }*/
        }
        $this->assign('project_list',$project_list);
        $this->assign('page',$project['page']);
        $this->display('selectProject');
    }

    /**
     * 编辑排序
     */
    public function editSort(){
        //修改条件 ID
        $where['p_id'] = I('post.id');
        $data['sort_order'] = I('post.sort');
        //修改操作
        $upd_res = $this->Project->saveProject($where,$data);
        if($upd_res){
            $this->ajaxMsg('success','修改排序成功');
        }else{
            $this->ajaxMsg('error','修改排序失败，可能是未改变排序值');
        }
    }

    /**
     * 编辑案例是否显示
     */
    public function isShowOperate(){
        //修改条件 ID
        $where['p_id'] = I('post.id');
        //判断修改为显示或者不显示
        if(I('post.flag') == 1){
            $data['is_show'] = 0;
        }elseif(I('post.flag') == 0){
            $data['is_show'] = 1;
        }
        //修改操作
        $upd_res = $this->Project->saveProject($where,$data);
        if($upd_res){
            $this->ajaxMsg('success','编辑成功');
        }else{
            $this->ajaxMsg('error','编辑失败');
        }
    }



    /**
     * 编辑会员信息
     */
    public function saveProject(){
        if(empty($_POST)){
            $where['p_id'] = I('get.p_id');
            $project_info = $this->Project->findProject($where);
            if($project_info){
                $this->assign('constitute',C('CONSTITUTE'));
                $project_info['c_id_name'] = json_decode($project_info['c_ids']);
                $this->assign('project_info',$project_info);
                $this->display('saveProject');
            }else{
                $this->error('该项目不存在或被删除');
            }
        }else{
            if($data=$this->Project->create()){
                //是否上传了LOGO
                /*if(!empty($_FILES['p_logo']['name'])){
                    $res = uploadFile('','pLogo');
                    if(empty($res['error'])){
                        $data['p_logo'] = $res['success'];
                    }else{
                        $this->error($res['error']);
                    }
                }else{
                    $data['p_logo'] = $_POST['p_logo_name'];
                }
                //是否上传了封面
                if(!empty($_FILES['p_cover']['name'])){
                    $res = uploadFile('','pLogo');
                    if(empty($res['error'])){
                        $data['p_cover'] = $res['success'];
                    }else{
                        $this->error($res['error']);
                    }
                }else{
                    $data['p_cover'] = $_POST['p_cover'];
                }*/

                $data['c_ids'] = json_encode(I('post.c_ids'));

                if($this->Project->saveProject(array('p_id'=>$_POST['p_id']),$data)){
                    $this->success("修改成功",U('Project/selectProject'));
                }else{
                    $this->success("修改失败");
                }
            }else{
                $this->error($this->Project->getError());
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
    public function deleteProject(){
        $this->checkAuth('Member','deleteMember');
        if(empty($_REQUEST['p_id'])){
            $this->error('您未选择任何操作对象');
        }
        $where['p_id'] = array('IN',I('request.p_id'));
        $data['status'] = 9;
        $data['utime'] = time();
        $upd_res = $this->Project->saveProject($where,$data);
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