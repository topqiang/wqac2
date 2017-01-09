<?php
namespace Common\Model;
use Think\Model;

/**
 * Class ArticleCateModel
 * @package Common\Model
 * 2014-5-29   文章分类
 */
class ArticleCateModel extends Model {
    protected $tableName = 'article_category';
    /**
     * @var array
     * 自动验证   使用create()方法时自动调用
     */
    protected $_validate = array(
        array('cate_name','require','分类名称不能为空！'), //空验证  默认情况下用正则进行验证
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
     * 获得文章分类 2014-5-29
     * $parent_id 父级ID
     * $is_child 是否显示子级
     * */
    function getArticleCate($parent_id = 0,$is_child = false){
        $result = $this->where(array('parent_id'=>$parent_id,'status'=>0))->order('sort_order desc')->select();
        if($is_child){
            foreach ($result as $key => $val){
                $result[$key]['add_time'] = date('Y-m-d',$val['ctime']);
                //ajax操作分类显示与否的 html
                $art_cate_str = "<span class='icon glyphicon glyphicon-ok is-show-operate txt-grren' title='显示' style1></span><input type='hidden' value='".U('ArticleCate/isShowOperate')."||".$val['cate_id']."||1'>
                <span class='icon glyphicon glyphicon-remove is-show-operate txt-red' title='不显示' style2></span><input type='hidden' value='".U('ArticleCate/isShowOperate')."||".$val['cate_id']."||0''>";
                //是否显示 正则替换样式
                if($val['is_show'] == 0){
                    $result[$key]['art_cate_is_show'] = preg_replace(array('/style1/','/style2/'),array("style='display:none;'",""),$art_cate_str);
                }elseif($val['is_show'] == 1){
                    $result[$key]['art_cate_is_show'] = preg_replace(array('/style1/','/style2/'),array("","style='display:none;'"),$art_cate_str);
                }
                $result[$key]['child'] = $this->getChild($val['cate_id']);
            }
        }
        return $result;
    }
    /**
     *添加下拉选择菜单时   2014-5-29
     * $parent_id 父级ID
     * $is_child 是否显示子级
     */
    function getAllCategory($parent_id = 0,$is_child = false){
        $result = $this->where(array('parent_id'=>$parent_id,'status'=>0))->order('sort_order desc')->select();
        if($is_child){
            foreach ($result as $key => $val){
                $result[$key]['child'] = $this->getChild($val['cate_id']);
            }
        }
        return $result;
    }
    /**
     * 获得子分类 2014-5-29
     * $cate_id 分类ID
     * $child 是否显示子级
     */
    function getChild($cate_id,$child = true){
        if (empty($cate_id)){
            return;
        }
        $result = $this->where(array('parent_id'=>$cate_id,'status'=>0))->select();
        if ($child){
            foreach($result as $key => $val){
                $result[$key]['add_time'] = date('Y-m-d',$val['ctime']);
                //ajax操作分类显示与否的 html
                $art_cate_str = "<span class='icon glyphicon glyphicon-ok is-show-operate txt-grren' title='显示' style1></span><input type='hidden' value='".U('ArticleCate/isShowOperate')."||".$val['cate_id']."||1'>
                 <span class='icon glyphicon glyphicon-remove is-show-operate txt-red' title='不显示' style2></span><input type='hidden' value='".U('ArticleCate/isShowOperate')."||".$val['cate_id']."||0''>";
                //是否显示 正则替换样式
                if($val['is_show'] == 0){
                    $result[$key]['art_cate_is_show'] = preg_replace(array('/style1/','/style2/'),array("style='display:none;'",""),$art_cate_str);
                }elseif($val['is_show'] == 1){
                    $result[$key]['art_cate_is_show'] = preg_replace(array('/style1/','/style2/'),array("","style='display:none;'"),$art_cate_str);
                }
                $result[$key]['child'] = $this->getChild($val['cate_id']);
            }
        }
        return $result;
    }
    /**
     *查询分类 一条数据
     */
    public function findArticleCate($where){
        if(empty($where)){
            return false;
        }
        if($where['status'] == ''||empty($where['status'])){
            $where['status'] = 0;
        }
        $result = $this->where($where)->find();
        return $result;
    }
    /**
     * 添加分类
     */
    public function addArticleCate($data){
        if(empty($data)){
            return false;
        }
        $result = $this->data($data)->add();
        return $result;
    }
    /**
     * 删除分类
     */
    public function deleteArticleCate($where){
        if(empty($where)){
            return false;
        }
        $result = $this->where($where)->delete();
        return $result;
    }
    /**
     * 查询分类 全部数据
     */
    public function selectArticleCate($where = array(),$order = '',$page_size = ''){
        if($where['status'] == ''|| empty($where['status'])){
            $where['status'] = array('neq',9);
        }
        if($page_size == ''){
            $result = $this->where($where)->order($order)->select();
        }else{
            $count = $this->where($where)->order($order)->count();
            $page = new \Think\Page($count,$page_size);
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
     *编辑分类
     */
    public function editArticleCate($where,$data){
        if(empty($where) || empty($data)){
            return false;
        }
        $result = $this->where($where)->data($data)->save();
        return $result;
    }
}