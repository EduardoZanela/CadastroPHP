<?php

include '../DAO/reservaDAO.php';
include '../model/ReservaBean.php';
include '../Include/DataValidator.php';

session_start();

if(isset($_GET['operation'])){
    switch ($_GET['operation']){
        case 'cadastrar':

            $reserva = new ReservaBean();

            $reserva->quarto = $_POST['quarto'];
            $reserva->pessoa = $_POST['pessoa'];
            $reserva->periodoInicio = $_POST['periodoInicio'];
            $reserva->periodoFim = $_POST['periodoFim'];

            $validator = new DataValidator();

            if(!$validator->validarReserva($reserva)){
                $_SESSION['cadastroError'] = utf8_encode("Todos os campos são Obrigatorios");
                header("location: ../view/dashboard.php");
            }

            $reservaDao = new reservaDAO();
            $reservaDao->insertReserva($reserva);


            header("location:../view/dashboard.php");


            break;
        case 'listar':

            $array = array();
            $userDao = new ReservaBean();
            $array = $userDao->listaReserva();

            if(empty($array)){
                $_SESSION['listarError'] = utf8_encode("Tabela Vazia");
                header("location: ../view/dashboard.php");
            } else{
                $_SESSION['reservasArray'] = $array;

                header("location:../view/ctrl_user.php");
            }

            break;

        default:
            echo "Operação Inexistente";
            break;
    }
}
