<?php
class User
{
    private $name;
    private $surname;
    private $email;
    private $username;
    private $hash;
    private $salt;

    public function __get($var){
        if ($var != "hash" || $var != "salt") {
            return $this->$var;
        }else{
            return null;
        }
    }

    public function __construct(){
        //construir en base a los datos de la DB
    }
}
