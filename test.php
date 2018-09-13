<?php
require_once('config.php');

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