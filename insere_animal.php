<?php

	$nomeA = $_POST['nomeA'];
	$idadeA = $_POST['idadeA'];
	$nomeD = $_POST['nomeD'];
	$tel = $_POST['tel'];
	
	include('cabecalho_conexao.php');
	
	$SQL = "INSERT INTO animais (nomep, idadep, nomed, telefoned) 
			VALUE ('$nomeA', $idadeA, '$nomeD', $tel)";
	
	include('rodape_conexao.php');
?>