<h2>Cadastro de Reservas</h2>
<form action="../controller/reservaController.php?operation=cadastrar" method="post" class="form-group">
	<!-- @TODO gerar dropdown do "tipoQuarto" -->
	<select class="form-control" name="quarto">
	<?php
		include_once('../DAO/quartoDAO.php');
		include_once('../DAO/tipoQuartoDAO.php');

		$array = array();
		$Quarto = new quartoDAO();
		$array = $Quarto->listaQuartos();

		foreach ($array as $a){ ?>
		<option value="<?php echo $a['id']; ?>">Quarto Numero <?php
			echo $a['numero'];
			$arrayTipoQuarto = array();
			$tipoQuarto = new tipoQuartoDAO();
			$arrayTipoQuarto = $tipoQuarto->findById($a['tipoQuarto']);
			foreach ($arrayTipoQuarto as $c){
				echo " Tipo ".$c['nome'];
			}
		?></option>
		<?php }

	 ?>
 </select>
 <select class="form-control" name="pessoa">
	 <?php
	 include_once('../DAO/pessoaDAO.php');

		 $bb = array();
		 $aa = new pessoaDAO();
		 $bb = $aa->listaPessoa();

		 foreach ($bb as $b){ ?>
		 <option value="<?php echo $b['id']; ?>"><?php echo $b['nome']. " Id " . $b['id'];?></option>
		 <?php }

		?>
	</select>
	<input type="date" name="periodoInicio" placeholder="periodoInicio" required="" class="form-control" />
	<input type="date" name="periodoFim" placeholder="periodoFim" required="" class="form-control" />
	<input type="submit" value="Submit" class="btn btn-default" class="form-control" />
	<input type="reset" class="btn btn-default" />
</form>
