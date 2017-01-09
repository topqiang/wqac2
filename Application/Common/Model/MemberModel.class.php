<?php
namespace Common\Model;
use Think\Model;

/**
 * Class MemberModel
 * @package Common\Model
 * 会员信息相关
 */
class MemberModel extends Model {
    protected $tableName = 'member';

    /**
     * @var array
     * 自动验证   使用create()方法时自动调用
     */
    protected $_validate = array(
        array('m_account','require','账号不能为空！'), //空验证  默认情况下用正则进行验证
        array('m_account','','该帐号已经存在！',self::EXISTS_VALIDATE,'unique',self::MODEL_INSERT), // 在新增的时候验证m_account字段是否唯一
        array('m_password','require','密码不能为空！'),
        array('m_password','6,15','密码长度应在6-15位之间！',self::EXISTS_VALIDATE,'length'),
        array('re_m_password','require','确认密码不能为空！'),
        array('re_m_password','6,15','确认密码长度应在6-15位之间！',self::EXISTS_VALIDATE,'length'),
        array('re_m_password','m_password','确认密码与密码不一致！',self::EXISTS_VALIDATE,'confirm'), // 验证确认密码是否和密码一致
    );
    /**
     * @var array
     * 自动完成   新增时
     */
    protected $_auto = array (
        array('m_password','md5',self::MODEL_INSERT,'function') , // 对password字段在新增的时候使md5函数处理
        array('ctime','time',self::MODEL_INSERT,'function'), // 对ctime字段在插入的时候写入当前时间戳
        array('utime','time',self::MODEL_UPDATE,'function'), // 对utime字段在修改的时候写入当前时间戳
        array('last_login_time',self::MODEL_UPDATE,'function'),
    );
    /**
     * 查询多条数据
     */
    public function selectMember($where = array(),$order = '',$page_size = '',$parameter = array()){
        if($where['status'] == ''|| empty($where['status'])){
            $where['status'] = array('neq','9');
        }if($page_size == ''){
            $result = $this->where($where)->order($order)->select();
        }else{
            $count = $this->where($where)->count();
            $page = new \Think\Page($count,$page_size);
            $page->parameter = $parameter;
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
     * 添加会员
     */
    public function addMember($data){
        if(empty($data)){
            return false;
        }
        $result = $this->data($data)->add();
        return $result;
    }
    /**
     * 多条数据同时添加
     */
    public function addMemberAll($data){
        if(empty($data)){
            return false;
        }
        $result = $this->addAll($data);
        return $result;
    }
    /**
     * 查询一条数据
     */
    public function findMember($where){
        if($where['status'] == '' || empty($where['status'])){
            $where['status'] = array('neq','9');
        }
        $result = $this->where($where)->find();
        return $result;
    }
    /**
     * 编辑会员
     */
    public function editMember($where,$data){
        if(empty($where) || empty($data)){
            return false;
        }
        $result = $this->where($where)->data($data)->save();
        return $result;
    }
    /**
     * 删除会员
     */
    public function deleteMember($where){
        if(empty($where)){
            return false;
        }
        $result = $this->where($where)->delete();
        return $result;
    }

    /**
     * 处理数据
     */
    public function manageMemberInfo(){

    }
}
