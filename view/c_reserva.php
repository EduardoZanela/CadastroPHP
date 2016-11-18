<h2>Cadastro de Reservas</h2>
<form action="../controller/reservaController.php?operation=cadastrar" method="post" class="form-group">
	<input name="quarto" placeholder="quarto" required="" class="form-control" />
	<input name="pessoa" placeholder="pessoa" required="" class="form-control" />
	<input type="date" name="periodoInicio" placeholder="periodoInicio" required="" class="form-control" />
	<input type="date" name="periodoFim" placeholder="periodoFim" required="" class="form-control" />
	<input type="submit" value="Submit" class="btn btn-default" class="form-control" />
	<input type="reset" class="btn btn-default" />
</form>
