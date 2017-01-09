<?php
namespace Common\Model;
use Think\Model;

/**
* bug
*/
class BssModel extends Model{
	
	protected $tableName = 'bss_bug';

    /**
     * 自动验证 使用create()方法时自动调用
     */
    protected $_validate = array(
        array('b_type','require','请选择平台类型！'),  
        array('b_content','require','请输入要提交的bug内容'),
    );

	/**
     * 查询多条数据
     * @param array $where
     * @param string $order
     * @param string $page_size
     * @param array $parameter
     * @return array
     */
    public function selectBug($where = array(),$order = '',$page_size = '',$parameter = array()){
        if($where['status'] == ''|| empty($where['status'])){
            $where['status'] = array('neq','9');
        }
        if($order == ''){
        	$order = 'ctime desc';
        }
        if($page_size == ''){
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
	 * 添加bug
	 */
	public function addBug($data){
		if(empty($data)){
			return false;
		}
		$result = $this->data($data)->add();
		return $result;
	}
	
    /**
     * 修改BUG
     * @param array $where 修改条件
     * @param array $data   修改数据
     * @return bool
     */

    public function saveBug($where=array(),$data=array()){
        if(empty($data)){
            return false;
        }
        $result = $this->where($where)->save($data);
        return $result;
    }

    /**
     * 差选一条bug
     */

    public function findBug($where){
        if($whrer['status']=='' || empty($where['status'])){
            $where['status'] = array('neq','9');
        }
        $result = $this->where($where)->find();
        return $result;
    }
}

?>