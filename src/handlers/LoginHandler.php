<?php
namespace src\handlers;

use \src\models\Users;

class LoginHandler {

    public static function checkLogin() {
        if(!empty($_SESSION['id_usuario'])){
            $id_usuario = $_SESSION['id_usuario'];
            
            $data = Users::select()->where('id', $id_usuario)->one();            
            if(count($data)>0){
                $usuario = new Users();
                $usuario->id = $data['id'];
                $usuario->name = $data['name'];

                return $usuario;
            }
        }

        return false;

    }

    public static function verifyLogin($username, $pass) {
        $usuario = Users::select()->where('username', $username)->one();
        if($usuario){
            if($pass === $usuario['password']){
                return $usuario['id'];
            }
        }
        return false;
    }

}