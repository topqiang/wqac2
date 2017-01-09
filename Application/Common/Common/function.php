<?php
/*************************** 公共函数 **********************/
/**
function:二维数组按指定的键值排序
author:www.phpernote.com
 */
function array_sort($array,$keys,$type){
    if(!isset($array) || !is_array($array) || empty($array)){
        return '';
    }
    if(!isset($keys) || trim($keys)==''){
        return '';
    }
    if(!isset($type) || $type=='' || !in_array(strtolower($type),array('asc','desc'))){
        return '';
    }
    $keysvalue=array();
    foreach($array as $key=>$val){
        $val[$keys] = str_replace('-','',$val[$keys]);
        $val[$keys] = str_replace(' ','',$val[$keys]);
        $val[$keys] = str_replace(':','',$val[$keys]);
        $keysvalue[] =$val[$keys];
    }
    asort($keysvalue); //key值排序
    reset($keysvalue); //指针重新指向数组第一个
    foreach($keysvalue as $key=>$vals) {
        $keysort[] = $key;
    }
    $keysvalue = array();
    $count=count($keysort);
    if(strtolower($type) != 'asc'){
        for($i=$count-1; $i>=0; $i--) {
            $keysvalue[] = $array[$keysort[$i]];
        }
    }else{
        for($i=0; $i<$count; $i++){
            $keysvalue[] = $array[$keysort[$i]];
        }
    }
    return $keysvalue;
}

/**
 * 获取标识
 * @param $flag  'char'标记 获取字符串   'num' 标记获取数字
 * @param  $num  验证标识的个数
 * @return string
 */
function getVc($flag,$num){
    /**获取验证标识**/
    $arr = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',1,2,3,4,5,6,7,8,9,0);
    $vc = '';
    //字符串
    if($flag == 'char'){
        for($i = 0; $i < $num; $i++){
            $index = rand(0,61);
            $vc .= $arr[$index];
        }
        $vc .= time();
    }elseif($flag == 'num'){  //数字
        for($i = 0; $i < $num; $i++){
            $index = rand(52,62);
            $vc .= $arr[$index];
        }
    }
    return $vc;
}
/**
 * 获得天数 return day_num
 */
function getDayNum($year,$month){
	if(in_array($month,array('01','03','05','07','08','10','12'))){
		$day_num = 31;
	}elseif(in_array($month,array('04','06','09','11'))){
		$day_num = 30;
	}else{
		if ($year%4==0 && ($year%100!=0 || $year%400==0)) {
			$day_num = 29;
		}else{
			$day_num = 28;
		}
	}
	return $day_num;
}
/**
 * 格式化字节大小
 * @param  number $size      字节数
 * @param  string $delimiter 数字和单位分隔符
 * @return string            格式化后的带单位的大小
 */
function format_bytes($size, $delimiter = '') {
    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
    for ($i = 0; $size >= 1024 && $i < 5; $i++) $size /= 1024;
    return round($size, 2) . $delimiter . $units[$i];
}
/**
 * @param $str
 * @return array|null
 * 从字符串中提取数字转换成数组
 */
function findNumToArr($str){
    $str = trim($str);
    if(empty($str)){
        return null;
    }else{
        $result = '';
        for($i=0; $i<strlen($str); $i++){
            if(is_numeric($str[$i])){
                $result .= $str[$i];
            }else{
                $result .= ',';
            }
        }
        $arr = explode(',',$result);
        foreach($arr as $k=>$v){
            if( !$v ){
                unset($arr[$k]);
            }
        }
        return $arr;
    }
}
/**
 * 数组转换成字符串  2013-8-27 16:08:25
 * @param array $arr 要转换的数组
 * @return string $str 字符串   逗号分隔
 */
function arrayToString($arr=array()){
	//判断是否为字符串
	if(!is_array($arr)) return '';
	//记录循环次数
	$number = 0;
	//传入数组长度
	$length = count($arr);
	//返回的字符串
	$str='';
	//遍历数组
	foreach ($arr as $val){
		if($number==($length-1)){
			$str .= $val;
		}else{
			$str .= $val.',';
		}
		$number++;
	}
	return $str;
}

/**剥离转义
 * @param $string
 *
 * @return array|string
 */
function sstripslashes($string){
	if(is_array($string)){
		foreach($string as $key => $val){
			$string[$key] = sstripslashes($val);
		}
	}else{
		$string = stripslashes($string);
	}
	return $string;
}
/**
 * 过滤掉html标签 2013-8-3 15:06:38
 * */
function filterHtml($str){
	if(is_array($str)){
		foreach($str as $key => $val){
			$str[$key] = sstripslashes(preg_replace("/(\<[^\<]*\>|\r|\n|\s|\&nbsp;|\[.+?\])/is", '', $val));
		}
	}else{
		$str = preg_replace("/(\<[^\<]*\>|\r|\n|\s|\&nbsp;|\[.+?\])/is", '', $str);
	}
	return $str;
}

/**获得图片缩略图文件名
 * @param $filename
 *
 * @return string
 */
function getThumb($filename){
	$dir=substr($filename,0,6);
	$name=substr($filename,7,17);
	return $dir.'/thumb_'.$name;
}

/**
 * 删除文件
 * @param $filename
 * @param $dirname
 *
 * @return bool
 */
function delPicFile($filename,$dirname){
	if(!empty($filename)){
		unlink('./Uploads/'.$dirname.'/'.$filename);
		$dir  = substr($filename,0,6);
		$file = substr($filename,7,17);
		unlink('./Uploads/'.$dirname.'/'.$dir.'/'.C('THUMB_PREFIX').$file);
	}
	return true;
}

/**合并数组,重组数组键值，删除空元素,会丢失数组的字符键值，只保存重组后的数字键值
 * @param $arr1
 * @param $arr2
 *
 * @return array
 */
function arrMerge($arr1,$arr2){
	if(empty($arr1))return $arr2;
	if(empty($arr2))return $arr1;
	if(!is_array($arr1))$arr1[]=$arr1;
	if(!is_array($arr2))$arr2[]=$arr2;
	foreach($arr1 as $k=>$v){
		if(!empty($v))$arr[]=$v;
	}
	foreach($arr2 as $k=>$v){
		if(!empty($v))$arr[]=$v;
	}
	return $arr;
}


/**
 * @param $filename
 * @param $dirname
 *
 * @return string
 */
function getPicUrl($filename,$dirname){
	return C('API_URL').'/Uploads/'.$dirname.'/'.$filename;
}

/**验证提交数据
 * @param $arr=array(验证格式数组
 * 				'fields_name'=>'text,null,length,type',如果不限制为空并且数据是空值的话，不会进行长度和类型的判断
 * 			);
 * @param $check_data验证数据数组
 *
 * @return array|bool
 */
function checkData($arr,$check_data){
	if(empty($check_data))return array('flag'=>'error','message'=>'empty:check_data');
	if(empty($arr))return array('flag'=>'error','message'=>'empty:arr');
	/*$data_type=array(
		'email'	=>'/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/',
		'mobile'=>'/^((0?1[358]\d{9})|((0(10|2[1-3]|[3-9]\d{2}))?[1-9]\d{6,7}))$/',
		'phone'	=>'/^\d{3,4}-\d{7,8}(-\d{3,4})?$/',
		'date'	=>'/^\d{4}\-\d{2}\-\d{2}$/',
		'time'	=>'/^(0\d{1}|1\d{1}|2[0-3]):([0-5]\d{1})$/',
		'num'	=>'/^[0-9]*$/',//任意位数数字
	);*/
	$data_type=array(
		'email'	=>C('EMAIL'),
		'mobile'=>C('MOBILE'),
		'phone'	=>C('PHONE'),
		'date'	=>C('DATE'),
		'time'	=>C('TIME'),
		'num'	=>'/^[0-9]*$/',//任意位数数字
	);
	foreach($arr as $k=>$v){
		$old_arr[$k]=explode(',',$v);
	}
	//重组数组键值
	foreach($old_arr as $k=>$v){
		//提示文字
		if(empty($v[0])){
			$data[$k]['text']	=$k;
		}else{
			$data[$k]['text']	=$v[0];
		}
		//是否允许为空
		if(!empty($v[1])){
			$data[$k]['null']	=$v[1];
		}
		//处理长度
		if(empty($v[2])){
			$data[$k]['length']	=$v[2];
		}else{
			if(strpos($v[2],'-')){
				$data[$k]['length']	=explode('-',$v[2]);
			}else{
				$data[$k]['length'][0]=0;
				$data[$k]['length'][1]=$v[2];
			}
		}
		//检测数据类型
		if(!empty($v[3])){
			$data[$k]['type']	=$v[3];
		}
	}

	foreach($data as $k=>$v){
		//判空
		if(!empty($v['null'])){
			if(empty($check_data[$k]))return array('flag'=>'error','message'=>$v['text'].'为空');
		}
		//判断字段长度
		if(!empty($v['length']) and !empty($check_data[$k])){
			if(strlen($check_data[$k])>$v['length'][1])return array('flag'=>'error','message'=>$v['text'].'不得超过'.$v['length'][1].'位');
			if(strlen($check_data[$k])<$v['length'][0])return array('flag'=>'error','message'=>$v['text'].'最少'.$v['length'][0].'位');
		}
		//判断字段类型
		if(!empty($v['type']) and !empty($check_data[$k])){
			if(!preg_match($data_type[$v['type']],$check_data[$k]))return array('flag'=>'error','message'=>$v['text'].'格式错误');
		}
	}
	
	return array('flag'=>'success','message'=>'success');
}

/**函数返回信息格式函数
 * @param        $message
 * @param string $flag
 *
 * @return array
 */
function errorInfo($message,$flag='error'){
	$arr = array('flag'=>$flag,'message'=>$message);
	return $arr;
}

/**API返回信息格式函数
 * @param        $message
 * @param string $flag
 */
function errorApi($message,$flag='error'){
	$arr = array('flag'=>$flag,'message'=>$message);
	print json_encode($arr);exit;
}

/**调用第三方登录
 * @param $type
 *
 * @return \ThinkOauth\ThinkOauth
 */
function ThinkOauth($type){
    $type=strtolower($type);
    //载入相应类文件
    include_once APP_PATH.'Common/Common/oauth/'.ucfirst($type).'Oauth.php';
    $class_name="\\ThinkOauth\\".ucfirst($type)."Oauth";
    if(!class_exists($class_name))E('没有找到相应的类');
    $obj=new $class_name();
    return $obj;
}

/**
 * 转化年月日部分为时间戳
 */
function timestamp_time($time){
	return strtotime(date('Y-m-d',$time));	 
}

/**
 * 格式化时间
 */
function time_format($time){
	//当前时间
	$now = time();
	//今天零时零分零秒
	$today = strtotime(date('Y-m-d',$now));
	//传递时间与当前时间相差的秒数
	$diff = $now - $time;
	$str = '';
	switch ($time) {
		case $diff < 60:
			$str = '刚刚';
			break;
		case $diff < 3600:
			$str = floor($diff / 60) .'分钟前';
			break;
		case $diff < (3600 * 8):
			$str = floor($diff / 3600) .'小时前';
			break;
		case $time > $today:
			$str = '今天' . date('H:i',$time);
			break;
		default:
			$str = date('Y-m-d H:i:s',$time);
			break;
	}
	return $str;
}

/**
 * 格式化时间按年月日时分秒
 */
function time_format_q($time){
	return date('Y-m-d H:i:s',$time);
}

/**
 * 格式化时间按年月日
 */
function time_format_t($time){
	$str = '';
	$str = date('Y-m-d',$time);
	return $str;
}

/**
 * 按年月返回时间
 */
function tiem_ym($time){
	return date('Ym',$time);
}

/**
 * 按年月日返回时间
 */
function tiem_ymd($time){
	return date('Ymd',$time);
}

/**
 * 异位或加密字符串
 * @param  [String]  $value [需要加密的字符串]
 * @param  [integer] $type  [加密解密（0：加密，1：解密）]
 * @return [String]         [加密或解密后的字符串]
 */
function encryption($value,$type=0){
	$key = md5(C('ENCRYPTION_KEY'));
	if(!$type){
		return str_replace('=','', base64_encode($value ^ $key));
	}
	$value = base64_encode($value);
	return $value ^ $key;
}

/**
 * 数组去重
 */
function unique_arr($array2D,$stkeep=false,$ndformat=true)
{
    // 判断是否保留一级数组键 (一级数组键可以为非数字)
    if($stkeep) $stArr = array_keys($array2D);
    // 判断是否保留二级数组键 (所有二级数组键必须相同)
    if($ndformat) $ndArr = array_keys(end($array2D));
    //降维,也可以用implode,将一维数组转换为用逗号连接的字符串
    foreach ($array2D as $v){
        $v = join(",",$v); 
        $temp[] = $v;
    }
    //去掉重复的字符串,也就是重复的一维数组
    $temp = array_unique($temp); 
    //再将拆开的数组重新组装
    foreach ($temp as $k => $v)
    {
        if($stkeep) $k = $stArr[$k];
        if($ndformat)
        {
            $tempArr = explode(",",$v); 
            foreach($tempArr as $ndkey => $ndval) $output[$k][$ndArr[$ndkey]] = $ndval;
        }
        else $output[$k] = explode(",",$v); 
    }
    return $output;
}

/**
 * 页面文本框换行
 */
function br2nl($text){
    return str_replace('<br>', "\n", $text);
}

/**
 * 判断是否为移动端
 */
function isMobile() {
	// 如果有HTTP_X_WAP_PROFILE则一定是移动设备
	if (isset ($_SERVER['HTTP_X_WAP_PROFILE'])) {
		return true;
	}
	//如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
	if (isset ($_SERVER['HTTP_VIA'])) {
		//找不到为flase,否则为true
		return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
	}
	//脑残法，判断手机发送的客户端标志,兼容性有待提高
	if (isset ($_SERVER['HTTP_USER_AGENT'])) {
		$clientkeywords = array (
			'nokia',
			'sony',
			'ericsson',
			'mot',
			'samsung',
			'htc',
			'sgh',
			'lg',
			'sharp',
			'sie-',
			'philips',
			'panasonic',
			'alcatel',
			'lenovo',
			'iphone',
			'ipod',
			'blackberry',
			'meizu',
			'android',
			'netfront',
			'symbian',
			'ucweb',
			'windowsce',
			'palm',
			'operamini',
			'operamobi',
			'openwave',
			'nexusone',
			'cldc',
			'midp',
			'wap',
			'mobile'
		);
  		// 从HTTP_USER_AGENT中查找手机浏览器的关键字
		if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
			return true;
		}
 	}
 	//协议法，因为有可能不准确，放到最后判断
	if (isset ($_SERVER['HTTP_ACCEPT'])) {
		// 如果只支持wml并且不支持html那一定是移动设备
		// 如果支持wml和html但是wml在html之前则是移动设备
		if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
			return true;
		}
	}
 	return false;
}