<?php
	include_once("../Include/security.php");




  if (!isset($_GET['p'])){
?>
  <h2>Você está na home do seu Motel</h2>
  <p>Listamos todas as reservas que quem vai trair efetuou: obs: so não tem a do gordinho da Savereiro.</p>
<?php
}
  if($_SESSION['userId'] != '') {
    if ($_SESSION['userId_nivel_acesso'] != 1) {
?>
  <p>Como você não é um usuario privilegiado você não pode cadastrar nada.</p>
<?php

    }
}
?>

<table class="table">
  <thead>
    <tr>
      <th>Quarto</th>
      <th>Pessoa</th>
      <th>Data de Inicio</th>
      <th>Data de Fim</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include_once('../DAO/reservaDAO.php');
      include_once('../DAO/quartoDAO.php');
      include_once('../DAO/tipoQuartoDAO.php');
      include_once('../DAO/pessoaDAO.php');

      $reservaArray = array();
      $reservaDao = new reservaDAO();
      $reservaArray = $reservaDao->listaReserva();


      foreach ($reservaArray as $pessoa){ ?>
        <tr>
          <td>
            <?php
              $quartoArray = array();
              $quartoDao = new quartoDAO();
              $quartoArray = $quartoDao->findById($pessoa['quarto_id']);
              foreach ($quartoArray as $quarto){
                echo "Numero " . $quarto['numero'];
                $tipoQuartoArray = array();
                $tipoQuartoDao = new tipoQuartoDAO();
                $tipoQuartoArray = $tipoQuartoDao->findById($quarto['tipoQuarto']);
                foreach ($tipoQuartoArray as $tipo){
                  echo " Tipo " . $tipo['nome'];
                }
              }
            ?>
          </td>
          <td>
            <?php
              $pessoaArray = array();
              $pessoaDao = new pessoaDAO();
              $pessoaArray = $pessoaDao->findById($pessoa['pessoa_id']);
              foreach ($pessoaArray as $a){
                echo $a['nome'];
              }
            ?>
          </td>
          <td><?php echo $pessoa['periodoInicio'];?></td>
          <td><?php echo $pessoa['periodoFim'];?></td>
        </tr>
      <?php }
     ?>
  </tbody>
</table>
