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
                    . "cama, tv, banheiro, frigobar, sacada, jacuzi, estado, descricao)"
                    . " values(null,?,?,?,?,?,?,?,?,?,?,?)");

                $status->bindValue(1, $user->tipoQuarto);
                $status->bindValue(2, $user->numero);
                $status->bindValue(3, $user->andar);
                $status->bindValue(4, $user->numero);
                $status->bindValue(5, $user->andar);
                $status->bindValue(6, $user->cama);
                $status->bindValue(7, $user->tv);
                $status->bindValue(8, $user->banheiro);
                $status->bindValue(9, $user->frigobar);
                $status->bindValue(10, $user->sacada);
                $status->bindValue(11, $user->jacuzi);
                $status->bindValue(12, $user->estado);
                $status->bindValue(13, $user->descricao);

                $status->execute();

                $this->connection = null;


            } catch (PDOException $ex) {
                echo 'Erro ocorreu';
            }
        }

    }