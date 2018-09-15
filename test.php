<?php
require_once('config.php');

function FetchDataAssoc(){
    //testeo
    $nameUser = "testeo1";
    $file_name = "users.json";
    $file = fopen($file_name, 'r');
    $data = json_decode(fread($file, filesize($file_name)));
    foreach ($data as $elemento){
        //var_dump($elemento);
        if($nameUser == $elemento->name){
            echo 'Tengo que retornar un objeto usuario con sus atributos';
            //retornar el usuario con sus datos encapsulados
            //Si se encuentra el user, creamos un usuario
            //$user = new User($valor['username'], $valor['hash'], $valor['salt']);
            //return $user;
        }
    }
    fclose($file);
}

$data = FetchDataAssoc();

/*

function fetchDataAssoc($filePath){
    $file = fopen($filePath, 'r');
    $data = json_decode(fread($file, filesize($filePath)), true);
    fclose($file);
    return $data;
}

$var = fetchDataAssoc('users.json');
//var_dump($var);

$connection = new PDO("mysql:host=localhost;dbname=produccionweb", 'root', ''); //Meter esto en un try catch
$statement = $connection->prepare("SELECT * FROM usuarios WHERE username = ?");
$statement->execute(['testeo1']);
$user = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($user);
//$connection = null;
//var_dump($connection);
//var_dump($statement);
//var_dump($result);
*/