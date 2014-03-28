<?php

require_once './controller/BaseController.php';
require_once './model/PictureModel.php';

/**
 * Description of PictureController
 *
 */
class PictureController extends BaseController
{

    /**
     * 
     */
    public function addAction()
    {
        $extensions = array('jpeg', 'jpg', 'png');
        $max_size = 2097152;
        $upload_path = 'uploads';

        foreach ($_FILES['files']['tmp_name'] as $key => $file) {

            $file_size = $_FILES['files']['size'][$key];
            $file_name = $_FILES["files"]["name"][$key];
            $file_tmp = $_FILES["files"]["tmp_name"][$key];
            $file_ext = end(explode('.', $file_name));

            $new_file_name = uniqid() . '.' . $file_ext;

            if ($file_size > $max_size) {
                throw new Exception('La taille du fichier ne doit pas exceder ' . $max_size . ' bits');
            }

            if (!in_array($file_ext, $extensions)) {
                throw new Exception('Le fichier doit être une image ' . implode(', ', $extensions));
            }

            if (!is_dir($upload_path)) {
                mkdir($upload_path, 0700);
            }

            $picture_model = new PictureModel('picture', 'id_picture');

            $picture = array(
                'id_trip_step' => $this->inputPost('id_trip_step'),
                'filename' => $new_file_name
            );

            $picture_model->insert($picture);
            move_uploaded_file($file_tmp, $upload_path . '/' . $new_file_name);
        }

        $this->redirect('/admin/etapes/' . $this->inputPost('id_trip_step'));
    }

    /**
     * 
     */
    public function deleteAction($id)
    {
        $upload_path = 'uploads';
        
        $picture_model = new PictureModel('picture', 'id_picture');
        $picture = $picture_model->findById($id);
        $picture_model->deleteById($id);
        unlink($upload_path . '/' . $picture['filename']);

        $this->redirect('/admin/etapes/' . $picture['id_trip_step']);
    }

}
