<?php
	include("cabecalho.inc.php");
?>

	<form action="insere_animal.php" method="POST">
		<label>Nome do Animal:</label>
		<input type="text" name="nomeA" />
		<br>
		
		<label>Idade do Animal:</label>
		<input type="number" name="idadeA" />
		<br>
		
		<label>Nome do Dono:</label>
		<input type="text" name="nomeD" />
		<br>
		
		<label>Telefone do Dono:</label>
		<input type="number" name="tel" />
		<br>
		
		<input type="submit" value="Salvar" />
	</form>
		
<?php
	include("rodape.inc.php");
?>