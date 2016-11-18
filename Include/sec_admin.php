<?php

if($_SESSION['userId'] != '') {
    if ($_SESSION['userId_nivel_acesso'] != 1) {
        header("location:../View/ctrl_user.php");
    }
}
?>