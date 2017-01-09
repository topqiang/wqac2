<?php
namespace Home\Model;
use Think\Model;

/**
 * Class CommentModel
 * @package Home\Model
 * 评论模型
 */
class CommentModel extends Model {
    protected $tableName = 'comment';

    /**
     * @var array
     * 自动验证   使用create()方法时自动调用
     */
    protected $_validate = array(
        array('comm_content','require','评论内容不能为空！'), //空验证  默认情况下用正则进行验证
    );
    /**
     * @var array
     * 自动完成   新增时
     */
    protected $_auto = array (
        array('ctime','time',self::MODEL_INSERT,'function'), // 对ctime字段在插入的时候写入当前时间戳
    );

    /**
     * 添加评论
     */
    public function addComment($data){
        if(empty($data)){
            return false;
        }
        $result = $this->data($data)->add();
        return $result;
    }
    /**
     * 获取评论  多表查询 关联zq_member表
     */
    public function searchComment($where,$order,$page_size){
        if($page_size == ''){
            $result['list'] = $this->where($where)
                           //获取评论所有信息 和 用户的昵称和头像
                           ->field(C('DB_PREFIX').'comment.*,'.C('DB_PREFIX').'member.m_nickname,'.C('DB_PREFIX').'member.m_head')
                           //主表为 C('DB_PREFIX')comment 从表 C('DB_PREFIX')member  若从表有匹配则返回行 没有不返回
                           ->join(C('DB_PREFIX').'member ON '.C('DB_PREFIX').'comment.author_id='.C('DB_PREFIX').'member.m_id')
                           ->order($order)
                           ->select();
        }else{
            $count = $this->where($where)
                          //主表为C('DB_PREFIX')comment 从表C('DB_PREFIX')member  若从表有匹配则返回行 没有不返回
                          ->join(C('DB_PREFIX').'member ON '.C('DB_PREFIX').'comment.author_id='.C('DB_PREFIX').'member.m_id')
                          ->count();
            $page = new \Think\Page($count,$page_size);
            $page_info =$page->show();
            /*INNER JOIN: 如果表中有至少一个匹配，则返回行，等同于 JOIN
            LEFT JOIN: 即使右表中没有匹配，也从左表返回所有的行
            RIGHT JOIN: 即使左表中没有匹配，也从右表返回所有的行
            FULL JOIN: 只要其中一个表中存在匹配，就返回行*/
            $list = $this->where($where)
                         //获取评论所有信息 和 用户的昵称和头像
                         ->field(C('DB_PREFIX').'comment.*,'.C('DB_PREFIX').'member.m_nickname,'.C('DB_PREFIX').'member.m_head')
                         //主表为C('DB_PREFIX')comment 从表C('DB_PREFIX')member  若从表有匹配则返回行 没有不返回
                         ->join(C('DB_PREFIX').'member ON '.C('DB_PREFIX').'comment.author_id='.C('DB_PREFIX').'member.m_id')
                         ->order($order)
                         ->limit($page->firstRow,$page_size)
                         ->select();
            $result = array('page'=>$page_info,'list'=>$this->manageInfo($list));
        }
        return $result;
    }

    /**
     * 删除评论
     */
    public function deleteComment($where){
        if(empty($where)){
            return false;
        }
        $result = $this->where($where)->delete();
        return $result;
    }

    /**
     * 编辑评论
     */
    public function editComment($where,$data){
        if(empty($where) || empty($data)){
            return false;
        }
        $result = $this->where($where)->data($data)->save();
        return $result;
    }

    /**
     * 获得评论的回复 2014-5-22
     * */
    function getCommTree($parent_id,$child = false){
        $where['_string'] = C('DB_PREFIX')."comment.parent_id = ".$parent_id." and ".C('DB_PREFIX')."comment.status <> '9' and ".C('DB_PREFIX')."member.status <> 9";
        $list = $this->where($where)
            //获取评论所有信息 和 用户的昵称和头像
            ->field(C('DB_PREFIX').'comment.*,'.C('DB_PREFIX').'member.m_nickname,'.C('DB_PREFIX').'member.m_head')
            //主表为C('DB_PREFIX')comment 从表C('DB_PREFIX')member  若从表有匹配则返回行 没有不返回
            ->join(C('DB_PREFIX').'member ON '.C('DB_PREFIX').'comment.author_id='.C('DB_PREFIX').'member.m_id')
            ->order('ctime asc')
            ->select();
        if($child){
            foreach ($list as $key => $comm){
                $list[$key]['child'] = $this->getCommTree($comm['comm_id'],true);
            }
            $list = $this->manageInfo($list);
        }
        return $list;
    }

    /**
     * 数据相关处理
     * 当许多地方需要将取出的原数据惊醒改变格式 或添加某些相关数据
     */
    public function manageInfo($list){
        $member = D('Member');
        foreach($list as $key => $comm){
            //被回复人id
            $author_id = $this->where(array('comm_id'=>$comm['parent_id']))->getField('author_id');
            //被回复人昵称
            $list[$key]['rep_nickname'] = $member->where(array('m_id'=>$author_id))->getField('m_nickname');
            //回复时间
            $list[$key]['ctime'] = date('Y-m-d H:i',$comm['ctime']);
            $list[$key]['m_head'] = __ROOT__."/Uploads/HeadPic/".$comm['m_head'];
        }
        return $list;
    }
}