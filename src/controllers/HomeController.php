<?php
namespace src\controllers;

use \core\Controller;
use src\models\Test;
use src\models\Usuario;

class HomeController extends Controller {

    public function index() {
        $this->render('home', ['usuarios' => Usuario::select()->execute()]);
    }

}