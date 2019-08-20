<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class PostController extends Action
{
    public function create()
    {
        $post = Container::getModel('Post');
        
        $post->__set('title', $_POST['title']);
        $post->__set('content', $_POST['content']);
        $post->__set('id_user', $_SESSION['user']['id']);

        $post->create();

        header('Location: /blog');
    }

<<<<<<< HEAD
    public static function read()
=======
    public function read()
>>>>>>> 9f33f8a7fcc17a516ecbcf55b09885b0815bb67e
    {
        $posts = Container::getModel('Post');

        return $posts->read();
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}

?>