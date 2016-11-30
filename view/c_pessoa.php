<?php
	include_once("../Include/security.php");
?>
<h2>Cadastro de Pessoas</h2>
<form action="../controller/pessoaController.php?operation=cadastrar" method="post" class="form-group">
	<input name="nome" placeholder="nome" required="" class="form-control" />
	<input name="email" placeholder="email" required="" class="form-control" />
	<input name="telefone" placeholder="telefone" required="" class="form-control" />
	<input type="date" name="dataNascimento" placeholder="dataNascimento" required="" class="form-control" />
	<input name="sexo" placeholder="sexo" required="" class="form-control" />
	<input name="cpf" placeholder="cpf" required="" class="form-control" />
	<input name="rua" placeholder="rua" required="" class="form-control" />
	<input type="number" name="numero" placeholder="numero" required="" class="form-control" />
	<input name="bairro" placeholder="bairro" required="" class="form-control" />
	<input name="complemento" placeholder="complemento" required="" class="form-control" />
	<input name="cidade" placeholder="cidade" required="" class="form-control" />
	<input name="estado" placeholder="estado" required="" class="form-control" />
	<input name="pais" placeholder="pais" required="" class="form-control" />
	<input type="submit" value="Submit" class="btn btn-default" class="form-control" />
	<input type="reset" class="btn btn-default" />
</form>
