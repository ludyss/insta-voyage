<?php

require_once './model/VideoModel.php';

/**
 * Videocontroller
 */

class VideoController extends VideoModel {
    
    public function getVideoListAction(){
        
        $action = 'getvideo';//$_POST['action'];
        switch ($action) {
            case 'getvideo' :
                $list = $this->listAllVideo();
                $clean_list=array();
                for ($index = 0; $index < count($list); $index++) {
                    if ($list[$index] == '.' || $list[$index] == '..') {
                        unset($list[$index]);
                    }else{
                        array_push($clean_list, $list[$index]);
                    }
                }
                echo json_encode($clean_list);
                break;
            default :
                echo '{"Da fuck !": "(è_é) !"}';
                break;
        }
    }

}

?>
