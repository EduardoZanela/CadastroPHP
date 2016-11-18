<?php

session_start();
include_once("../Include/security.php");

echo "Pagina de controle de usuario <br> Bem vindo ".$_SESSION['userName'];

?>