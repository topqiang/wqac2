<?php
/*******************第三方登录函数****************/
/**
 * @param $token
 * @param $url
 *
 * @return mixed
 */
function openid($token,$url){
	$data=$token;
	if(isset($data['openid'])){
		return $data['openid'];
	}elseif($data['access_token']){
		$data = oauthHttp($url, array('access_token' => $data['access_token']));
		$data = json_decode(trim(substr($data, 9), " );\n"), true);
		if(isset($data['openid'])){
			return $data['openid'];
		}else{
			E("获取用户openid出错：{$data['error_description']}");
		}
	}else{
		E('没有获取到openid！');
	}
}

/**发送HTTP请求方法，目前只支持CURL发送请求
 * @param        $url		请求URL
 * @param        $params	请求参数
 * @param string $method	请求方法GET/POST
 * @param array  $header
 * @param bool   $multi
 *
 * @return mixed
 * @throws Exception
 */
function oauthHttp($url, $params, $method = 'GET', $header = array(), $multi = false){
	$opts = array(
		CURLOPT_TIMEOUT        => 30,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_HTTPHEADER     => $header
	);

	/* 根据请求类型设置特定参数 */
	switch(strtoupper($method)){
	case 'GET':
		$opts[CURLOPT_URL] = $url . '?' . http_build_query($params);
		break;
	case 'POST':
		//判断是否传输文件
		$params = $multi ? $params : http_build_query($params);
		$opts[CURLOPT_URL] = $url;
		$opts[CURLOPT_POST] = 1;
		$opts[CURLOPT_POSTFIELDS] = $params;
		break;
	default:
		E('不支持的请求方式！');
	}

	/* 初始化并执行curl请求 */
	$ch = curl_init();
	curl_setopt_array($ch, $opts);
	$data  = curl_exec($ch);
	$error = curl_error($ch);
	curl_close($ch);
	if($error) E('请求发生错误：' . $error);
	return  $data;
}

/**存储绑定信息
 * @param $uid
 * @param $data
 *
 * @return array
 */
function saveBind($uid,$data){
	if(empty($uid) or empty($data))return array('flag'=>'error','message'=>'传入参数不完整');
	
	$obj=D('Bind');
	$check_res=$obj->where(array('uid'=>$uid,'type'=>$data['type']))->find();
	if($check_res){
		return array('flag'=>'success','message'=>'已经绑定过，无需在操作'	);
	}else{
		$bind_data=array(
			'm_id'				=>$uid,
			'openid'			=>$data['openid'],
			'access_token'		=>$data['access_token'],
			'expires_in'		=>$data['expires_in'],
			'refresh_token'		=>$data['refresh_token'],
			'type'				=>$data['type'],
			'nickname'			=>$data['nickname'],
			'profileImageUrl'	=>$data['m_pic'],
		);
		$res=$obj->add($bind_data);
		if($res){
			return array('flag'=>'success','message'=>'绑定成功');
		}else{
			return array('flag'=>'error','message'=>'绑定失败');
		}
	}
}
