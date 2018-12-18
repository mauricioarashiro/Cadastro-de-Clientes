<?php
	session_start();
	include_once 'br_conexao.php';
	//$razaosocial  = $_POST['razaosocial'];
	$razaosocial  = filter_input(INPUT_POST,'razaosocial', FILTER_SANITIZE_SPECIAL_CHARS);
	$nomefantasia = filter_input(INPUT_POST,'nomefantasia', FILTER_SANITIZE_SPECIAL_CHARS);
	$cnpj         = filter_input(INPUT_POST,'cnpj', FILTER_SANITIZE_SPECIAL_CHARS);
	$site         = filter_input(INPUT_POST,'site', FILTER_SANITIZE_SPECIAL_CHARS);
	$endereco     = filter_input(INPUT_POST,'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
	$telefone     = filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_NUMBER_INT);
	$ramo         = filter_input(INPUT_POST,'ramo', FILTER_SANITIZE_SPECIAL_CHARS);
	$gerente      = filter_input(INPUT_POST,'gerente', FILTER_SANITIZE_SPECIAL_CHARS);
	$franquia     = filter_input(INPUT_POST,'franquia', FILTER_SANITIZE_SPECIAL_CHARS);
	$plano        = filter_input(INPUT_POST,'plano', FILTER_SANITIZE_SPECIAL_CHARS);
	$nome        = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$cpf          = filter_input(INPUT_POST,'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
	$email        = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);
	
	//teste para iserção dos dados
	$sql = "INSERT INTO tb_empresa (razaosocial, nomefantasia, cnpj, site)
VALUES ('$razaosocial', '$nomefantasia', '$cnpj', '$site')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully | <a href='http://www.brpermutas.com.br/sistemabr_cadastro.php'>Voltar</a>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	
	/*Ferramenta para puxar os e-mails cadastrados e jogando dentro de uma variável
	$querySelect = $link->query("select email from tb_socio");
	$array_email = [];
	
	while($emails = $querySelect->fetch_assoc()):
		$emails_existentes = $emails['email'];
		array_push($array_email, $emails_existentes);
	endwhile;
	
	//Verificar se o e-mail informado já está cadastrado.
	if(in_array($email, $array_email)):
		$_SESSION['msg'] = "<p class='center red-text'>".'Já existe um cliente cadastrado com esse e-mail'."</p>";
		header("Location:../");
	else:
		$queryInsert = $link->query("insert into tb_socio values(default, '$nome', '$cpf', '$email')");
		$affected_rows = mysqli_affected_rows($link);
		
		if($affected_rows > 0):
			$_SESSION['msg'] = "<p class='center green-text'>". 'Cadastro efetuado com sucesso!'."</p>";
			header("Location:../");
	endif;
	Fim da ferramenta para verificar a existência dos e-mails e cadastro
	*/
	
?>