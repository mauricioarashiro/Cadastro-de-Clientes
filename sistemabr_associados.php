<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>
<?php include_once 'br_conexao.php' ?>

<?php
	
	//Iniciando a consulta (query) ao banco de dados:
	$sql = "select * from tb_empresa";
	$qry = @mysqli_query($conn, $sql);
	
	
	
	//fazendo a tabela
		echo
		"<div class='row container'>
			<p>&nbsp;</p>
			<form class='col s12'>
				<fieldset class='listagem'>
				<legend><img src='imagens/empresas.png' alt='(imagem)' width='100'></legend>
				<h5 class='light center'>Lista de Associados</h5>
				<table>
					<tr>
						<td>Razão Social</td><td>Nome de fantasia</td><td>CNPJ</td><td>Site</td>
					</tr>
					<hr>";
	
	while($linha = mysqli_fetch_array($qry)){
		echo "<tr>
				<td>" .$linha["razaosocial"] . "</td>
				<td>" .$linha["nomefantasia"] . "</td>
				<td>" .$linha["cnpj"] . "</td>
				<td>" .$linha["site"] . "</td>
			</tr>";
	}	
	echo "		</table>
			</form>	
		</div>";
?>
<?php include_once 'includes/footer.inc.php'?> 
