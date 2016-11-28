<?php

include '../DAO/quartoDAO.php';
include '../model/QuartoBean.php';
include '../Include/DataValidator.php';

session_start();

if(isset($_GET['operation'])){
    switch ($_GET['operation']){
        case 'cadastrar':

            $quarto = new QuartoBean();

            $quarto->tipoQuarto = $_POST['tipoQuarto'];
            $quarto->numero = $_POST['numero'];
            $quarto->andar = $_POST['andar'];
            $quarto->descricao = $_POST['descricao'];

            $validator = new DataValidator();

            if(!$validator->validarQuarto($quarto)){
                $_SESSION['cadastroError'] = utf8_encode("Todos os campos são Obrigatorios");
                header("location: ../view/dashboard.php");
            }

            $quartoDao = new quartoDAO();
            $quartoDao->insertQuarto($quarto);


            //header("location:../view/dashboard.php");


            break;
        case 'listar':

            $array = array();
            $userDao = new quartoDAO();
            $array = $userDao->listaQuartos();

            if(empty($array)){
                $_SESSION['listarError'] = utf8_encode("Tabela Vazia");
                header("location: ../view/dashboard.php");
            } else{
                $_SESSION['quartosArray'] = $array;

                header("location:../view/ctrl_user.php");
            }

            break;

        default:
            echo "Operação Inexistente";
            break;
    }
}
