<?php
    session_start();
    include_once("../Include/security.php");
    include_once ("../Include/sec_admin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../Include/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../Include/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../Include/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <script src="../Include/js/ie-emulation-modes-warning.js"></script>
    <script src="../Include/js/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="../Include/css/jquery.modal.min.css" type="text/css" media="screen" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Motel Brazileirinhas!!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"> Bem vindo <?php echo $_SESSION['userName']?></a></li>
                <li><a href="../Include/logout.php">logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="<?php if (!isset($_GET['p'])){ echo 'active';}?>"><a href="?">Home</a></li>
                <li class="<?php if($_GET['p'] == 'pessoas'){ echo 'active';}?>"><a href="?p=pessoas">Pessoas</a></li>
                <li class="<?php if($_GET['p'] == 'quartos'){ echo 'active';}?>"><a href="?p=quartos">Quartos</a></li>
                <li class="<?php if($_GET['p'] == 'reservas'){ echo 'active';}?>"><a href="?p=reservas">Reservas</a></li>
                <li class="<?php if($_GET['p'] == 'tipoQuarto'){ echo 'active';}?>"><a href="?p=tipoQuarto">Tipo de Quarto</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li class="<?php if($_GET['p'] == 'c_pessoa'){ echo 'active';}?>"><a href="?p=c_pessoa">Cadastro de pessoas</a></li>
                <li class="<?php if($_GET['p'] == 'c_quarto'){ echo 'active';}?>"><a href="?p=c_quarto">Cadastro de quartos</a></li>
                <li class="<?php if($_GET['p'] == 'c_reserva'){ echo 'active';}?>"><a href="?p=c_reserva">Cadastro de reservas</a></li>
                <li class="<?php if($_GET['p'] == 'c_tipo'){ echo 'active';}?>"><a href="?p=c_tipo">Cadastro de tipo de quarto</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Seu Dashboard <?php echo $_SESSION['userName']?></h1>
			<?php
				if (!isset($_GET['p'])){
          require_once('listaReservas.php');
					return;
        }
				$page = $_GET['p'];

				switch($page) {
					case 'c_pessoa':
						require_once('c_pessoa.php');
						break;
					case 'c_quarto':
						require_once('c_quarto.php');
						break;
					case 'c_reserva':
						require_once('c_reserva.php');
						break;
					case 'c_tipo':
						require_once('c_tipo.php');
						break;
          case 'pessoas':
            require_once('listaPessoas.php');
            break;
          case 'quartos':
            require_once('listaQuartos.php');
            break;
          case 'reservas':
            require_once('listaReservas.php');
            break;
          case 'tipoQuarto':
            require_once('listaTipoQuarto.php');
            break;
				}
			?>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../Include/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../Include/js/holder.js"></script>

</body>
</html>
