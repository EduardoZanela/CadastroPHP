<?php
	include_once("../Include/security.php");
?>
<table class="table">
  <thead>
    <tr>
      <th>Firstname</th>
      <th>Email</th>
      <th>Telefone</th>
      <th>Data Nascimento</th>
      <th>Rua</th>
      <th>cidade</th>
      <th>estado</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include_once('../DAO/pessoaDAO.php');

      $pessoasArray = array();
      $pessoasDao = new pessoaDAO();
      $pessoasArray = $pessoasDao->listaPessoa();

      foreach ($pessoasArray as $pessoa){ ?>
        <tr>
          <td><?php echo $pessoa['nome'];?></td>
          <td><?php echo $pessoa['email'];?></td>
          <td><?php echo $pessoa['telefone'];?></td>
          <td><?php echo $pessoa['dataNascimento'];?></td>
          <td><?php echo $pessoa['rua'];?></td>
          <td><?php echo $pessoa['cidade'];?></td>
          <td><?php echo $pessoa['estado'];?></td>
        </tr>
      <?php }
     ?>
  </tbody>
</table>
