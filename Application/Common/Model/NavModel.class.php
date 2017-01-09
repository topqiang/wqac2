<?php
namespace Common\Model;
use Think\Model;

/**
 * Class NavModel
 * @package Admin\Model
 * 2014-5-28  导航相关
 */
class NavModel extends Model {
    protected $tableName = 'navigation';
    /**
     * @var array
     * 自动验证   使用create()方法时自动调用
     */
    protected $_validate = array(
        array('nav_name','require','导航名称不能为空！'), //空验证  默认情况下用正则进行验证
        array('nav_name','','导航名称已经存在！',self::EXISTS_VALIDATE,'unique',self::MODEL_INSERT), // 在新增的时候验证name字段是否唯一
        array('nav_name','0,15','导航名称在6个字以内！',self::EXISTS_VALIDATE,'length'),
        array('nav_link','require','导航链接不能为空！'),
    );
    /**
     * @var array
     * 自动完成   新增时
     */
    protected $_auto = array (
        array('ctime','time',self::MODEL_INSERT,'function'), // 对ctime字段在插入的时候写入当前时间戳
        array('utime','time',self::MODEL_UPDATE,'function'), // 对utime字段在修改的时候写入当前时间戳
    );

    /**
     * 查询多条数据
     */
    public function selectNav($where = array(),$order = '',$page_size = ''){
        if($where['status'] == ''|| empty($where['status'])){
            $where['status'] = array('neq',9);
        }
        if($page_size == ''){
            $result = $this->where($where)->order($order)->select();
        }else{
            $count = $this->where($where)->order($order)->count();
            $page = new \Think\Page($count,$page_size);
            $page->setConfig('theme',"<ul class='pagination'>
                <li>%TOTAL_ROW%</li>
                <li>%UP_PAGE%</li>
                %LINK_PAGE%
                <li>%DOWN_PAGE%</li>
                </ul>"
            );
            $page_info =$page->show();
            $list = $this->where($where)
                ->order($order)
                ->limit($page->firstRow,$page_size)
                ->select();
            $result = array('page'=>$page_info,'list'=>$list);
        }
        return $result;
    }
    /**
     * 添加数据
     */
    public function addNav($data){
        if(empty($data)){
            return false;
        }else{
            $result = $this->data($data)->add();
            return $result;
        }
    }
    /**
     * 查询一条数据
     */
    public function findNav($where){
        if(empty($where)){
            return false;
        }else{
            if($where['status'] == '' || empty($where['status'])){
                $where['status'] = array('neq','9');
            }
            $result = $this->where($where)->find();
            return $result;
        }
    }
    /**
     * 编辑数据
     */
    public function editNav($where,$data){
        if(empty($where) || empty($data)){
            return false;
        }
        $result = $this->where($where)->data($data)->save();
        return $result;
    }
    /**
     * 删除数据
     */
    public function deleteNav($where){
        if(empty($where)){
            return false;
        }
        $result = $this->where($where)->delete();
        return $result;
    }

    /**
     * 数据相关处理
     * 当许多地方需要将取出的原数据惊醒改变格式 或添加某些相关数据
     */
    public function manageAdminInfo(){

    }
}