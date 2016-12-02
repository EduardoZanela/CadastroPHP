<?php

    include_once('../Persistence/ConnectionDB.php');

    class tipoQuartoDAO{
        private $connection = null;

        public function __construct(){
            $this->connection = ConnectionDB::getInstance();
        }

        public  function findById($id){
            try{
                $status = $this->connection->prepare("Select * from tipoQuarto where id = $id");

                $status->execute();

                $array = array();
                $array = $status->fetchAll();

                $this->connection = null;

                return $array;
            } catch (PDOException $e){
                echo utf8_decode('Ocorrema erros ao busca o usuário' . $e);
            }
        }

        public  function listaTipoQuarto(){
            try{
                $status = $this->connection->prepare("Select * from tipoquarto");

                $status->execute();

                $array = array();
                $array = $status->fetchAll();

                $this->connection = null;

                return $array;
            } catch (PDOException $e){
                echo utf8_decode('Ocorrema erros ao busca o usuário' . $e);
            }
        }

        public function insertTipoQuarto($user){
            try{

                $status = $this->connection->prepare("Insert Into tipoQuarto(id, nome, preco)"
                    . " values(null,?,?)");

                $status->bindValue(1, $user->nome);
                $status->bindValue(2, $user->preco);


                $status->execute();

                $this->connection = null;


            } catch (PDOException $ex) {
                echo 'Erro ocorreu';
            }
        }

    }
