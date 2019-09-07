<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class RoutesController extends Action
{
	private $siteName = "Souza e Souza";

    public function inicio()
    {
        $posts = PostController::read();

        $slideShow = SlideShowController::read();

        $this->view->dados = [
            'title' => 'Início | '.$this->siteName,
            'posts' => $posts,
            'slideShow' => $slideShow
        ];

        $this->render('inicio', true);
    }

    public function sobre()
    {
        $this->view->dados = [
            'title' => 'Sobre | '.$this->siteName
        ];

        $this->render('sobre', true);
    }

    public function assessoria()
    {
        $this->view->dados = [
            'title' => 'Assessoria | '.$this->siteName
        ];

        $this->render('assessoria', true);
    }

    public function consultoria()
    {
        $this->view->dados = [
            'title' => 'Consultoria | '.$this->siteName
        ];

        $this->render('consultoria', true);
    }

    public function contabil()
    {
        $this->view->dados = [
            'title' => 'Contábil | '.$this->siteName
        ];

        $this->render('contabil', true);
    }

    public function fiscal()
    {
        $this->view->dados = [
            'title' => 'Fiscal | '.$this->siteName
        ];

        $this->render('fiscal', true);
    }

    public function departamento_pessoal()
    {
        $this->view->dados = [
            'title' => 'Departamento pessoal | '.$this->siteName
        ];

        $this->render('departamento-pessoal', true);
    }

    public function outsourcing()
    {
        $this->view->dados = [
            'title' => 'Outsourcing | '.$this->siteName
        ];

        $this->render('outsourcing', true);
    }

    public function contato()
    {
        $this->view->dados = [
            'title' => 'Contato | '.$this->siteName
        ];

        $this->render('contato', true);
    }

    public function blog()
    {
        $posts = PostController::read();

        $this->view->dados = [
            'title' => 'Blog | '.$this->siteName,
            'posts' => $posts
        ];

        $this->render('blog', true);
    }

    public function login()
    {
        if(isset($_SESSION['user']))
            header('Location: /');

        $this->view->dados = [
            'title' => 'Login | '.$this->siteName
        ];

        $this->view->login = isset($_GET['login']) ? $_GET['login'] : '';

        $this->render('login', false);
    }

    public function logout()
    {
        session_destroy();

        header('Location: /');
    }

    public function error($error)
    {
        $this->view->dados = [
            'title' => '404 | '.$this->siteName,
            'error' => $error
        ];

        $this->render('error', true);
    }
}

?>