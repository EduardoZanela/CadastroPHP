<table class="table">
  <thead>
    <tr>
      <th>Tipo de Quarto</th>
      <th>Numero</th>
      <th>Andar</th>
      <th>Descrição</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include_once('../DAO/quartoDAO.php');
      include_once('../DAO/tipoQuartoDAO.php');

      $quartosArray = array();
      $quartosDao = new quartoDAO();
      $quartosArray = $quartosDao->listaQuartos();


      foreach ($quartosArray as $pessoa){ ?>
        <tr>
          <td>
            <?php
              $tipoQuartoArray = array();
              $tipoQuartoDao = new tipoQuartoDAO();
              $tipoQuartoArray = $tipoQuartoDao->findById($pessoa['tipoQuarto']);
              foreach ($tipoQuartoArray as $tipo){
                echo $tipo['nome'];
              }
            ?>
          </td>
          <td><?php echo $pessoa['numero'];?></td>
          <td><?php echo $pessoa['andar'];?></td>
          <td><?php echo $pessoa['descricao'];?></td>
        </tr>
      <?php }
     ?>
  </tbody>
</table>
