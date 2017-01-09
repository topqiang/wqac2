<?php
/**
 * Created by PhpStorm.
 * User: jinjin
 * Date: 14-9-17
 * Time: 下午4:26
 */
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller{

    public $Project = '';
    /**
     * 初始化定义
     */
    public function _initialize(){
        $this -> directory = M('Directory');

    }

    /**
     * 首页
     */
    public function index(){

        $this->display();
    }

    /**
     * 作品列表
     */
    public function selectCase(){
        $where['is_show'] = 1;
        $project = $this->Project->selectProject($where,'sort_order desc',12);
        $project_list = $project['list'];
        $this->assign('page',$project['page']);
        $this->assign('project_list',$project_list);
        $this->assign('nav',3);
        $this->display();
    }
    /**
    * 进入编辑页面
    *
    */
    public function edit(){
        $where['parent_id'] = 0;
        $where['status'] = array('neq','9');
        $dirlist = $this -> directory -> where( $where ) -> select();
        $this -> assign('dirlist',$dirlist);
        $this -> display();
    }

    /**
    * 查找子集目录
    *
    **/
    public function findNode(){
        $where['parent_id'] = $_POST['parent_id'];
        if (empty($where['parent_id'])) {
            apiResponse("error","父级id 不能为空！");
        }
        $where['status'] = array('neq','9');
        $dirlist = $this -> directory -> where( $where ) -> select();
        apiResponse("success","查询成功！",$dirlist);
    }

    /**
    * 添加目录
    *
    */ 
    public function addDirectory(){
        $node_name = $_POST['node_name'];        
        if(!isset($node_name)){
            apiResponse('error','文件名为空！');
        }
        $parent_id = $_POST['parent_id'];
        $atical_id = $_POST['atical_id'];
        $data = array(
            "node_name" => $node_name, 
            "parent_id" => $parent_id,
            "atical_id" => $atical_id,
            "c_time" => time()
            );
        $res = $this ->directory -> add($data);
        if (!empty($res)) {
            $this -> directory -> where(array("id" => $parent_id)) -> setInc("has_child",1);
            apiResponse("success","创建成功！",$res);
        }else{
            apiResponse("error","创建失败！",$res);
        }
    }
    /**
    * 修改目录
    *
    */

    public function editDir(){
        $node_name = $_POST['node_name'];
        $id = $_POST['id'];
        if (empty($node_name)) {
            apiResponse("error","文件名为空！");
        }else if ( empty( $id ) ) {
            apiResponse("error","文件不存在！");
        }
        $data = array(
            "node_name" => $node_name,
            "id" => $id,
            "u_time" => time()
            );
        $res = $this -> directory -> save($data);
        if ( isset( $res ) ) {
            apiResponse("success","修改成功！");
        }
        apiResponse("error","修改失败！");
    }

    /**
    * 删除目录
    *
    **/
    public function delDir(){
        $id = $_POST['id'];
        $parent_id = $_POST['parent_id'];
        if (empty($id)) {
            apiResponse("error","请指定删除的文件！");
        }
        if (empty($parent_id)) {
            apiResponse("error","父级菜单未指定");
        }
        $data = array(
            "id" => $id,
            "status" => 9
            );
        $res = $this -> directory -> save( $data );
        if (isset( $res )) {
            if ($parent_id != 0) {
                $this -> directory->where(array("id" => $parent_id)) -> setInc("has_child",-1);
            }
            apiResponse("success","删除成功！");
        }else{
            apiResponse("error","未知错误！");
        }
    }

    /**
    * 查询文件内容   
    *
    **/
    public function getContent(){
        $id = $_POST['id'];
        if (empty($id)) {
            apiResponse("error","请指定文件！");
        }
        $res = $this -> directory -> field("md_content,html_content") -> where(array("id" => $id)) -> select();
        if (isset($res)) {
            apiResponse("success","查找成功！",$res[0]);
        }else{
            apiResponse("error","文件不存在！");
        }
    }

    /*
    * 修改文件内容
    *
    *
    **/
    public function saveContent(){
        $id = $_POST['id'];
        $md_content = $_POST['md_content'];
        $html_content = $_POST['html_content'];
        if (empty( $id )) {
            apiResponse("error","文件不存在！");
        }else if(empty( $md_content )){
            apiResponse("error","内容为空！");
        }else if(empty( $html_content) ){
            apiResponse("error","view数据为空！");
        }
        
        $data = array(
            "id" => $id,
            "md_content" => $md_content,
            "html_content" => $html_content
            );
        $res = $this -> directory -> save($data);
        if (isset($res)) {
            apiResponse("success","保存成功！");
        }else{
            apiResponse("error","保存失败！");
        }
    }

    /**
     * 作品详情
     */
    public function findCase(){
        $project_info = $this->Project->findProject(array('p_id'=>$_GET['p_id']));
        if(empty($project_info)){
            $this->error('该产品已下架',U('Index/index'));
        }
        $this->Project->where(array('p_id'=>$_GET['p_id']))->setInc("read_num");
        $this->assign('project_info',$project_info);
        $pic_arr = explode(',',$project_info['p_pics']);
        $this->assign('pic_arr',$pic_arr);
        $this->assign('nav',3);
        $this->display();
    }

    /**
     * 关于我们
     */
    public function aboutUs(){
        $this->assign('nav',5);
        $this->display();
    }

    public function mkToHTML(){
        $data = "mkToHTML=".urldecode($_POST['mkToHTML']);
        $json = $this -> curl( $data , "localhost:3000/mkToHTML");
        
        $this -> ajaxReturn($json);
    }


    public function curl($data,$url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT,  'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tmpInfo=curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_errno($ch);
        }
        curl_close($ch);
        return $tmpInfo;
    }
}