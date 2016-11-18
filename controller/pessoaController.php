<?php

include '../DAO/pessoaDAO.php';
include '../model/PessoasBean.php';
include '../Include/DataValidator.php';

session_start();

if(isset($_GET['operation'])){
    switch ($_GET['operation']){
        case 'cadastrar':

            $pessoa = new PessoasBean();

            $pessoa->nome = $_POST['nome'];
            $pessoa->email = $_POST['email'];
            $pessoa->telefone = $_POST['telefone'];
            $pessoa->dataNascimento = $_POST['dataNascimento'];
            $pessoa->sexo = $_POST = $_POST['sexo'];
            $pessoa->cpf = $_POST['cpf'];
            $pessoa->rua = $_POST['rua'];
            $pessoa->numero = $_POST['numero'];
            $pessoa->bairro = $_POST['bairro'];
            $pessoa->complemento = $_POST['complemento'];
            $pessoa->cidade = $_POST['cidade'];
            $pessoa->estado = $_POST['estado'];
            $pessoa->pais = $_POST['pais'];

            $validator = new DataValidator();

            if(!$validator->validarPessoa($pessoa)){
                $_SESSION['cadastroError'] = utf8_encode("Todos os campos são Obrigatorios");
                header("location: ../view/dashboard.php");
            }

            $userDao = new pessoaDAO();
            $userDao->insertUser($pessoa);


            header("location:../view/dashboard.php");


            break;
        default:
            echo "Operação Inexistente";
            break;
    }
}