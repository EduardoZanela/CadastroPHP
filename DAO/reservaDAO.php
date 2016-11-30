<?php
    include_once('../Persistence/ConnectionDB.php');

    class reservaDAO{

        private $connection = null;

        public function __construct(){
            $this->connection = ConnectionDB::getInstance();
        }

        public  function findById($id){
            try{
                $status = $this->connection->prepare("Select * from reserva where id = $id");

                $status->execute();

                $array = array();
                $array = $status->fetchAll();

                $this->connection = null;

                return $array;
            } catch (PDOException $e){
                echo utf8_decode('Ocorrema erros ao busca o usuário' . $e);
            }
        }

        public  function listaReserva(){
            try{
                $status = $this->connection->prepare("Select * from reserva");

                $status->execute();

                $array = array();
                $array = $status->fetchAll();

                $this->connection = null;

                return $array;
            } catch (PDOException $e){
                echo utf8_decode('Ocorrema erros ao busca o usuário' . $e);
            }
        }

        public function insertReserva($user){
            try{

                $status = $this->connection->prepare("Insert Into reserva(id, quarto_id, pessoa_id, periodoInicio,"
                    . "periodoFim) values(null,?,?,?,?)");

                echo "$user->quarto<br>";
                echo "$user->pessoa<br>";
                echo "$user->periodoInicio<br>";
                echo "$user->periodoFim<br>";

                $status->bindValue(1, $user->quarto);
                $status->bindValue(2, $user->pessoa);
                $status->bindValue(3, $user->periodoInicio);
                $status->bindValue(4, $user->periodoFim);

                $status->execute();

                $this->connection = null;


            } catch (PDOException $ex) {
                echo 'Erro ocorreu';
            }
        }

    }
