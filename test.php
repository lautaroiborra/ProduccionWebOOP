<?php
/*
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
<<<<<<< HEAD
=======
*/

$host = '127.0.0.1';
$db   = 'produccionweb';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$email = 'testeo2@davinci.edu.ar';


$stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
$stmt->execute([$email]);
$user = $stmt->fetch();
var_dump($user);
/*
while ($row = $stmt->fetch())
{
    echo $row['name'] . "<br>";
}
>>>>>>> aaa411bf4e6dfe6ef84412d3413e720b23347dbd
*/