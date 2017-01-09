<?php
namespace Common\Model;
use Think\Model;
/**
* 需求类别数据模型
*/
class RequireTypeModel extends Model{
	
	protected $tableName = 'require_type';

	protected $_validate = array(
		array('type_name','require','类别名称不能为空！'),
	);

	/**
     * 查询多条数据
     * @param array $where
     * @param string $order
     * @param string $page_size
     * @param array $parameter
     * @return array
     */
    public function selectRequireType($where = array(),$order = '',$page_size = '',$parameter = array()){
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
     * 查询一条数据
     */
    public function findRequireType($where){
    	if($where['status']=='0' || empty($where['status'])){
    		$where['status'] = array('neq','9');
    	}
    	$result = $this->where($where)->find();
    	return $result;
    }

    /**
     * 增加数据
     */
	public function addRequireType($data){
        if(empty($data)){
            return false;
        }
        $result = $this->data($data)->add();
        return $result;
    }


    /**
     * 修改数据
     */
    public function saveRequireType($where=array(),$data=array()){
        if(empty($data)){
            return false;
        }
        $result = $this->where($where)->save($data);
        return $result;
    }

    /**
     * 删除数据
     */
    public function deleteRequireType($where=array(),$data=array()){
        if(empty($data)){
            return false;
        }
        $result = $this->where($where)->delete($data);
        return $result;
    }

}

?>