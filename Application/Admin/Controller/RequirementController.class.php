<?php

namespace Admin\Controller;
use Think\Controller;

/**
* 需求列表
*/
class RequirementController extends AdminBasicController{

	public $Requirement = '';

	public function _initialize(){
		$this->checkLogin();
		$this->Requirement = D("Requirement");
	}

	/**
	 * 显示需求列表
	 */
	public function requirementList(){
		$where = array();
		if(isset($_POST['re_qq'])){
			$where['re_qq'] = array('like','%'.$_POST['re_qq'].'%');
		}
		if(isset($_POST['re_name'])){
			$where['re_name'] = array('like','%'.$_POST['re_name'].'%');
		}
		$requirement = $this->Requirement->selectRequirement($where,'',12,'');
		$requirement_list = $requirement['list'];
		$this->assign('requirement_list',$requirement_list);
		$this->assign('page',$requirement['page']);
		$this->display('requirementList');
	}

	/**
	 * 修改需求
	 */
	public function saveRequirement(){
		if(empty($_POST)){
			$where['re_id'] = I('get.re_id');
			$requirement_info = $this->Requirement->findRequirement($where);
			$this->assign('constitute',C('CONSTITUTE'));
			$requirement_info['re_ids_name'] = json_decode($requirement_info['re_ids']);
			if($requirement_info){
				$this->assign('requirement_info',$requirement_info);
				$this->display('saveRequirement');
			}else{
				$this-error('该需求不存在！！！');
			}
		}else{
			if($data = $this->Requirement->create()){
				$data = array(
		    		're_name' => I('post.reName'),
		    		're_content' => I('post.reContent'),
		    		're_model' => I('post.reModel'),
		    		're_desc' => I('post.reDesc'),
		    		're_ids' => json_encode(I('post.reIds')),
		    		're_reference' => I('post.reReference'),
		            're_app_time' =>I('post.appTime'),
		    		're_qq' => I('post.reQq'),
		    		'color' => I('post.color'),
		    		're_comment'=>I('post.reComment'),
		    	);
		    	$where = array('re_id'=>I('post.re_id'));
				$result = $this->Requirement->saveRequirement($where,$data);
		    	if($result){
		    		$this->success("修改成功");
		    	}else{
		    		$this->success("修改失败");
		    	}
		    }else{
		    	$this->error($this->Requirement->getError());
		    }
		}
	}


	/**
	 * 删除需求
	 */
	public function deleteRequirement(){
		if(empty($_REQUEST['re_id'])){
			$this->error('您未选择任何操作对象');
		}
		$where['re_id'] = array('IN',I('request.re_id'));
		$data['status'] = 9;
		$result = $this->Requirement->saveRequirement($where,$data);
		if($result){
			$this->success('删除成功');
		}else{
			$this->success('删除失败');
		}
	}

}

?>