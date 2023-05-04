<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class LoginController extends Controller {

    public function login() {
        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('login', [
            'flash' => $flash
        ]);
    }

    public function actionLogin() {
        
        $data = array();
        
        $username = trim(filter_input(INPUT_POST, 'inputUsername'));        
        $pass = filter_input(INPUT_POST, 'inputPassword');        

        if($username && $pass){
            $id_usuario = LoginHandler::verifyLogin($username, md5($pass));
            if($id_usuario){
                $_SESSION['id_usuario'] = $id_usuario;
                $this->redirect('/');
            }else{
                $_SESSION['flash'] = 'E-mail e/ou senha não conferem.';
                $this->redirect('/login');
            }
        }else{
            $_SESSION['flash'] = 'E-mail ou senha inválidos.';
            $this->redirect('/login');
        }

    }

    public function logout() {
        unset($_SESSION['id_usuario']);
        $this->redirect('/login');
    }

}