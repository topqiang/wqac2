<?php
namespace Admin\Controller;
use Think\Controller;
class RequireController extends AdminBasicController{
    public $Require = '';
    public $RequireType = '';
    public $Member = '';
    public $Areas = '';

    /**
     * 初始化定义
     */
    public function _initialize(){
        parent::_initialize();
        $this->Require = D('Require');
        $this->RequireType = D("RequireType");
        $this->Member = D("Member");
        $this->Areas = D("Areas");

    }

    /**
     * 需求列表
     */
    public function selectRequire(){
        $require = $this->Require->selectRequire('','ctime desc',20);
        $require_list = $require['list'];
        //转换需求二级信息
        foreach($require_list as $k=>$v){
            $require_list[$k]['re_type_name'] = $this->RequireType->where(array('re_type_id'=>$v['re_type']))->getField("type_name");
            $require_list[$k]['constitute_arr'] = json_decode($v['constitute']);
            foreach($require_list[$k]['constitute_arr'] as $kk=>$vv){
                $require_list[$k]['constitute_str'] .= C('CONSTITUTE')[$vv].'，';
            }
            $require_list[$k]['constitute_str'] = substr($require_list[$k]['constitute_str'],0,-3);
            $require_list[$k]['response'] = C("RESPONSE")[$require_list[$k]['response']];
            $require_list[$k]['adviser_name'] = $this->Member->where(array('m_id'=>$v['adviser_id']))->getField('m_nickname');
        }
        //dump($require_list);
        $this->assign('page',$require['page']);
        $this->assign('require_list',$require_list);
        $this->display("selectRequire");
    }

    /**
     * 交易顾问发布需求页面
     */
    public function addRequire(){
        if(empty($_POST)){
            //获取需求分类
            $where['status'] = array('neq','9');
            $require_type_list = $this->RequireType->where($where)->field('re_type_id,type_name')->select();
            $this->assign('require_type_list',$require_type_list);
            //获取省级地区
            $province = D('Areas')->where(array('parent_id'=>1))->select();
            $this->assign('province',$province);
            //获取用户信息
            $member = $this->Member->findMember(array("m_id"=>session('M_ID')));
            $this->assign('member',$member);

            $this->assign('response',C('RESPONSE'));
            $this->assign('talk_time',C('TALK_TIME'));
            $this->assign('constitute',C('CONSTITUTE'));
            $this->assign('active','6');
            $this->display('addRequire');
        }else{
            if($data = $this->Require->create()){
                $data['ctime'] = time();
                $data['constitute'] = json_encode(I('post.constitute'));
                $data['re_desc'] = I('post.re_desc');
                $data['contact_log'] = I('post.contact_log');
                if($this->Require->addRequire($data)){
                    $this->success("添加成功");
                }else{
                    $this->error("添加失败");
                }
            }else{
                $this->error($this->Require->getError());
            }
        }

    }


    //获取地区联动
    public function getArea(){
        $where['parent_id']=$_REQUEST['areaId'];
        $area=D('areas')->where($where)->select();
        $this->ajaxReturn($area);
    }



    /**
     * 交易顾问发布需求页面
     */
    public function saveRequire(){
        if(empty($_POST)){
            //获取当前需求内容
            $require_info = $this->Require->findRequire(array('re_id'=>$_GET['re_id']));
            $require_info['constitute_arr'] = json_decode($require_info['constitute']);
            $require_info['province_name'] = $this->Areas->where(array('area_id'=>$require_info['province']))->getField("area_name");
            $require_info['city_name'] = $this->Areas->where(array('area_id'=>$require_info['city']))->getField("area_name");
            $this->assign('require_info',$require_info);

            //获取需求分类
            $where['status'] = array('neq','9');
            $require_type_list = $this->RequireType->where($where)->field('re_type_id,type_name')->select();
            $this->assign('require_type_list',$require_type_list);
            //获取省级地区
            $province = D('Areas')->where(array('parent_id'=>1))->select();
            $this->assign('province',$province);
            //获取用户信息
            $member = $this->Member->findMember(array("m_id"=>session('M_ID')));
            $this->assign('member',$member);

            $this->assign('response',C('RESPONSE'));
            $this->assign('talk_time',C('TALK_TIME'));
            $this->assign('constitute',C('CONSTITUTE'));
            $this->assign('active','6');
            $this->display('saveRequire');
        }else{
            if($data = $this->Require->create()){
                $data['ctime'] = time();
                $data['constitute'] = json_encode(I('post.constitute'));
                $data['re_desc'] = I('post.re_desc');
                $data['contact_log'] = I('post.contact_log');
                if($this->Require->addRequire($data)){
                    $this->success("添加成功");
                }else{
                    $this->error("添加失败");
                }
            }else{
                $this->error($this->Require->getError());
            }
        }

    }

    /**
     * 删除需求
     */
    public function deleteRequire(){
        echo '需求用于统计数据，不能删除';
    }

}
?>