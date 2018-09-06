<?php
require_once("../../config.php");
class Database{
    private $connection;

    public function __construct(){
        $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password); //Meter esto en un try catch
    }

    private function clearConnection(){
        $this->$connection = null;
    }
    
    public function getData(User $user){
        $statement = $connection->prepare("SELECT * FROM usuarios WHERE username= $user->get($username)");
        $statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        clearConnection();
        return $result;
    }
}


