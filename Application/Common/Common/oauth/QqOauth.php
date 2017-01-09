<?php
namespace ThinkOauth;
/**
 * Class QqOauth
 * @package ThinkOauth
 */
class QqOauth{
	//接口通用配置参数
	public $app_key,$app_secret,$callback;
	
	public $basic_url='https://graph.qq.com/';
	public $token_dir='oauth2.0/token';
	public $authorize_dir='oauth2.0/authorize';
	public $response_type='code';

	/**
	 * 
	 */
	public function __construct(){
		$config=C('THINK_QQ_OAUTH');
		$this->app_key		=$config['APP_KEY'];
		$this->app_secret	=$config['APP_SECRET'];
		$this->callback		=$config['CALLBACK'];
		//载入第三方登录函数文件
		include_once APP_PATH.'Common/Common/oauth/OauthFunction.php';
	}

	public function login(){
		//Oauth 标准参数
		$params = array(
			'client_id'     => $this->app_key,
			'redirect_uri'  => $this->callback,
			'response_type' => $this->response_type,
		);

		//获取额外参数
		parse_str('scope=get_user_info,add_share', $_param);
		if(is_array($_param)){
			$params = array_merge($params, $_param);
		} else {
			E('AUTHORIZE配置不正确！');
		}
		$url=$this->basic_url.$this->authorize_dir.'?'.http_build_query($params);
		redirect($url);
	}

	/**
	 * @param $code
	 *
	 * @return array
	 */
	public function callback($code){
		if(empty($code))return array('flag'=>'error','success'=>'参数错误');
		//第一次请求获得token等数据$result
		$params = array(
			'client_id'     =>$this->app_key,
			'client_secret' =>$this->app_secret,
			'grant_type'    =>'authorization_code',
			'code'          =>$code,
			'redirect_uri'  =>$this->callback,
		);
		$result = oauthHttp($this->basic_url.$this->token_dir, $params, 'POST');

		parse_str($result, $data);
		if($data['access_token'] && $data['expires_in']){
			//第二次请求获得openid  $data['openid']
			$data['openid'] = openid($data,$this->basic_url.'oauth2.0/me');
		}else{
			E("获取腾讯QQ ACCESS_TOKEN 出错：{$result}");
		}
		$obj=D('Bind');
		$bind_info=$obj->where(array('openid'=>$data['openid']))->find();
		if(empty($bind_info)){
			//第三次请求,获得用户信息$user_info
			$params = array(
				'oauth_consumer_key' =>$this->app_key,
				'access_token'       =>$data['access_token'],
				'openid'             =>$data['openid'],
				'format'             =>'json'
			);
			$user_res=oauthHttp($this->basic_url.'user/get_user_info',$params,'GET');
			$user_info=json_decode($user_res,true);
			$data['nickname']=$user_info['nickname'];
			$data['m_pic']=$user_info['figureurl_qq_2'];
			$data['type']='qq';
			return array(
				'flag'=>'first',
				'data'=>$data,
			);
		}else{
			return array(
				'flag'=>'notfirst',
				'uid'=>$bind_info['uid'],
			);
		}
	}
}
