<?php
        if(empty($_POST))
        {
            include('cabecalho_conexao.php');
            
            $pront= $_GET['pront'];
            $SQL = "SELECT * FROM animais WHERE id= $pront";

            $dados_recuperados = mysqli_query($con, $SQL);

            if(mysqli_num_rows($dados_recuperados) > 0){
                
                while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
                    
                    $nomeA=$resultado[1];
                    $idadeA=$resultado[2];
                    $nomeD=$resultado[3];
                    $tel=$resultado[4];
                }
                echo'<form action="menu.php" method="POST">
                        <fieldset>
                            <legend>Editar dados do animal</legend>
                            <p>
                                <label>Nome do animal</label>
                                <input type="text" name="nomeAn" value="'.$nomeA.'"/>
                            </p>
                            <p>
                                <label>Idade do Animal</label>
                                <input type="number" name="idadeAn" value="'.$idadeA.'"/>
                            </p>
                            <p>
                                <label>Nome do Dono</label>
                                <input type="text" name="nomeDo" value="'.$nomeD.'"/>
                            </p>
                            <p>
                                <label>Telefone</label>
                                <input type="number" name="telefoneDo" value="'.$tel.'"/>
                            </p>
                            <p>
                                <input type="hidden" name="id" value="'.$pront.'"/>
                            </p>
                            <p>
                                <input type="submit" value="Atualizar"/>
                            </p>
                        </fieldset>
                    </form>';	
			}
		}
?>

<?php
include('rodape.inc.php');
?>