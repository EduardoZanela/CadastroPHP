<?php

include '../DAO/usersDAO.php';

session_start();

echo "aaa";

if(isset($_GET['operation'])){
    switch ($_GET['operation']){
        case 'validar':
            $usuario = $_POST['inputEmail'];
            $senha = $_POST['inputPassword'];

            echo $usuario;
            echo $senha;

            $array = array();
            $userDao = new usersDAO();
            $array = $userDao->validateUser($usuario, $senha);

            if(empty($array)){
                $_SESSION['logginError'] = utf8_encode("Usuário ou senha inválidos");
                header("location: ../view/login.php");
            } else{
                foreach ($array as $a){
                    $_SESSION['userId'] = $a['id'];
                    $_SESSION['userName'] = $a['nome'];
                    $_SESSION['userEmail'] = $a['email'];
                    $_SESSION['userUser'] = $a['user'];
                    $_SESSION['userId_nivel_acesso'] = $a['id_nivel_acesso'];

                }
                if($_SESSION['userId_nivel_acesso'] == 1){
                    header("location:../view/dashboard.php");
                } else{
                    header("location:../view/ctrl_user.php");
                }

            }

            break;
        default:
            echo "Operação Inexistente";
            break;
    }
}