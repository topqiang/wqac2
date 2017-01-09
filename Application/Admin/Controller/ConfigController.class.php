<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * Class ConfigController
 * @package Admin\Controller
 * 2014-5-30   系统配置类
 */
class ConfigController extends AdminBasicController{

    public $config_obj = '';
    public function _initialize(){
        $this->checkLogin();
        $this->config_obj = D('Config');
    }

    /**
     * 网站配置
     */
    public function config(){
        if(empty($_POST)){
            $config = $this->config_obj->findConfig();
            $this->assign('config',$config);
            $this->display('config');
        }else{
            $this->checkAuth('Config','config');
            $data = $this->config_obj->create();
            if($data){
                //是否上传了LOGO
                if(!empty($_FILES['site_logo']['name'])){
                    $res = uploadFile('','config');
                    if(empty($res['error'])){
                        $data['site_logo'] = $res['success'];
                    }else{
                        $this->error($res['error']);
                    }
                }
                $upd_res = $this->config_obj->editConfig($data);
                if($upd_res){
                    $this->success('保存成功');
                }else{
                    $this->error('保存失败，原因可能是未修改任何值');
                }
            }else{
                $this->error($this->config_obj->getError());
            }
        }
    }
}