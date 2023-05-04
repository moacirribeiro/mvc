<?php
namespace src\models;
use \core\Model;

class Users extends Model {


    private $id_usuario;

    public function checkCredentials($user, $pass) {
        $u = Users::select(['id', 'username'])->where("username", $user)->where("password", $pass)->one();
        if(count($u)>0){
            $this->id_usuario = $u["id"];
            return true;
        }else{
            return false;
        }

    }

}