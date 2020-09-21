<?php
	include("cabecalho.inc.php");
?>
    <?php
        if(empty($_POST)){
            include 'form.inc';
        }
        else{
            $Telefonedono = $_POST["tel"];
            include('cabecalho_conexao.php');

            $SQL = "SELECT * FROM animais WHERE telefoned='$Telefonedono'";

            $dados_recuperados = mysqli_query($con, $SQL);

            if(mysqli_num_rows($dados_recuperados) > 0){
                echo'<center><table border = "1">
                    <tr>
                        <th>Id</th>
                        <th>Nome do Animal</th>
                        <th>Idade do Animal</th>
                        <th>Nome do Dono</th>
                        <th>Telefone</th>
                    </tr>';
                while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
                    echo '
					<tr>
						<td>'.$resultado[0].'</td>
						<td>'.$resultado[1].'</td>
						<td>'.$resultado[2].'</td>
						<td>'.$resultado[3].'</td>
						<td>'.$resultado[4].'</td>
					</tr>
                    ';
                }		
                echo '</table></center>';
                echo '<a href="menu.php">Voltar</a>';
            }
            else{
                echo"Este Dono não consta no banco de dados!";
            }

            mysqli_close($con);
        }
        
    ?>