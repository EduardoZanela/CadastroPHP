<?php

include '../Persistence/ConnectionDB.php';

class pessoaDAO {
    private $connection = null;

    public function __construct(){
        $this->connection = ConnectionDB::getInstance();
    }

    public  function listaPessoa(){
        try{
            $status = $this->connection->prepare("Select * from pessoas");

            $status->execute();

            $array = array();
            $array = $status->fetchAll();

            $this->connection = null;

            return $array;
        } catch (PDOException $e){
            echo utf8_decode('Ocorrema erros ao busca o usuário' . $e);
        }
    }

    public function insertUser($user){
        try{

            $status = $this->connection->prepare("Insert Into pessoas(id, nome, email, telefone,"
                . "dataNascimento, sexo, cpf, rua, numero, bairro, complemento, cidade, estado, pais)"
                . " values(null,?,?,?,?,?,?,?,?,?,?,?,?,?)");

            $status->bindValue(1, $user->nome);
            $status->bindValue(2, $user->email);
            $status->bindValue(3, $user->telefone);
            $status->bindValue(4, $user->dataNascimento);
            $status->bindValue(5, $user->sexo);
            $status->bindValue(6, $user->cpf);
            $status->bindValue(7, $user->rua);
            $status->bindValue(8, $user->numero);
            $status->bindValue(9, $user->bairro);
            $status->bindValue(10, $user->complemento);
            $status->bindValue(11, $user->cidade);
            $status->bindValue(12, $user->estado);
            $status->bindValue(13, $user->pais);

            $status->execute();

            $this->connection = null;


        } catch (PDOException $ex) {
            echo 'Erro ocorreu';
        }
    }

}
