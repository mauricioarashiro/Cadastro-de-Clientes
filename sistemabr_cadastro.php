<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>
 
	<!-- Formulário de Cadastro -->
	<div class="row container">
		<p>&nbsp;</p>
		<form action="br_cadastrar.php" method="post" class="col s12">
		<fieldset class="formulario">
			<legend><img src="imagens/avatar_empresa.png" alt="(imagem)" width="100"></legend>
			<h5 class="light center">Cadastro de Empresas</h5>
			
			<!-- CAMPO RAZÃO SOCIAL -->
			<div class="input-field col s12">
				<i class="material-icons prefix">business</i>
				<input placeholder="Razão Social" type="text" name="razaosocial" maxlength="60" class="validate" required autofocus></input>
			</div>
				
			<div class="row">
				<!-- CAMPO NOME DE FANTASIA -->	
				<div class="input-field col s7">
					<i class="material-icons prefix">flag</i>
					<input type="text" placeholder="Nome de Fantasia" name="nomefantasia" maxlength="60" required></input>
				</div>
				<!-- CAMPO NOME DE CNPJ -->
				<div class="input-field col s5">
					<i class="material-icons prefix">note</i>
					<input type="text" placeholder="CNPJ" name="cnpj" maxlength="60" required></input>
				</div>
			</div>
			<!-- CAMPO SITE-->
			<div class="input-field col s12">
				<i class="material-icons prefix">link</i>
				<input type="text" placeholder="Site" name="site" maxlength="60" ></input>
			</div>
			
			<!-- CAMPO ENDEREÇO -->
			<div class="input-field col s12">
				<i class="material-icons prefix">edit_location</i>
				<input type="text" placeholder="Endereço" name="endereco" maxlength="60" ></input>
			</div>
			
			<div class="row">
				<!-- CAMPO TELEFONE -->
				<div class="input-field col s4">
					<i class="material-icons prefix">contact_phone</i>
					<input type="text" placeholder="Telefone" name="telefone" maxlength="60" ></input>
				</div>
				
				<!-- CAMPO RAMO DE ATIVIDADE com SELECT-->
			
				<div class="input-field col s4">
				<select class="browser-default" name="ramo">
					<option value="" disabled selected>Principal Ramo de Atividade</option>
					<option value="1">Bar e Restaurantes</option>
					<option value="2">Gráfica e papelaria</option>
					<option value="3">Jóias, semi-jóias e Bijouterias</option>
				</select>
				</div>
				<!-- CAMPO GERENTE DA BR PERMUTAS -->
				<div class="input-field col s4">
				<select class="browser-default" name="gerente">
					<option value="" disabled selected>Gerente</option>
					<option value="1">Maurício</option>
					<option value="2">Fábio</option>
					<option value="3">Ricardo</option>
					<option value="4">Vinícius</option>
				</select>
				</div>
			</div>
			<div class="row">	
				<!-- CAMPO QUAL FRANQUIA 
				<i class="material-icons prefix">school</i>
				-->
				<div class="input-field col s6">
				<select class="browser-default" name="franquia">
					<option value="" disabled selected>Franquia</option>
					<option value="1">Franqueador</option>
					<option value="2">Franquia SBC 01</option>
					<option value="3">Franquia SBC 02</option>
					<option value="4">Franquia SBC 03</option>
					<option value="5">Franquia Ilha Comprida</option>
					<option value="6">Franquia SP - Sta Ifigênia</option>
				</select>
				</div>
				<!-- CAMPO PLANO SELECIONADO -->
				<div class="input-field col s6">
				<select class="browser-default" name="plano">
					<option value="" disabled selected>Plano Selecionado</option>
					<option value="1">8% BrPermutas</option>
					<option value="2">10% BrPermutas</option>
					<option value="3">12% BrPermutas</option>
					<option value="4">Funcionário BRPermutas</option>
				</select>
				</div>
			</div>	
			<!-- CAMPO SÓCIO -->
			<div class="input-field col s12">
				<i class="material-icons prefix">supervisor_account</i>
				<input type="text" placeholder="Nome do Sócio" name="nome" maxlength="60" ></input>
			</div>
			<div>	
				<!-- CAMPO CPF do SÓCIO -->
				<div class="input-field col s6">
					<i class="material-icons prefix">filter_9_plus</i>
					<input type="text" placeholder="CPF do Sócio" name="cpf" maxlength="60" ></input>
				</div>
				<!-- CAMPO e-mail do SÓCIO -->
				<div class="input-field col s6">
					<i class="material-icons prefix">cloud_done</i>
					<input type="text" placeholder="E-mail do Sócio" name="email" maxlength="60" ></input>
				</div>
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