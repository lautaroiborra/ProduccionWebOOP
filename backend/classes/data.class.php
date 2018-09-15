<?php
class Functions
{

    //Funcion para levantar y leer json
    function FetchUser($nameUser)
    {
        $file_name = "../users.json";
        $file = fopen($file_name, 'r');
        $data = json_decode(fread($file, filesize($file_name)));
        foreach ($data as $elemento) {
            if ($nameUser == $elemento->name) {
                echo 'Tengo que retornar un objeto usuario con sus atributos';
                //retornar el usuario con sus datos encapsulados
                //Si se encuentra el user, creamos un usuario
                //$user = new User($valor['username'], $valor['hash'], $valor['salt']);
                //return $user;
            }
        }
        fclose($file);
    }


}



/*
class Data{
    private $path;

    public function __construct($path){
        $this->path = $path;
}

    public function readData($field, $value){
        $handle = fopen($this->path, 'r');
        $data = fread($handle);
        $data = json_decode($data, true);

        foreach($data as $key => $value){
            //if()
        }
    }


}
*/