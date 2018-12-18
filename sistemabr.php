<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>
<?php include_once 'br_conexao.php' ?>
	
	<h5 class="light center">Bem vindo ao Sistema da BR Permutas!</h5>
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
				<h5 class='light center'>Total de Empresas Ativas " . mysqli_num_rows($qry) ."</h5>"; 
		echo 		
			"</form>	
		</div>";
?>
<?php include_once 'includes/footer.inc.php'?> 
