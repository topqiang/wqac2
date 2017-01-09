<?php
/**
 * API返回信息格式函数
 * @param string $flag
 * @param string $message
 * @param string $data
 */
function apiResponse($flag = 'error', $message = '',$data = array()){
    $result = array('flag'=>$flag,'message'=>$message,'data'=>$data);
    print json_encode($result);exit;
}