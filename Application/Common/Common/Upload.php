<?php
    /**
     * �첽�ϴ�ͼƬ
     * 2014-6-09
     * @param string $file_name  �ϴ�������������ļ��� �����Զ����
     * @param string $folder    �ϴ���Uploads�е��ļ���
     * @param string $maxsize   �ϴ�����
     * @param string $type  �ļ�����  ������ʽ
     * @param string $thumb_width  ����ͼ�����
     * @param string $thumb_height ����ͼ���߶�
     * @param string $thumb_pre ����ͼǰ׺
     * @param bool $is_thumb  �Ƿ��������ͼ  Ĭ��Ϊfalse
     * @param bool $is_water  �Ƿ����ˮӡ  ˮӡͼΪPublic/common/images����Ϊwater.png��ͼƬ  Ĭ��Ϊfalse
     */
    function ajaxUploadFile($file_name = '',$folder = '',$maxsize = '',$type = '',$thumb_width = '',$thumb_height = '',$thumb_pre = '',$is_thumb = false,$is_water = false){
        if($folder == ''){
            echo "{ error: �ϴ�·������ȷ }";//������Ϣ
            return;
        }
        $save_path = "./Uploads/".$folder."/".date('Ym')."/";
        $upInfo = getUpLoadFiles($file_name,$save_path,$maxsize,$type,$thumb_width,$thumb_height,$thumb_pre,$is_thumb,$is_water);
        if(!is_array($upInfo)){
            //������Ϣ
            echo "{ error: '".$upInfo."' }";
            return;
        }else{
            if(!is_array($type)){
                //ԭͼ�����ַ
                $img = __ROOT__.$upInfo[0]['savepath'].$upInfo[0]['savename'];
                //ԭͼС·��
                $data_img = date('Ym')."/".$upInfo[0]['savename'];
                if($is_thumb){
                    //����ͼ�����ַ
                    $thumb_img = __ROOT__.$upInfo[0]['savepath'].'thumb_'.$upInfo[0]['savename'];
                    //����ͼС·��
                    $data_thumb_img = date('Ym')."/thumb_".$upInfo[0]['savename'];
                }else{
                    $thumb_img = '';
                    $data_thumb_img = '';
                }
                //ʱ������ͼƬ
                $flag = time();
                echo "{ img:'".$img."',thumb_img:'".$thumb_img."',data_img:'".$data_img."',data_thumb_img:'".$data_thumb_img."',flag:'".$flag."'}";
                return;
            }elseif(is_array($type)){
                //�����ַ
                $file = __ROOT__.$upInfo[0]['savepath'].$upInfo[0]['savename'];
                //С·��
                $data_file = date('Ym')."/".$upInfo[0]['savename'];
                //ʱ������ͼƬ
                $flag = time();
                echo "{ file: '".$file."',data_file:'".$data_file."',flag:'".$flag."'}";
                return;
            }
        }
    }

    /**
     * ��ͨ�ϴ�ͼƬ���ļ�
     * return  ���Ÿ�����С·��
     * ����  ͬ��
     */
    function uploadFile($file_name = '',$folder = '',$maxsize = '',$type = '',$thumb_width = '',$thumb_height = '',$thumb_pre = '',$is_thumb = false,$is_water = false){
        if($folder == ''){
            return array('error'=>'�ϴ�·������ȷ');
        }
        $save_path = "./Uploads/".$folder."/".date('Ym')."/";

        $upInfo = getUpLoadFiles($file_name,$save_path,$maxsize,$type,$thumb_width,$thumb_height,$thumb_pre,$is_thumb,$is_water);
        //�ϴ�����
        if(!is_array($upInfo)){
            return array('error'=>$upInfo);exit;
        }else{
            $str = '';
            foreach($upInfo as $value){
                $str .= date('Ym')."/".$value['savename'].',';
            }
        }
        return array('success'=>substr($str,0,strlen($str)-1));exit;
    }

function uploadFile1($file_name = '',$folder = '',$maxsize = '',$type = '',$thumb_width = '',$thumb_height = '',$thumb_pre = '',$is_thumb = false,$is_water = false){
    if($folder == ''){
        return array('error'=>'�ϴ�·������ȷ');
    }
    $save_path = "./Uploads/".$folder."/".date('Ym')."/";

    $upInfo = getUpLoadFiles($file_name,$save_path,$maxsize,$type,$thumb_width,$thumb_height,$thumb_pre,$is_thumb,$is_water);
    //�ϴ�����
    if(!is_array($upInfo)){
        return array('error'=>$upInfo);exit;
    }else{
        return array('success'=>$upInfo);exit;
    }
}

    /**
     * ����ͼƬ
     */
    function cutImg(){
        //��ʼ����ȡͼƬ������
        $img_resize = new \Think\ImageResize();
        //�����ϴ���ͼƬ
        $url = './Uploads/HeadCache/'.trim(I('post.img_str'));
        $img_resize->load($url);
        //�޸�ͼƬ��С   ����...
        /*if (intval($_POST['w']) > 0 && intval($_POST['h']) > 0){
            $img_resize->resize(intval($_POST['w']), intval($_POST['w']));
        }*/
        //��ȡ��ͼƬ�Ŀ��
        $width = intval(I('post.id_right'))-intval(I('post.left'));
        $height = intval(I('post.id_bottom'))-intval(I('post.top'));
        //�ü�ͼƬ  ��  ��  ����� �����
        $img_resize->cut($width, $height, intval(I('post.left')), intval(I('post.top')));

        //��ȡ��ı���·��
        $save_path = "./Uploads/HeadPic/";
        //�жϱ���·���Ƿ����  �����ھʹ���
        if(!is_dir($save_path.date('Ym'))){
            if(!mkdir($save_path.date('Ym'))){
                return false;
            }
        }
        //��ȡ�󱣴�ͼƬ
        $cut_res = $img_resize->save($save_path . I('post.img_str'));
        if($cut_res){
            return true;
        }else{
            return false;
        }
    }

    /**
     * ����$name-�����ļ��ϴ��������
     *       $url-ԭͼ�����ַ
     *       $maxsize-�ļ���� ��С
     *       $type-�ϴ��ļ�����
     *       $width-����ͼ��
     *       $height-����ͼ��
     *       $thumb_pre-����ͼǰ׹��
     *       $is_thumb �Ƿ��������ͼ
     *       $is_water �Ƿ����ˮӡ
     * �ɹ����� �ϴ������Ϣ
     * ʧ�ܷ����쳣���
     * */
    function getUpLoadFiles($name,$url,$maxsize,$type,$width,$height,$thumb_pre,$is_thumb = false,$is_water = false){
        $upload = new \Think\UploadFile();
        $upload->saveRule       = !empty($name) ? $name : 'uniqid'; //�����ļ�������� ����ǹ���Ĺؼ��� Ĭ����Ϊ�ϴ����ļ����
        $upload->savePath       = isset($url) ? $url : './Uploads'.date("Ym").'/';
        $upload->maxSize        = !empty($maxsize) ? $maxsize : 20480000;
        $upload->allowExts      = is_array($type) ? $type : array('jpg','png','jpeg','bmp','gif');
        $upload->water          = $is_water;//�Ƿ����ˮӡ
        if($is_thumb){
            //�������ͼ
            $upload->thumb          = true;
            $upload->thumbPath      = isset($url) ? $url : './Uploads'.date("Ym").'/';
            $upload->thumbPrefix    = !empty($thumb_pre) ? $thumb_pre : C('THUMB_PREFIX');
            $upload->thumbMaxWidth  = $width;
            $upload->thumbMaxHeight = $height;
            $upload->uploadReplace  = true;
        }
        if($upload->Upload()){
            $info = $upload->getUploadFileInfo();
            return $info;
        }else{
            return $upload->getErrorMsg();
        }
    }