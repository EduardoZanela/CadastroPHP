<?php

ob_start();

if($_SESSION['userId'] == ""){
    $_SESSION['logginError'] = "Para acessar o sistema efetue o login";
    header("location:../View/login.php");
}
?>