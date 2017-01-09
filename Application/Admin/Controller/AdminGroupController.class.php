<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * Class AdminGroupController
 * @package Admin\Controller
 * 2014-5-28   管理员分组控制
 */
class AdminGroupController extends AdminBasicController {

    public $group_obj = '';
    public $action_obj = '';
    public function _initialize(){
        $this->checkLogin();
        $this->group_obj = D('AdminGroup');
        $this->action_obj = D('AdminAction');
    }
    /**
     * 管理员组列表
     * 2014-5-28
     */
    public function groupList(){
        //管理员组列表
        $group_list = $this->group_obj->selectAdminGroup('','','');
        if($group_list){
            $admin = D('Admin');
            foreach($group_list as $key => $group){
                //获取该组下管理员个数
                $group_list[$key]['admin_count'] = $admin->where(array('group_id'=>$group['group_id'],'status'=>0))->count();

                $permission = unserialize($group['permission']);
                $action_str = '';
                foreach($permission as $k => $action_id){
                    //获取权限名称
                    if($k < 8){
                        $action_str .= $this->action_obj->where(array('action_id'=>$action_id))->getField('action_name').' ';
                    }
                }
                $group_list[$key]['permission'] = $action_str;
                //超出十er个  显示...
                if(count($permission) > 8){
                    $group_list[$key]['flag'] = 'more';
                }
            }
            $this->assign('group_list',$group_list);
            //$this->assign('page',$group_list['page']);
        }
        //编辑后返回
        $this->setEditBack(U('AdminGroup/groupList',$_REQUEST));
        $this->display('groupList');
    }

    /**
     * 添加管理员组
     * 2014-5-28 permission
     */
    public function addGroup(){
        $this->checkAuth('AdminGroup','addGroup');
        if(empty($_POST)){
            //获取action的数据
            $this->assign('action_list',$this->getAdminAction());
            $this->display('addGroup');
        }else{
            $data = $this->group_obj->create();
            if($data){
                $data['permission'] = serialize($data['permission']);
                $add_res = $this->group_obj->add($data);
                if($add_res){
                    $this->success('添加分组成功',U('AdminGroup/groupList'));
                }else{
                    $this->error('添加分组失败');
                }
            }else{
                $this->error($this->group_obj->getError());
            }
        }
    }

    /**
     * 修改管理员组信息
     * 2014-5-28
     */
    public function editGroup(){
        $this->checkAuth('AdminGroup','editGroup');
        if(empty($_POST)){
            $where['group_id'] = I('get.group_id');
            $group = $this->group_obj->findAdminGroup($where);
            if($group){
                //所有权限
                $this->assign('action_list',$this->getAdminAction());
                $group['permission'] = unserialize($group['permission']);
                $this->assign('group',$group);
                $this->display('editGroup');
            }else{
                $this->error('该组不存在或被删除');
            }
        }else{
            $where['group_id'] = I('post.group_id');
            $data = $this->group_obj->create();
            if($data){
                $data['permission'] = serialize($data['permission']);
                $upd_res = $this->group_obj->editAdminGroup($where,$data);
                if($upd_res){
                    $this->success('编辑分组成功',cookie("EDIT_BACK"));
                }else{
                    $this->error('编辑分组失败');
                }
            }else{
                $this->error($this->group_obj->getError());
            }
        }
    }

    /**
     * 删除管理员组、
     * 2014-5-28
     */
    public function deleteGroup(){
        $this->checkAuth('AdminGroup','deleteGroup');
        $where['group_id'] = I('get.group_id');
        $data['status'] = 9;
        $data['utime'] = time();
        $upd_res = $this->group_obj->editAdminGroup($where,$data);
        if($upd_res){
            $this->success('删除成功');
        }else{
            $this->error('本次删除失败');
        }
    }

    /**
     * 获取action数据
     */
    public function getAdminAction(){
        $action_list = $this->action_obj->selectAdminAction();
        return $action_list;
    }
}