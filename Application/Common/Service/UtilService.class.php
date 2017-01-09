<?php
namespace Common\Service;
use Think\Model;

/**
 * Class UtilService
 * @package Common\Service
 * 一些系统工具类方法
 */
class UtilService extends Model {

    protected $last_cate = array();

    /**
     * @param $data
     * 递归判断该分类是否还有子分类 如果没有将ID存入$last_cate数组
     */
    protected  function getLastCate($data){
        if(empty($data)){
            return;
        }
        foreach($data as $cate){
            //判断子级是否存在
            if(!empty($cate['child'])){
                //存在继续判断
                $this->getLastCate($cate['child']);
            }else{
                //不逊在存入数组
                $this->last_cate[] = $cate['cate_id'];
            }
        }
    }
    /**
     * 返回最底层分类ID
     */
    public function returnLastCate($data){
        $this->getLastCate($data);
        //返回 字符 数组 两种形式
        return array('arr'=>$this->last_cate,'str'=>implode(',',$this->last_cate));
    }

    /**
     * 根据某分类ID 向上检索父级分类线
     */
    public function doUpSearch($cate_id,$cate_obj){
        //缓存分类ID 因为循环时值会改变
        $temp_cate_id = $cate_id;
        //开始循环
        do{
            $cate = $cate_obj->where(array('cate_id'=>$cate_id,'status'=>0))->find();
            //若该分类的父级分类ID为0 跳出循环
            if($cate['parent_id'] == 0){
                break;
            }else{
                //不为0  将该父级分类ID 存入数组  继续循环
                $cate_id_temp_arr[] = $cate['parent_id'];
                //为循环值赋值
                $cate_id = $cate['parent_id'];
            }
        }while(1);
        //倒序排序
        krsort($cate_id_temp_arr);
        //将缓存分类ID 赋值到该数组
        $cate_id_temp_arr[] = $temp_cate_id;
        foreach($cate_id_temp_arr as $cate_id){
            //循环数组 获取分类名称
            $cate = $cate_obj->where(array('cate_id'=>$cate_id,'status'=>0))->find();
            $result[] = array('cate_id'=>$cate['cate_id'],'cate_name'=>$cate['cate_name']);
        }
        //返回值
        return $result;
    }

    /**
     * 导出EXCEL表格
     * @param $fields_data  $fields_data数据格式 表头||字段
     * @param $list  要导出的数据
     * @param $name  表格名称
     */
    public function  exportExcel($fields_data,$list,$name){
        $heads = array(); //头部字段汉字
        $fields = array();//导出内容字段英文
        foreach($fields_data as $value){
            $arr = explode('||',$value);
            $heads[] = $arr[0];
            $fields[] = $arr[1];
        }
        //存储导出表格的数据
        $data = array();
        //标题赋值
        foreach($heads as $head){
            $data[1][] = $head;
        }
        //数据赋值
        foreach($list as $value){
            //数据内容  循环字段
            $tmp = array();
            foreach($fields as $field){
                $tmp[] = $value[$field];
            }
            $data[] = $tmp;
        }
        //导出
        $xls = new \Think\Excel_XML('UTF-8', false, $name);
        $xls->addArray($data);
        $xls->generateXML($name);
    }

    /**
     * @param $data  数据
     * @param $url  路径
     * @return mixed|string
     */
    public function curl($data,$url){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tmpInfo = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return $tmpInfo;
    }

    /**
     * 下载文件
     */
    public function download($file_url,$file_name){
        $file = fopen($file_url, "r"); // 打开文件
        // 输入文件标签
        Header("Content-type: application/octet-stream");
        Header("Accept-Ranges: bytes");
        Header("Accept-Length: " . filesize($file_url));
        Header("Content-Disposition: attachment; filename=".$file_name);
        // 输出文件内容
        echo fread($file, filesize($file_url));
        fclose($file);
        exit();
    }
}