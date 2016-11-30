<?php

include '../DAO/tipoQuartoDAO.php';
include '../model/TipoQuartoBean.php';
include '../Include/DataValidator.php';

session_start();

if(isset($_GET['operation'])){
    switch ($_GET['operation']){
        case 'cadastrar':

            $tipoQuarto = new TipoQuartoBean();

            $tipoQuarto->nome = $_POST['nome'];
            $tipoQuarto->preco = $_POST['preco'];

            $validator = new DataValidator();

            if(!$validator->validarTipoQuarto($tipoQuarto)){
                $_SESSION['cadastroError'] = utf8_encode("Todos os campos são Obrigatorios");
                header("location: ../view/dashboard.php");
            }

            $quartoDao = new tipoQuartoDAO();
            $quartoDao->insertTipoQuarto($tipoQuarto);


            header("location:../view/dashboard.php");


            break;
        case 'listar':

            $array = array();
            $userDao = new tipoQuartoDAO();
            $array = $userDao->listaTipoQuarto();

            if(empty($array)){
                $_SESSION['listarError'] = utf8_encode("Tabela Vazia");
                header("location: ../view/dashboard.php");
            } else{
                $_SESSION['tipoQuartoArray'] = $array;

                header("location:../view/ctrl_user.php");
            }

            break;

        default:
            echo "Operação Inexistente";
            break;
    }
}
