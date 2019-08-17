<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class AuthController extends Action
{
    public function auth()
    {
        $user = Container::getModel('User');

        $user->__set('email', $_POST['email']);
        $user->__set('password', $_POST['password']);

        $user->auth();

        if($user->__get('id'))
        {
            header("Location: /");
        }
        else
        {
            header("Location: /login?login=erro");
        }
    }
}

?>