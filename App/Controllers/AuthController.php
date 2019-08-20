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
            $logged_user = [
                'id' => $user->__get('id'),
                'name' => $user->__get('name'),
                'email' => $user->__get('email')
            ];

            $_SESSION['user'] = $logged_user;
            
            header("Location: /");
        }
        else
        {
            header("Location: /login?login=erro");
        }
    }
}

?>