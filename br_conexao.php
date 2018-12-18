<?php
	$utf8 = header("Content-Type: text/html; charset=utf-8");
	$servidor = "host";
	$usuario = "user'";
	$senha = "pass"; 
	$bancodedados = "db"; 
	
	//$link = mysqli_connect ('bdhost0087.servidorwebfacil.com', 'brpermut_kenji', '92e2dd5bffUrso', 'brpermut_sistema');
	
	// Criando a conexão
	$conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
	// Checando a conexão
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	
?>