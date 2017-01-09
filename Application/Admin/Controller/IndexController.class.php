<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * Class IndexController
 * @package Admin\Controller
 * 管理页面
 */
class IndexController extends AdminBasicController {

    public $stat_obj = '';
    public $member_obj = '';
    public $article_obj = '';
    public $config_obj = '';

    public $project_obj = '';
    public function _initialize(){
        $this->checkLogin();
        $this->stat_obj = D('Statistical','Service');
        $this->member_obj = D('Member');
        $this->article_obj = D('Article');
        $this->config_obj = D('Config');
        $this->project_obj = D("Project");
    }
    public function index(){
        $this->display('index');
    }
    public function top(){
        $this->assign('admin',session('A_ACCOUNT'));
        $config = $this->config_obj->findConfig();
        $this->assign('config',$config);
        $this->display('top');
    }
    public function left(){
        $this->display('left');
    }
    public function main(){
        //判断起始时间
        if(empty($_POST['start_time']) && empty($_POST['end_time'])){
            $start_time = date("Y-m");
            $end_time = date('Y-m', strtotime("+1 month"));
        }else{
            $start_time = I('post.start_time');
            $end_time = I('post.end_time');
        }
        //折线图数据 查询条件及对象
        $line_p1 = array('title'=>'项目金额统计','where'=>array('status'=>0),'obj'=>$this->project_obj,'sum'=>'p_money');
        $line_p2 = array('title'=>'订单数统计','where'=>array('status'=>0),'obj'=>$this->project_obj);
        //数据参数
        $line_parameter = array($line_p1,$line_p2);
        //获取数据
        $line_data = $this->stat_obj->getLineData(strtotime($start_time),strtotime($end_time),$line_parameter);
        //创建折线
        $this->assign('line',$this->stat_obj->createLine($line_data));
        //横坐标赋值时间
        $x_res = $this->stat_obj->createX(strtotime($start_time),strtotime($end_time));
        $this->assign('x_date',$x_res['x_date']);
        //相隔区间
        $this->assign('step',intval($x_res['step']));
        //顶部文字subtitle
        $this->assign('date_flag',$start_time.'　至　'.$end_time);

        //饼状图数据查询条件
        $pie_p1 = array('title'=>'男','where'=>array('m_sex'=>1,'m_type'=>array('eq',1)),'obj'=>$this->member_obj);
        $pie_p2 = array('title'=>'女','where'=>array('m_sex'=>2,'m_type'=>array('eq',1)),'obj'=>$this->member_obj);
        //数据参数
        $pie_parameter = array($pie_p1,$pie_p2);
        //获取数据
        $pie_data = $this->stat_obj->getPieData($pie_parameter);
        //创建饼状图
        $this->assign('sex_pie',$this->stat_obj->createPie($pie_data));//性别

        //管理员组别提示 每天提示 非超级管理员
        if(cookie('INFORMATION') != 1 && session('A_GROUP') != 0){
            $this->assign('group',D('AdminGroup')->where(array('group_id'=>session('A_GROUP'),'status'=>0))->getField('group_name'));
            cookie("INFORMATION",1,array('expire'=>86400));
        }
        $this->display('main');
    }
}