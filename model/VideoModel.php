<?php

/**
 * VideoMode
 * list content of video directory
 * @author Alex Maxime Cadevall <a-m.cadevall@insta.fr>
 */
class VideoModel {

    public function listAllVideo() {
        $dir = './assets/video';
        $files = scandir($dir);
        return $files;
    }

}

?>
