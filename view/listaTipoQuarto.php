<?php
	include_once("../Include/security.php");
?>
<table class="table">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Preço</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include_once('../DAO/tipoQuartoDAO.php');

      $tipoQuartoArray = array();
      $tipoQuartoDao = new tipoQuartoDAO();
      $tipoQuartoArray = $tipoQuartoDao->listaTipoQuarto();

      foreach ($tipoQuartoArray as $tipo){ ?>
        <tr>
          <td><?php echo $tipo['nome'];?></td>
          <td><?php echo "R$" . $tipo['preco'];?></td>
        </tr>
      <?php }
     ?>
  </tbody>
</table>
