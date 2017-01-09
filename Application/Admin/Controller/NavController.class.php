<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * Class NavController
 * @package Admin\Controller
 * 2014-5-28   导航控制
 */
class NavController extends AdminBasicController {

    public $nav_obj = '';
    public function _initialize(){
        $this->checkLogin();
        $this->nav_obj = D('Nav');
    }
    /**
     * 导航列表
     * 2014-5-28
     */
    public function navList(){
        //导航列表
        $nav_list = $this->nav_obj->selectNav('','',$this->getPageNumber());
        if($nav_list['list']){
            foreach($nav_list['list'] as $key => $nav){
                //判断链接是否存在http://
                if(!strpos($nav['nav_link'], '://')){
                    $nav_list['list'][$key]['link'] = C('API_URL')."/index.php?s=/".$nav['nav_link'];
                }
            }
            $this->assign('nav_list',$nav_list['list']);
            $this->assign('page',$nav_list['page']);
        }
        //编辑后返回
        $this->setEditBack(U('Nav/navList',$_REQUEST));
        $this->display('navList');
    }

    /**
     * 添加导航
     * 2014-5-28
     */
    public function addNav(){
        $this->checkAuth('Nav','addNav');
        if(empty($_POST)){
            $this->display('addNav');
        }else{
            $data = $this->nav_obj->create();
            if($data){
                $add_res = $this->nav_obj->addNav($data);
                if($add_res){
                    $this->success('添加导航成功',U('Nav/navList'));
                }else{
                    $this->error('添加导航失败');
                }
            }else{
                $this->error($this->nav_obj->getError());
            }
        }
    }

    /**
     * 修改导航
     * 2014-5-28
     */
    public function editNav(){
        $this->checkAuth('Nav','editNav');
        if(empty($_POST)){
            $where['nav_id'] = I('get.nav_id');
            $nav = $this->nav_obj->findNav($where);
            if($nav){
                $this->assign('nav',$nav);
                $this->display('editNav');
            }else{
                $this->error('该导航不存在或被删除');
            }
        }else{
            $where['nav_id'] = I('post.nav_id');
            $data = $this->nav_obj->create();
            if($data){
                $upd_res = $this->nav_obj->editNav($where,$data);
                if($upd_res){
                    $this->success('编辑导航成功',cookie("EDIT_BACK"));
                }else{
                    $this->error('编辑导航失败');
                }
            }else{
                $this->error($this->nav_obj->getError());
            }
        }
    }

    /**
     * 删除导航
     * 2014-5-28
     */
    public function deleteNav(){
        $this->checkAuth('Nav','deleteNav');
        $where['nav_id'] = I('get.nav_id');
        $data['status'] = 9;
        $data['utime'] = time();
        $upd_res = $this->nav_obj->editNav($where,$data);
        if($upd_res){
            $this->success('删除成功');
        }else{
            $this->error('本次删除失败');
        }
    }

    /**
     * 编辑导航是否显示
     */
    public function isShowOperate(){
        //修改条件 ID
        $where['nav_id'] = I('post.id');
        //判断修改为显示或者不显示
        if(I('post.flag') == 1){
            $data['is_show'] = 0;
        }elseif(I('post.flag') == 0){
            $data['is_show'] = 1;
        }
        //修改操作
        $upd_res = $this->nav_obj->editNav($where,$data);
        if($upd_res){
            $this->ajaxMsg('success','编辑成功');
        }else{
            $this->ajaxMsg('error','编辑失败');
        }
    }

    /**
     * 编辑排序
     */
    public function editSort(){
        //修改条件 ID
        $where['nav_id'] = I('post.id');
        $data['sort_order'] = I('post.sort');
        //修改操作
        $upd_res = $this->nav_obj->editNav($where,$data);
        if($upd_res){
            $this->ajaxMsg('success','修改排序成功');
        }else{
            $this->ajaxMsg('error','修改排序失败，可能是未改变排序值');
        }
    }
}