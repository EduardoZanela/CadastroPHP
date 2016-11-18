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

    public function insertUser($user){
        try{
            $status = $this->connection->prepare("Insert Into users(id, Nome,Sobrenome,dataNascimento,"
                . "cpf,sexo,profissao,telefone,celular,email,cep,endereco,complemento,bairro,cidade,estado,observacao)"
                . " values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

            $status->bindValue(1, $user->user);
            $status->bindValue(2, $user->nome);
            $status->bindValue(3, $user->sobrenome);
            $status->bindValue(4, $user->dataNascimento);
            $status->bindValue(5, $user->cpf);
            $status->bindValue(6, $user->sexo);
            $status->bindValue(7, $user->profissao);
            $status->bindValue(8, $user->telefone);
            $status->bindValue(9, $user->celular);
            $status->bindValue(10, $user->email);
            $status->bindValue(11, $user->CEP);
            $status->bindValue(12, $user->endereco);
            $status->bindValue(13, $user->complemento);
            $status->bindValue(14, $user->bairro);
            $status->bindValue(15, $user->cidade);
            $status->bindValue(16, $user->estado);
            $status->bindValue(17, $user->observacao);

            $status->execute();

            $this->connection = null;


        } catch (PDOException $ex) {
            echo 'Erro ocorreu';
        }
    }

}