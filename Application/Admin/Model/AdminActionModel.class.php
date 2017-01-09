<?php
namespace Admin\Model;
use Think\Model;

/**
 * Class AdminActionModel
 * @package Admin\Model
 * 2014-5-28  管理员权限信息相关
 */
class AdminActionModel extends Model {
    protected $tableName = 'admin_action';
    /**
     * 查询多条数据
     */
    public function selectAdminAction(){
        $result = $this->select();
        return $result;
    }
    /**
     * 查询一条数据
     */
    public function findAdmin($where){
        if(empty($where)){
            return false;
        }else{
            $result = $this->where($where)->find();
            return $result;
        }
    }
}