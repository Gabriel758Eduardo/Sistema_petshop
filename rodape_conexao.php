<?php
	include("cabecalho.inc.php");
?>
<?php

	$query = mysqli_query($con, $SQL);
	if($query){
		echo "Dados Inseridos";
		echo"</br>";
		echo "<a href='menu.php'>Voltar</a>";
	} else {
		echo mysqli_error($con);
	}

	mysqli_close($con);
?>