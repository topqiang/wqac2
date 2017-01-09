<?php
namespace Common\Model;
use Think\Model;

/**
 * Class JobLogModel
 * @package Common\Model
 * 会员信息相关
 */
class JobLogModel extends Model {
    protected $tableName = 'job_log';

    /**
     * @var array
     * 自动验证   使用create()方法时自动调用
     */
    protected $_validate = array(
        array('p_name','require','项目名称不能为空！'), //空验证  默认情况下用正则进行验证
        array('p_name','','该项目已经存在！',self::EXISTS_VALIDATE,'unique',self::MODEL_INSERT), // 在新增的时候验证m_account字段是否唯一
        array('p_start_time','require','开始时间不能为空！'),
        array('p_end_time','require','结束时间不能为空！'),
        array('own_m_id','require','所属客户不能为空！'),
        array('c_ids[]','require','项目构成不能为空！'),
        array('join_m_ids[]','require','参与人员不能为空！'),
        array('p_desc','require','需求文档不能为空！'),
    );


    /**
     * 查询多条数据
     * @param array $where
     * @param string $order
     * @param string $page_size
     * @param array $parameter
     * @return array
     */
    public function selectJobLog($where = array(),$order = '',$page_size = '',$parameter = array()){
        if($where['status'] == ''|| empty($where['status'])){
            $where['status'] = array('neq','9');
        }if($page_size == ''){
            $result = $this->where($where)->order($order)->select();
        }else{
            $count = $this->where($where)->count();
            $page = new \Think\Page($count,$page_size);
            $page->parameter = $parameter;
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
    public function addJobLog($data){
        if(empty($data)){
            return false;
        }
        $result = $this->data($data)->add();
        return $result;
    }

    /**
     * 修改项目
     * @param array $where 修改条件
     * @param array $data   修改数据
     * @return bool
     */
    public function saveProject($where=array(),$data=array()){
        if(empty($data)){
            return false;
        }
        $result = $this->where($where)->save($data);
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
    public function findProject($where){
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
