<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>

<?php
	
	
	// Criando a conexão
	$conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
	// Checando a conexão
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	
?>
