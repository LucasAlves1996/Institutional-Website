<?php

namespace App\Controllers;

use MyFramework\Controller\Action;
use MyFramework\Model\Container;

class RoutesController extends Action
{
    public function inicio()
    {
        $this->view->dados = [
            'title' => 'Início | MyFramework'    
        ];

        $this->render('inicio');
    }

    public function sobre()
    {
        $this->view->dados = [
            'title' => 'Sobre | MyFramework'    
        ];

        $this->render('sobre');
    }

    public function assessoria()
    {
        $this->view->dados = [
            'title' => 'Assessoria | MyFramework'    
        ];

        $this->render('assessoria');
    }

    public function consultoria()
    {
        $this->view->dados = [
            'title' => 'Consultoria | MyFramework'    
        ];

        $this->render('consultoria');
    }

    public function contabil()
    {
        $this->view->dados = [
            'title' => 'Contábil | MyFramework'    
        ];

        $this->render('contabil');
    }

    public function fiscal()
    {
        $this->view->dados = [
            'title' => 'Fiscal | MyFramework'    
        ];

        $this->render('fiscal');
    }

    public function departamento_pessoal()
    {
        $this->view->dados = [
            'title' => 'Departamento pessoal | MyFramework'    
        ];

        $this->render('departamento-pessoal');
    }

    public function outsourcing()
    {
        $this->view->dados = [
            'title' => 'Outsourcing | MyFramework'    
        ];

        $this->render('outsourcing');
    }

    public function contato()
    {
        $this->view->dados = [
            'title' => 'Contato | MyFramework'    
        ];

        $this->render('contato');
    }

    public function blog()
    {
        $this->view->dados = [
            'title' => 'Blog | MyFramework'    
        ];

        $this->render('blog');
    }

    public function error($error)
    {
        $this->view->dados = [
            'title' => '404 | MyFramework',
            'error' => $error
        ];

        $this->render('error');
    }
}

?>