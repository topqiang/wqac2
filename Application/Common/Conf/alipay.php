<?php
return array(
	//支付宝配置参数
	'alipay'=>array(
		'partner' =>'2088002051381781',   //这里是你在成功申请支付宝接口后获取到的PID；
		'key'=>'1pfq0bsz6n7ig4qvilq1uj7zksufn74r',//这里是你在成功申请支付宝接口后获取到的Key
		'sign_type'=>strtoupper('MD5'),
		'input_charset'=> strtolower('utf-8'),
		'cacert'=> getcwd().'\\cacert.pem',
		'transport'=> 'http',

		//这里是卖家的支付宝账号，也就是你申请接口时注册的支付宝账号
		'seller_email'=>'zjml2005@163.com',
		//这里是异步通知页面url，提交到项目的Pay控制器的notifyurl方法；
		'notify_url'=>'http://mote.genduanzi.com/index.php/Alipay/notifyurl',
		//'notify_url'=>'',
		//这里是页面跳转通知url，提交到项目的Pay控制器的returnurl方法；
		//'return_url'=>'http://www.xxx.com/Pay/returnurl',
		'return_url'=>'http://mote.genduanzi.com/index.php/Alipay/returnurl',
		//支付成功跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参payed（已支付列表）
		'successpage'=>'Business/billList',
		//支付失败跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参unpay（未支付列表）
		'errorpage'=>'Alipay/payError',
	),
);
