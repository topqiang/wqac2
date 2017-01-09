<?php
namespace Home\Controller;
use Think\Controller;
/**
 * Class HomeBasicController
 * @package Home\Controller
 */
class HomeBasicController extends Controller {
    /**
     * 初始化定义
     */
    public $conf = '';//配置全局变量
    public $Bss = '';
    public $Project = '';
    public function _initialize(){


    }

    /**
     * 获取导航
     */
    public function getNav(){
        $nav_obj = D('Nav');
        $where['is_show'] = 1;
        $nav_list = $nav_obj->selectNav($where,'sort_order desc','');
        foreach($nav_list as $key => $nav){
            //判断链接是否存在http://
            if(!strpos($nav['nav_link'], '://')){
                $nav_list[$key]['nav_link'] = C('API_URL')."/index.php?s=/".$nav['nav_link'];
            }
        }
        return $nav_list;
    }
    /**
     * 获取配置信息
     */
    public function getConfig(){
        $conf_obj = D('Config');
        $config = $conf_obj->findConfig();
        return $config;
    }

    /**
     * 设置登录后回调
     */
    public function setBackUrl($back_url){
        cookie("BACK_URL",$back_url,array('expire'=>3600));
    }

    /**
     * 统计BUG总数
     */
    public function getBugNum(){
        if(cookie('M_TYPE')=='1'){
            //员工
            $mid = session('M_ID');
            $where['p_g'] = '2';
            $where['join_m_ids'] = array('like','%'.$mid.'%');
        }else{
            //客户
            $mid = session('M_ID');
            $where['own_m_id'] = $mid;
        }
        $project_list = $this->Project->selectProject($where);
        //获取内部员工所有项目id
        $pids = '';
        foreach ($project_list as $k => $v){
            $pids.=$v['p_id'].',';
        }
        //把内部员工所有项目id分割为数组
        $pidss = explode(',',substr($pids,0,-1));
        $bug_number = 0;
        foreach ($project_list as $key => $value) {
            //遍历员工当前项目
            if(cookie('M_TYPE')=='1'){
                $where_count['p_id'] = $pidss[$key];
            }else{
                $where_count['p_id'] = $value['p_id'];
            }
            /*获取BUG数量*/
            $where_count['status'] = array('neq','2');
            $bug_number += $this->Bss->where($where_count)->count();
        }
        return $bug_number;
    }

    /**
     * ajax返回数据
     * 2014-6-7
     */
    public function ajaxMsg($f,$m){
        $msg[$f] = $m;
        $this->ajaxReturn($msg,Json);
    }
    /**
     * 验证类型
     */
    /*public function typeRedirect(){
        if(!empty($_SESSION['MODEL_M_TYPE']) && $_SESSION['MODEL_M_TYPE'] == 2){
            redirect(U('Business/browseHistory'));exit;
        }
    }
    public function typeRedirect1(){
        if(!empty($_SESSION['MODEL_M_TYPE']) && $_SESSION['MODEL_M_TYPE'] != 2){
            redirect(U('Member/editInfo'));exit;
        }
    }*/
}
