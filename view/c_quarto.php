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
	<input name="tv" placeholder="tv" required="" class="form-control" />
	<input name="banheiro" placeholder="banheiro" required="" class="form-control" />
	<input name="jacuzi" placeholder="jacuzi" required="" class="form-control" />
	<input name="cama" placeholder="cama" required="" class="form-control" />
	<input name="descricao" placeholder="descricao" required="" class="form-control" />
	<label class="checkbox-inline"><input type="checkbox" name="frigobar" value="1">Frigobar</label>
	<label class="checkbox-inline"><input type="checkbox" name="sacada" value="1">Sacada</label>
	<div class="radio">
  	<label><input type="radio" name="estado">Locado</label>
	</div>
	<div class="radio">
  	<label><input type="radio" name="estado">Disponivel</label>
	</div>
	<input type="submit" value="Submit" class="btn btn-default" class="form-control" />
	<input type="reset" class="btn btn-default" />
</form>
