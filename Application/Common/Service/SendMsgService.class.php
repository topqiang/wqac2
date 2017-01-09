<?php
namespace Common\Service;
use Think\Model;

/**
 * Class SendMsgService
 * @package Common\Service
 * 2014-6-4  发送短信
 */
class SendMsgService extends Model {
    /**
     *发送至手机
     */
    public function sendMsg($tel,$body){
        if(!preg_match(C('MOBILE'),$tel)){
           return array('error'=>'手机号格式不正确');
        }
        $config = D('Config')->findConfig();
        //短信接口相关参数
        $sms_cpid       = $config['CPID'];
        $sms_password   = md5($config['PASSWORD'] . "_" . time() . "_topsky");
        $sms_phone      = $tel; //手机号
        $sms_channel_id = $config['CHANNEL'];
        $sms_template   = $body; //发信内容
        $sms_template   = urlencode(iconv("UTF-8","gb2312//ignore",$sms_template)); //处理信息的编码
        $sms_url        = "http://admin.sms9.net/houtai/sms.php?"; //发送的网址
        $sms_url       .= "cpid=$sms_cpid&password=$sms_password&msg=$sms_template&tele=$sms_phone&channelid=$sms_channel_id&timestamp=".time();

        $sms_content    = file_get_contents($sms_url); //发送短信  获取返回信息
        $sms_response   = explode(":",$sms_content);  //处理返回信息

        if($sms_response[0] == "error"){
            return array('error' => $sms_content);
        }else{
            return array('success' => '信息已送达');
        }
    }
}