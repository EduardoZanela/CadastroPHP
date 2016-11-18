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
            $quarto->cama = $_POST['cama'];
            $quarto->tv = $_POST = $_POST['tv'];
            $quarto->banheiro = $_POST['banheiro'];
            $quarto->frigobar = $_POST['frigobar'];
            $quarto->sacada = $_POST['sacada'];
            $quarto->jacuzi = $_POST['jacuzi'];
            $quarto->estado = $_POST['estado'];
            $quarto->descricao = $_POST['descricao'];

            $validator = new DataValidator();

            if(!$validator->validarQuarto($quarto)){
                $_SESSION['cadastroError'] = utf8_encode("Todos os campos são Obrigatorios");
                header("location: ../view/dashboard.php");
            }

            $quartoDao = new quartoDAO();
            $quartoDao->insertQuarto($quarto);


            header("location:../view/dashboard.php");


            break;
        default:
            echo "Operação Inexistente";
            break;
    }
}