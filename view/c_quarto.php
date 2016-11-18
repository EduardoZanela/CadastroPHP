<h2>Cadastro de Quarto</h2>
<form action="../controller/quartoController.php?operation=cadastrar" method="post" class="form-group">
	<!-- @TODO gerar dropdown do "tipoQuarto" -->
	<input type="number" name="tipoQuarto" placeholder="tipo" required="" class="form-control" />
	<input type="number" name="numero" placeholder="numero" required="" class="form-control" />
	<input name="andar" placeholder="andar" required="" class="form-control" />
	<input name="tv" placeholder="tv" required="" class="form-control" />
	<input name="banheiro" placeholder="banheiro" required="" class="form-control" />
	<input name="frigobar" placeholder="frigobar" required="" class="form-control" />
	<input name="sacada" placeholder="sacada" required="" class="form-control" />
	<input name="jacuzi" placeholder="jacuzi" required="" class="form-control" />
	<input name="estado" placeholder="estado" required="" class="form-control" />
	<input name="cama" placeholder="cama" required="" class="form-control" />
	<input name="descricao" placeholder="descricao" required="" class="form-control" />
	<input type="submit" value="Submit" class="btn btn-default" class="form-control" />
	<input type="reset" class="btn btn-default" />
</form>
