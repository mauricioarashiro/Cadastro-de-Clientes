<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>

	<!-- Formulário de Cadastro -->
	<div class="row container">
		<p>&nbsp;</p>
		<form action="cadastrar.php" method="post" class="col s12">
		<fieldset class="formulario">
			<legend><img src="imagens/transacao.png" alt="(imagem)" width="100"></legend>
			<h5 class="light center">Lançamento das Transações</h5>
			
			<!-- CAMPO EMPRESA VENDEDORA -->
			<div>
				<div class="input-field col s4">
					<select class="browser-default">
						<option value="" disabled selected>Empresa Vendedora</option>
						<option value="1">Empresa 01</option>
						<option value="2">Empresa 02</option>
						<option value="3">Empresa 03</option>
					</select>
				</div>
				<div class="input-field col s4">
					<select class="browser-default">
						<option value="" disabled selected>Empresa Compradora</option>
						<option value="1">Empresa 01</option>
						<option value="2">Empresa 02</option>
						<option value="3">Empresa 03</option>
					</select>
				</div>
				<div class="input-field col s4" >
					<i class="material-icons prefix">shopping_cart</i>
					<input type="text" placeholder="valor" name="valor" maxlength="60" required></input>
				</div>
			</div>
			<div class="row">
				<!-- DESCRIÇÃO DA TRANSAÇÃO -->	
				<div class="input-field col s12" >
					<i class="material-icons prefix">shopping_cart</i>
					<input type="text" placeholder="Descrição da Transação" name="descricao" maxlength="200" required></input>
				</div>
				
			
			
			<!-- BOTÕES DE ENVIO -->
			<div class="input-field col s12">
			<input type="submit" value="cadastrar" class="btn blue">
			<input type="reset" value="limpar" class="btn red">
			</div>
		</fieldset>
		<a href="sistemabr.php"> | voltar | </a>
		</form>
	</div>
<?php include_once 'includes/footer.inc.php'?> 