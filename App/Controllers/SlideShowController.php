<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class SlideShowController extends Action
{
    public static function read()
    {
        $slideShow = Container::getModel('SlideShow');

        return $slideShow->read();
    }

    public function update()
    {
        $slideShow = Container::getModel('SlideShow');

        $slideShow->__set('id', substr($_POST['id'], 0, 1));
        $slideShow->__set('title', $_POST['title']);
        $slideShow->__set('text', $_POST['text']);
        $slideShow->__set('img_location', "App/Views/template/files/imgs/img".substr($_POST['id'], 0, 1).substr($_FILES['img']['name'], -4));

        $this->upload_img();

        $slideShow->update();
    }

    public function upload_img()
    {
        $uploadDir = 'App/Views/template/files/imgs/';
        $uploadFile = $uploadDir ."img".substr($_POST['id'], 0, 1).substr($_FILES['img']['name'], -4);

        move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile);
    }
}

?>