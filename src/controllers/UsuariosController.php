<?php
namespace src\controllers;

use \core\Controller;
use src\models\Usuario;

class UsuariosController extends Controller {

    public function add() {
        $this->render('add');
    }

    public function editar($args) {
        $this->render('editar', ['usuario' => Usuario::select()->find($args['id'])]);
    }

    public function delete($args) {
        Usuario::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');  
    }

    public function insert() {
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        if($nome && $email){
            $data = Usuario::select()->where('email', $email)->execute();
            if(count($data) === 0){
                Usuario::insert(['nome' => $nome,
                                 'email' => $email
                                ])->execute();
            $this->redirect('/');                       
            }
        }
        $this->redirect('/novo');
    }

    public function update($args) {
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        if($nome && $email){
            $data = Usuario::update()->set(['nome' => $nome, 'email' => $email])->where('id', $args['id'])->execute();
            $this->redirect('/');
        }
        $this->redirect('/usuario/'.$args['id'].'/editar');
    }
}