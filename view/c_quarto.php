<h2>Cadastro de Quarto</h2>
<form action="../controller/quartoController.php?operation=cadastrar" method="post" class="form-group">
	<!-- @TODO gerar dropdown do "tipoQuarto" -->
	<select class="form-control" name="tipoQuarto">
	<?php
		include_once('../DAO/tipoQuartoDAO.php');

		$array = array();
		$tipoQuarto = new tipoQuartoDAO();
		$array = $tipoQuarto->listaTipoQuarto();

		foreach ($array as $a){ ?>
		<option value="<?php echo $a['id']; ?>"><?php echo $a['nome'];?></option>
		<?php }

	 ?>
	<input type="number" name="numero" placeholder="numero" required="" class="form-control" />
	<input name="andar" placeholder="andar" required="" class="form-control" />
	<input name="descricao" placeholder="descricao" required="" class="form-control" />
	<input type="submit" value="Submit" class="btn btn-default" class="form-control" />
	<input type="reset" class="btn btn-default" />
</form>
