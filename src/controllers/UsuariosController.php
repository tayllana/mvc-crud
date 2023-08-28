<?php
namespace src\controllers;

use \core\Controller;
use src\models\Test;

class UsuariosController extends Controller {

    public function add() {
        // echo 'novo';
        $this->render('add');
    }

    public function salvar() {
        // echo 'novo';
        $this->render('add');
    }

}