<?php
namespace Common\Model;
use Think\Model;
/**
 * Class ArticleModel
 * @package Common\Model
 * 2014-5-30  文章数据操作
 */
class ArticleModel extends Model{
    protected $tableName = 'article';
    /**
     * @var array
     * 自动验证   使用create()方法时自动调用
     */
    protected $_validate = array(
        array('title','require','标题不能为空！'), //空验证  默认情况下用正则进行验证
        array('title','0,20','标题在20个字以内！',self::EXISTS_VALIDATE,'length'),
        array('cate_id','0','请选择文章分类！',self::EXISTS_VALIDATE,'notequal'),
        array('content','require','内容不能为空！'),
        array('link','/http(s)?:\/\/([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/','链接地址格式不正确！',self::VALUE_VALIDATE,'regex'),
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
	 * 文章列表
	 */
	public function selectArticle($where = array(), $order = '',$page_size = '',$parameter = array()){
        if($where['status'] == ''|| empty($where['status'])){
            $where['status'] = array('neq',9);
        }
        if($page_size == ''){
            $result = $this->where($where)->order($order)->select();
        }else{
            $count = $this->where($where)->order($order)->count();
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
		//获取分类名称
		$cate_obj = D('ArticleCate');
		foreach($result['list'] as $key => $value){
            $result['list'][$key]['cate_name'] = $cate_obj->where(array('cate_id'=>$value['cate_id']))->getField('cate_name');
		}
		return $result;
	}

	/**
	 * 添加文章
	 */
	public function findArticle($where){
        if(empty($where)){
            return false;
        }
        if($where['status'] == ''|| empty($where['status'])){
            $where['status'] = array('neq',9);
        }
        $result = $this->where($where)->find();
		return $result;
	}

	/**
	 * 编辑文章
	 */
	public function editArticle($where,$data){
        if(empty($where) || empty($data)){
            return false;
        }
        $result = $this->where($where)->save($data);
		return $result;
	}

	/**
	 * 发布文章
	 */
	public function addArticle($data){
		if(empty($data)){
            return false;
        }
		$result = $this->data($data)->add();
        return $result;
	}

    /*$where['_string'] = 'a.cate_id=c.cate_id';
    $list = $this->table(C('DB_PREFIX').'article a,'.C('DB_PREFIX').'article_category c')
    ->field('a.*,c.cate_name')
    ->where($where)
    ->order($order)
    ->limit($page->firstRow,$page_size)
    ->select();*/

    /*$list = $this->where($where)
    ->field($this->tablePrefix.'article.*,c.cat_name')
    ->join($this->tablePrefix.'category as c ON '.$this->tablePrefix.'article.cat_id=c.cat_id')
    ->order('add_time desc')
    ->limit($Page->firstRow.','.$Page->listRows)
    ->select();*/

}
