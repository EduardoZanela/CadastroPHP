<?php
    include '../Persistence/ConnectionDB.php';

    class quartoDAO{

        private $connection = null;

        public function __construct(){
            $this->connection = ConnectionDB::getInstance();
        }

        public  function listaQuartos(){
            try{
                $status = $this->connection->prepare("Select * from quartos");

                $status->execute();

                $array = array();
                $array = $status->fetchAll();

                $this->connection = null;

                return $array;
            } catch (PDOException $e){
                echo utf8_decode('Ocorrema erros ao busca o usuário' . $e);
            }
        }

        public function insertQuarto($user){
            try{

                $status = $this->connection->prepare("Insert Into quartos(id, tipoQuarto, numero, andar,"
                    . "descricao) values(null,?,?,?,?)");

                echo "$user->tipoQuarto<br>";
                echo "$user->numero<br>";
                echo "$user->andar<br>";
                echo "$user->descricao<br>";

                $status->bindValue(1, $user->tipoQuarto);
                $status->bindValue(2, $user->numero);
                $status->bindValue(3, $user->andar);
                $status->bindValue(4, $user->descricao);

                $status->execute();

                $this->connection = null;


            } catch (PDOException $ex) {
                echo 'Erro ocorreu';
            }
        }

    }
