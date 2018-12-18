<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>
<?php include_once 'br_conexao.php' ?>

<?php
	
	//Iniciando a consulta (query) ao banco de dados:
	$sql = "select * from tb_empresa";
	$qry = @mysqli_query($conn, $sql);
	
	//fazendo a tabela
		echo
		"<table border=1>
			<tr>
				<td>Razão Social</td>
				<td>Nome de Fantasia</td>
				<td>CNPJ</td>
				<td>Site</td>
			</tr>";
	
	while($linha = mysqli_fetch_array($qry)){
		echo "<tr>
				<td>" .$linha["razaosocial"] . "</td>
				<td>" .$linha["nomefantasia"] . "</td>
				<td>" .$linha["cnpj"] . "</td>
				<td>" .$linha["site"] . "</td>
			</tr>";
	}	

	echo "<pre>";
	print_r($linha);
	echo "</pre>";
	
	
?>	
<?php include_once 'includes/footer.inc.php'?> 
