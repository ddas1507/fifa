<?php
$usuario = $_REQUEST['tec_login'];
$email = $_REQUEST['tec_email'];

	if($usuario != '' || $senha != ''){
		require('util/conecta.php');
		
		$sql = "SELECT * FROM tbl_tecnicos where TEC_LOGIN = '".$usuario."' AND TEC_EMAIL = '".$email."' ";
			$resultado = $con->banco->Execute($sql);
			if($registro = $resultado->FetchNextObject()){
				//alerta("Dados Localizados!");
				session_register('sessao_nome_usuario');
				$_SESSION['sessao_nome_usuario'] = $registro->TEC_NOME;

				session_register('sessao_senha_usuario');
				$_SESSION['sessao_senha_usuario'] = $registro->TEC_SENHA;
				
				direciona('mostrasenha.php');
				exit;
			}
			else{
				alerta("Dados incorretos!");
				voltar();
				exit; 
			}
	}
	else{
		echo '<center>Preencha os campos de usuario e e-mail!!!</center>';
	}
?>