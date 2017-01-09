<?php
namespace Common\Model;
use Think\Model;

/**
* 发布需求
*/
class RequirementModel extends Model{
	
	protected $tableName = 'requirement';

	protected $_validate = array(
		array('reName','require','项目需求名称不能为空！'),
		array('reName','','该项目需求已经存在！',self::EXISTS_VALIDATE,'unique',self::MODEL_INSERT),
		array('reContent','require','项目需求内容不能为空！'),
		array('reModel','require','项目功能模块不能为空！'),
		array('reDesc','require','项目功能模块详细描述不能为空！'),
		array('reIds[]','require','项目需要的平台不能为空！'),
		array('reTime','require','项目需求周期不能为空！'),
        array('reQq','require','QQ号码不能为空！'),
	);

	/**
     * 查询多条数据
     * @param array $where
     * @param string $order
     * @param string $page_size
     * @param array $parameter
     * @return array
     */
    public function selectRequirement($where = array(),$order = '',$page_size = '',$parameter = array()){
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
    public function findRequirement($where){
    	if($where['status']=='0' || empty($where['status'])){
    		$where['status'] = array('neq','9');
    	}
    	$result = $this->where($where)->find();
    	return $result;
    }

    /**
     * 增加数据
     */
	public function addRequirement($data){
        if(empty($data)){
            return false;
        }
        $result = $this->data($data)->add();
        return $result;
    }


    /**
     * 修改数据
     */
    public function saveRequirement($where=array(),$data=array()){
        if(empty($data)){
            return false;
        }
        $result = $this->where($where)->save($data);
        return $result;
    }

    /**
     * 删除数据
     */
    public function deleteRequirement($where=array(),$data=array()){
        if(empty($data)){
            return false;
        }
        $result = $this->where($where)->delete($data);
        return $result;
    }

}

?>