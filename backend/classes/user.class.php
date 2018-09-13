<?php
require_once('../../config.php');
class User
{
    private $username;
    private $hash;
    private $salt;

    public function __get($var){
        if ($var != "hash" || $var != "salt") {
            return $this->$var;
        }else{
            return NULL;
        }
    }
    public function __construct(){
        //construir SOLAMENTE cuando se loguea el usuario
    }

    public static function userLogin($inputUser, $inputPassword){
        $userRetrieved = JSON::fetchUser($inputUser);
        if(is_null($userRetrieved)){
            //Usuario inexistente
        } else{
            $hashToCheck = hash('SHA256', $inputPassword . $userRetrieved['salt']);
            if($hashToCheck == $userRetrieved['hash']){
                //Logueamos al usuario
            } else{
                //Contraseña incorrecta
            }
        }
    }
}
