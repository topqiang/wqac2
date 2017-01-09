<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * Class ShopCategoryController
 * @package Admin\Controller
 * 2014-5-29  文章分类控制
 */
class ArticleCateController extends AdminBasicController {
    protected  $prohibit = array(54);   //禁止进行操作的分类数组
    public $article_cate_obj = '';
    public function _initialize(){
        $this->checkLogin();
        $this->article_cate_obj = D('ArticleCate');
    }
    /**
     * 文章分类列表 2014-5-29
     * 树状显示
     */
    public function categoryList(){
        //替换的字符串  若该分类禁止操作  将此处内容删除
        $replace = "<a href='".U('ArticleCate/addCategory')."/cate_id/{cate_id}' class='add'>
                        <span class='icon glyphicon glyphicon-plus' title='添加子分类'></span>
                    </a>&nbsp;
                    <a href='".U('ArticleCate/editCategory')."/cate_id/{cate_id}' class='modify'>
                        <span class='icon glyphicon glyphicon-pencil' title='编辑'></span>
                    </a>&nbsp;
                    <a href='###' class='delete-delete' title='{cate_id}'>
                        <span class='icon glyphicon glyphicon-remove' title='删除'></span>
                    </a><input type='hidden' value='".U('ArticleCate/deleteCategory')."/cate_id/{cate_id}'>";
        //分类模板
        $tmp = "<tr>
                    <td>{add_time}</td>
                    <td>{cate_id}</td>
                    <td>{nbsp}{cate_name}</td>
                    <td>{cate_desc}&nbsp;</td>
                    <td>{keywords}</td>
                    <td>
                    {art_cate_is_show}
                    </td>
                    <td>
                    <input type='text' value='{sort_order}' class='sort_order only-num' title='点击填写，再点击其他地方自动修改'>
                    <input type='hidden' value='{cate_id}'>
                    </td>
                    <td>".$replace."</td>
                </tr>";
        //分类数据
        $tree_data = $this->article_cate_obj->getArticleCate(0,true);
        //初始化树状结构类
        $tree = new \Think\Tree();
        //参数一  $tree_data层级结构数据
        //参数二  child子树数组名称
        //参数三  $tmp html模板
        //参数四  array()要赋值替换的字段内容
        //参数五  禁止操作时替换为''
        //参数六  禁止操作的ID  数组形式
        //参数七  ├&nbsp;根树的层级符号
        //参数八   └&nbsp;子树的层级符号
        //参数九  $indentation 子树缩进填充内容
        $tree -> __init($tree_data,'child',$tmp,array('cate_id','cate_name','cate_desc','keywords','sort_order','add_time','art_cate_is_show'),$replace,$this->prohibit,'├&nbsp;','└&nbsp;','　');
        $table = $tree->getTree();
        $this->assign('cate_list',$table);
        //编辑后返回
        $this->setEditBack(U('ArticleCate/categoryList',$_REQUEST));
        $this->display('categoryList');
    }

    /**
     * 验证该选择分类下是否可以进行操作
     * 2014-5-30
     */
    public function ajaxJudge(){
        //self_id下是否有子分类
        $cate = $this->article_cate_obj->findArticleCate(array('parent_id'=>I('post.self_id')));
        //不能使自身的子类  不再禁止范围内
        if(!empty($this->prohibit) && in_array(I('post.cate_id'),$this->prohibit) || I('post.cate_id') == I('post.self_id') || !empty($cate)){
            $this->ajaxMsg('error','禁止对该分类进行当前操作');
        }else{
            $this->ajaxMsg('success','ok');
        }
    }
    /**
     * 添加分类
     */
    public function addCategory(){
        $this->checkAuth('ArticleCate','addArticleCate');
        if(empty($_POST)){
            //添加分类
            if(empty($_GET['cate_id'])){
                $this->assign('cate_sel',$this->_categorySelect('',''));
            }else{//添加子分类
                if(!empty($this->prohibit) && in_array(I('get.cate_id'),$this->prohibit)){
                    $this->error('禁止对该分类进行当前操作');
                }else{
                    $this->assign('cate_sel',$this->_categorySelect(I('get.cate_id'),'cate_id'));
                }
            }
            $this->display('addCategory');
        }else{
            $data = $this->article_cate_obj->create();
            if($data){
                //上传分类图标
                if(!empty($_FILES['cate_icon']['name'])){
                    $data['cate_icon'] = $this->uploadImg();
                }
                $add_res = $this->article_cate_obj->addArticleCate($data);
                if($add_res){
                    $this->success('添加分类成功',U('ArticleCate/categoryList'));
                }else{
                    $this->error('添加分类失败');
                }
            }else{
                $this->error($this->article_cate_obj->getError());
            }
        }
    }

    /**
     * 编辑分类 2013-11-5 15:44:20
     * */
    public function editCategory(){
        $this->checkAuth('ArticleCate','editCategory');
        if(!empty($this->prohibit) && in_array(I('get.cate_id'),$this->prohibit)){
            $this->error('该分类禁止编辑');
        }else{
            if(empty($_POST)){
                $article_cate = $this->article_cate_obj->findArticleCate(array('cate_id'=>I('get.cate_id')));
                if($article_cate){
                    $this->assign('cate',$article_cate);
                    //分类下拉单
                    $this->assign('cate_sel',$this->_categorySelect($article_cate['parent_id'],'cate_id'));
                    $this->display('editCategory');
                }else{
                    $this->error('该分类不存在或已删除');
                }
            }else{
                $where['cate_id'] = I('post.cate_id');
                $data = $this->article_cate_obj->create();
                if($data){
                    if(!empty($_FILES['cate_icon']['name'])){
                        $data['cate_icon'] = $this->uploadImg();
                    }
                    $upd_res = $this->article_cate_obj->editArticleCate($where,$data);
                    if($upd_res){
                        $this->success('编辑分类成功',cookie("EDIT_BACK"));
                    }else{
                        $this->error('编辑分类失败');
                    }
                }else{
                    $this->error($this->article_cate_obj->getError());
                }
            }
        }
    }

    /**
     * 删除分类
     */
    public function deleteCategory(){
        $this->checkAuth('ArticleCate','deleteCategory');
        if(!empty($this->prohibit) && in_array(I('get.cate_id'),$this->prohibit)){
            $this->error('该分类禁止删除');
        }else{
            //判断是否有子分类
            $article_cate = $this->article_cate_obj->findArticleCate(array('parent_id'=>I('get.cate_id')));
            if($article_cate){
                $this->error('请先删除此分类的所有子类,在进行此操作');
            }else{
                $where['cate_id'] = I('get.cate_id');
                $data['status'] = 9;
                $data['utime'] = time();
                $upd_res = $this->article_cate_obj->editArticleCate($where,$data);
                if($upd_res){
                    $this->success('删除成功');
                }else{
                    $this->error('本次删除失败');
                }
            }
        }
    }

    /**
     * 生成 分类的下拉菜单
     * 2014-5-29
     * */
    private function _categorySelect($val,$index){
        //模板
        $select_tmp = '<option value="{cate_id}">{nbsp}{cate_name}</option>';
        $res = $this->article_cate_obj->getAllCategory(0,true);
        $tree = new \Think\Tree();
        //初始化下拉
        $tree->__init($res,'child',$select_tmp,array('cate_id','cate_name'));
        $select = '<select name="parent_id" class="form-control input-sm"><option value="0">--顶级分类--</option>'.$tree->getSelectTree($val,$index).'</select>';
        return $select;
    }

    /**
     * @return string
     * 上传分类图标
     */
    public function uploadImg(){
        $res = uploadFile('','CateIcons');
        if(empty($res['error'])){
            return $res['success'];
        }else{
            $this->error($res['error']);
        }
    }

    /**
     * 编辑分类是否显示
     */
    public function isShowOperate(){
        //修改条件 ID
        $where['cate_id'] = I('post.id');
        //判断修改为显示或者不显示
        if(I('post.flag') == 1){
            $data['is_show'] = 0;
        }elseif(I('post.flag') == 0){
            $data['is_show'] = 1;
        }
        //修改操作
        $upd_res = $this->article_cate_obj->editArticleCate($where,$data);
        if($upd_res){
            $this->ajaxMsg('success','编辑成功');
        }else{
            $this->ajaxMsg('error','编辑失败');
        }
    }

    /**
     * 编辑排序
     */
    public function editSort(){
        //修改条件 ID
        $where['cate_id'] = I('post.id');
        $data['sort_order'] = I('post.sort');
        //修改操作
        $upd_res = $this->article_cate_obj->editArticleCate($where,$data);
        if($upd_res){
            $this->ajaxMsg('success','修改排序成功');
        }else{
            $this->ajaxMsg('error','修改排序失败，可能是未改变排序值');
        }
    }
}
