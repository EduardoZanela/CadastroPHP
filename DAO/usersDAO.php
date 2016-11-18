<?php
include '../Persistence/ConnectionDB.php';

class usersDAO {
    private $connection = null;

    public function __construct(){
        $this->connection = ConnectionDB::getInstance();
    }

    public  function validateUser($user, $pass){
        try{
            $status = $this->connection->prepare("Select * from users where user = '$user' and senha = '$pass'");

            $status->execute();

            $array = array();
            $array = $status->fetchAll();

            $this->connection = null;

            return $array;
        } catch (PDOException $e){
            echo utf8_decode('Ocorrema erros ao busca o usuário' . $e);
        }
    }

}