<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * Class AdvertController
 * @package Admin\Controller
 * 广告控制类
 */
class AdvertController extends AdminBasicController {

    public $ad_obj = '';
    public function _initialize(){
        $this->checkLogin();
        $this->ad_obj = D('Advert');
    }
    /**
     * 广告列表
     * 2014-5-28
     */
    public function advertList(){
        //导航列表
        if(!empty($_REQUEST['ad_desc'])){   //广告描述查询
            $where['ad_desc'] = array('LIKE',"%".I('request.ad_desc')."%");
            $parameter['ad_desc'] = $_REQUEST['ad_desc'];
        }
        if(!empty($_REQUEST['ad_position'])){   //广告类型查询
            $where['ad_position'] = I('request.ad_position');
            $parameter['ad_position'] = $_REQUEST['ad_position'];
        }
        $ad_list = $this->ad_obj->selectAdvert($where,'',$this->getPageNumber(),$parameter);
        $arr = C('AD_POSITION');
        if($ad_list['list']){
            foreach($ad_list['list'] as $key => $ad){
                //广告位置
                $ad_list['list'][$key]['ad_position'] = $arr[$ad['ad_position']];
            }
            $this->assign('ad_list',$ad_list['list']);
            $this->assign('page',$ad_list['page']);
        }
        //编辑后返回
        $this->setEditBack(U('Advert/advertList',$_REQUEST));
        //广告位置
        $this->assign('ad_position',C('AD_POSITION'));
        //提交的参数传回前台 赋值到搜索表单
        $this->assign('request',$_REQUEST);
        $this->display('advertList');
    }

    /**
     * 添加广告
     * 2014-5-28
     */
    public function addAdvert(){
        $this->checkAuth('Advert','addAdvert');
        if(empty($_POST)){
            //广告位置
            $this->assign('ad_position',C('AD_POSITION'));
            $this->display('addAdvert');
        }else{
            $data = $this->ad_obj->create();
            if($data){
                //是否上传了广告图片
                if(empty($_FILES['ad_pic']['name'])){
                    $this->error('未上传广告图片');
                }else{
                    //上传广告图片
                    $data['ad_pic'] = $this->uploadImg();
                }
                $add_res = $this->ad_obj->addAdvert($data);
                if($add_res){
                    $this->success('添加广告成功',U('Advert/advertList'));
                }else{
                    $this->error('添加广告失败');
                }
            }else{
                $this->error($this->ad_obj->getError());
            }
        }
    }

    /**
     * 修改广告
     * 2014-5-28
     */
    public function editAdvert(){
        $this->checkAuth('Advert','editAdvert');
        if(empty($_POST)){
            $where['ad_id'] = I('get.ad_id');
            $ad = $this->ad_obj->findAdvert($where);
            if($ad){
                //广告位置
                $this->assign('ad_position',C('AD_POSITION'));
                $this->assign('ad',$ad);
                $this->display('editAdvert');
            }else{
                $this->error('该广告不存在或被删除');
            }
        }else{
            $where['ad_id'] = I('post.ad_id');
            $data = $this->ad_obj->create();
            if($data){
                //是否上传了广告图片
                if(!empty($_FILES['ad_pic']['name'])){
                    //上传广告图片
                    $data['ad_pic'] = $this->uploadImg();
                }
                $upd_res = $this->ad_obj->editAdvert($where,$data);
                if($upd_res){
                    $this->success('编辑广告成功',cookie("EDIT_BACK"));
                }else{
                    $this->error('编辑广告失败');
                }
            }else{
                $this->error($this->ad_obj->getError());
            }
        }
    }

    /**
     * 删除操作
     */
    public function deleteAdvert(){
        $this->checkAuth('Advert','deleteAdvert');
        if(empty($_REQUEST['ad_id'])){
            $this->error('您未选择任何操作对象');
        }
        $where['ad_id'] = array('IN',I('request.ad_id'));
        $data['status'] = 9;
        $data['utime'] = time();
        $upd_res = $this->ad_obj->editAdvert($where,$data);
        if($upd_res){
            $this->success('删除操作成功');
        }else{
            $this->error('删除操作失败');
        }
    }

    /**
     * @return string
     * 上传广告图片
     */
    public function uploadImg(){
        $res = uploadFile('','Advert');
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
        $where['ad_id'] = I('post.id');
        $data['sort_order'] = I('post.sort');
        //修改操作
        $upd_res = $this->ad_obj->editAdvert($where,$data);
        if($upd_res){
            $this->ajaxMsg('success','修改排序成功');
        }else{
            $this->ajaxMsg('error','修改排序失败，可能是未改变排序值');
        }
    }
}