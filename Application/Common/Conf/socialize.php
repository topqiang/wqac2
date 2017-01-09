<?php
/**
 * 社会化登陆配置
 */
return array(
    //腾讯QQ登录配置
    'THINK_SDK_QQ' => array(
        'APP_KEY'    => '101035377', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '661226089bea9a262eb8dae6a0bdaf35', //应用注册成功后分配的KEY
        'CALLBACK'   => 'http://www.songshuhome.com/index.php?m=Home&c=Qq&a=callback',
    ),
	//腾讯微博配置
	'THINK_SDK_TENCENT' => array(
        'APP_KEY'    => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK'   => URL_CALLBACK . 'tencent',
    ),
	//新浪微博配置
	'THINK_SDK_SINA' => array(
        'APP_KEY'    => '1374955125', //应用注册成功后分配的 APP ID
        'APP_SECRET' => 'cf4140d83e7c086e333352f29149cf30', //应用注册成功后分配的KEY
        'CALLBACK'   => 'http://www.songshuhome.com/index.php?m=Home&c=Sina&a=callback',
    ),
);
