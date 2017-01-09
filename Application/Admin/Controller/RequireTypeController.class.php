<?php
namespace Admin\Controller;
use Think\Controller;
/**
* 需求类别列表
*/
class RequireTypeController extends AdminBasicController{

	public $RequireType = '';

	public function _initialize(){
		$this->checkLogin();
		$this->RequireType = D("RequireType");
	}

    /**
     * 添加需求类别
     */
    public function addRequireType(){
        if(empty($_POST)){
            $this->display("addRequireType");
        }else{
            if($this->RequireType->where(array('type_name'=>I('post.type_name')))->find()){
                $this->error("类别名称已经存在");
            }
            $data = $this->RequireType->create();
            $data['type_note'] = I('post.type_note');
            $data['type_case'] = I('post.type_case');
            $data['ctime'] = time();
            if($data){
                if($this->RequireType->addRequireType($data)){
                    $this->success("添加成功",U('RequireType/selectRequireType'));
                }else{
                    $this->error("添加失败");
                }
            }else{
                $this->error($this->RequireType->getError());
            }
        }
    }

    /**
	 * 显示需求类别列表
	 */
	public function selectRequireType(){
		$where = array();
		if(isset($_POST['re_contact'])){
			$where['re_contact'] = array('like','%'.$_POST['re_contact'].'%');
		}
		if(isset($_POST['type_name'])){
			$where['type_name'] = array('like','%'.$_POST['type_name'].'%');
		}
		$requireType = $this->RequireType->selectRequireType($where,'',50,'');
		$require_type_list = $requireType['list'];
		$this->assign('require_type_list',$require_type_list);
		$this->assign('page',$requireType['page']);
		$this->display('selectRequireType');
	}

	/**
	 * 修改需求
	 */
	public function saveRequireType(){
		if(empty($_POST)){
			$where['re_type_id'] = I('get.re_type_id');
			$require_type_info = $this->RequireType->findRequireType($where);
			if($require_type_info){
				$this->assign('type_info',$require_type_info);
				$this->display('saveRequireType');
			}else{
				$this->error('该需求不存在！！！');
			}
		}else{
            $where_name['re_type_id'] = array('neq',I('post.re_type_id'));
            $where_name['type_name'] = I('post.type_name');
            if($this->RequireType->where($where_name)->find()){
                $this->error("类别名称已经存在");
            }
			if($data = $this->RequireType->create()){
                $data['type_note'] = $_POST['type_note'];
                $data['type_case'] = $_POST['type_case'];
				$data['utime'] =  time();
		    	$where = array('re_type_id'=>I('post.re_type_id'));
				$result = $this->RequireType->saveRequireType($where,$data);
		    	if($result){
		    		$this->success("修改成功",U('RequireType/selectRequireType'));
		    	}else{
		    		$this->success("修改失败");
		    	}
		    }else{
		    	$this->error($this->RequireType->getError());
		    }
		}
	}


	/**
	 * 删除需求
	 */
	public function deleteRequireType(){
		if(empty($_REQUEST['re_type_id'])){
			$this->error('您未选择任何操作对象');
		}
		$where['re_type_id'] = array('IN',I('request.re_type_id'));
		$data['status'] = 9;
		$result = $this->RequireType->saveRequireType($where,$data);
		if($result){
			$this->success('删除成功');
		}else{
			$this->success('删除失败');
		}
	}

}

?>