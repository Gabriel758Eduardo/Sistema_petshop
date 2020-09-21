<?php

	    $pront = $_POST['id'];

        $nomeAn = $_POST['nomeAn'];
        $idadeAn = $_POST['idadeAn'];
        $nomeDo = $_POST['nomeDo'];
        $telefoneDo = $_POST['telefoneDo'];

        include('cabecalho_conexao.php');
		
		$texto = "Animal atualizado com sucesso";
                
        $SQL = "UPDATE animais set nome_do_pet='$nomeE', idade_do_pet='$idadeE', nome_do_dono='$nomeDE', telefone='$telefoneE' WHERE id=$pront";

        include('rodape_conexao.php');

    }

?>