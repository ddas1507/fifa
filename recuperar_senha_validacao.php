<?php
$emaildigitado = $_POST['tec_email'];
$cpfdigitado = $_POST['tec_cpf'];

	if($emaildigitado != '' || $cpfdigitado != ''){
		require('util/conecta.php');
		
		$sql = "SELECT * FROM tbl_usuarios where USUARIO_EMAIL like '".$emaildigitado."' AND USUARIO_CPF like '".$cpfdigitado."'";
			$resultado = $con->banco->Execute($sql);
			if($registro = $resultado->FetchNextObject()){
				//alerta("Dados Localizados!");
				session_register('sessao_nome_usuario');
				$_SESSION['sessao_email_usuario'] = $registro->USUARIO_EMAIL;
				
				session_register('sessao_cpf_usuario');
				$_SESSION['sessao_cpf_usuario'] = $registro->USUARIO_CPF;	
				
				session_register('sessao_snome_usuario');
				$_SESSION['sessao_snome_usuario'] = $registro->USUARIO_SNOME;

				session_register('sessao_senha_usuario');
				$_SESSION['sessao_senha_usuario'] = $registro->USUARIO_PASS;
				
				direciona('mostrasenha.php');
				exit;
			}
			else{
				alerta("E-mail nao cadastrado!");
				voltar();
				exit; 
			}
	}
	else{
		echo '<center>Preencha o e-mail!!!</center>';
	}
?>