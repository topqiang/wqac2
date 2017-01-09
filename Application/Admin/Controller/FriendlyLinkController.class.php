<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * Class FriendlyLinkController
 * @package Admin\Controller
 * 友情链接控制
 */
class FriendlyLinkController extends AdminBasicController {

    public $link_obj = '';
    public function _initialize(){
        $this->checkLogin();
        $this->link_obj = D('FriendlyLink');
    }
    /**
     * 友情链接列表
     * 2014-5-28
     */
    public function friendlyLinkList(){
        //友情链接列表
        $link_list = $this->link_obj->selectFriendlyLink('','','');
        if($link_list){
            /*foreach(){}*/
            $this->assign('link_list',$link_list);
            //$this->assign('page',$link_list['page']);
        }
        //编辑后返回
        $this->setEditBack(U('FriendlyLink/friendlyLinkList',$_REQUEST));
        $this->display('friendlyLinkList');
    }

    /**
     * 添加友情链接
     * 2014-5-28
     */
    public function addFriendlyLink(){
        $this->checkAuth('FriendlyLink','addFriendlyLink');
        if(empty($_POST)){
            $this->display('addFriendlyLink');
        }else{
            $data = $this->link_obj->create();
            if($data){
                //是否上传了LOGO
                if(!empty($_FILES['friendly_logo']['name'])){
                    //上传LOGO
                    $data['friendly_logo'] = $this->uploadImg();
                }
                $add_res = $this->link_obj->addFriendlyLink($data);
                if($add_res){
                    $this->success('添加友情链接成功',U('FriendlyLink/friendlyLinkList'));
                }else{
                    $this->error('添加友情链接失败');
                }
            }else{
                $this->error($this->link_obj->getError());
            }
        }
    }

    /**
     * 修改友情链接
     * 2014-5-28
     */
    public function editFriendlyLink(){
        $this->checkAuth('FriendlyLink','editFriendlyLink');
        if(empty($_POST)){
            $where['friendly_id'] = I('get.friendly_id');
            $link = $this->link_obj->findFriendlyLink($where);
            if($link){
                $this->assign('link',$link);
                $this->display('editFriendlyLink');
            }else{
                $this->error('该链接不存在或被删除');
            }
        }else{
            $where['friendly_id'] = I('post.friendly_id');
            $data = $this->link_obj->create();
            if($data){
                //是否上传了LOGO
                if(!empty($_FILES['friendly_logo']['name'])){
                    //上传LOGO
                    $data['friendly_logo'] = $this->uploadImg();
                }
                $upd_res = $this->link_obj->editFriendlyLink($where,$data);
                if($upd_res){
                    $this->success('编辑友情链接成功',cookie("EDIT_BACK"));
                }else{
                    $this->error('编辑友情链接失败');
                }
            }else{
                $this->error($this->link_obj->getError());
            }
        }
    }

    /**
     * 删除操作
     */
    public function deleteFriendlyLink(){
        $this->checkAuth('FriendlyLink','deleteFriendlyLink');
        if(empty($_REQUEST['friendly_id'])){
            $this->error('您未选择任何操作对象');
        }
        $where['friendly_id'] = array('IN',I('request.friendly_id'));
        $data['status'] = 9;
        $data['utime'] = time();
        $upd_res = $this->link_obj->editFriendlyLink($where,$data);
        if($upd_res){
            $this->success('删除操作成功');
        }else{
            $this->error('删除操作失败');
        }
    }
    /**
     * @return string
     * 上传链接LOGO
     */
    public function uploadImg(){
        $res = uploadFile('','FriendlyLogo');
        if(empty($res['error'])){
            return $res['success'];
        }else{
            $this->error($res['error']);
        }
    }

    /**
     * 编辑排序
     */
    public function editSort(){
        //修改条件 ID
        $where['friendly_id'] = I('post.id');
        $data['sort_order'] = I('post.sort');
        //修改操作
        $upd_res = $this->link_obj->editFriendlyLink($where,$data);
        if($upd_res){
            $this->ajaxMsg('success','修改排序成功');
        }else{
            $this->ajaxMsg('error','修改排序失败，可能是未改变排序值');
        }
    }
}