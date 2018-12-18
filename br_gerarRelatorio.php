<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>

<?php
	$utf8 = header("Content-Type: text/html; charset=utf-8");
	$servidor = "bdhost0087.servidorwebfacil.com";
	$usuario = "brpermut_kenji";
	$senha = "92e2dd5bffUrso"; 
	$bancodedados = "brpermut_sistema"; 
	
	//$link = mysqli_connect ('bdhost0087.servidorwebfacil.com', 'brpermut_kenji', '92e2dd5bffUrso', 'brpermut_sistema');
	
	// Criando a conexão
	$conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
	// Checando a conexão
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	
?>
