<?php
$email = $_REQUEST['tec_email'];
$senha = $_REQUEST['tec_senha'];

	if($email != '' || $senha != ''){
		require('util/conecta.php');
		
		$sql = "SELECT * FROM tbl_usuarios where USUARIO_EMAIL = '".$email."' AND USUARIO_PASS = '".$senha."' ";
			$resultado = $con->banco->Execute($sql);
			if($registro = $resultado->FetchNextObject()){
				//alerta("Dados Localizados!");
				session_register('sessao_nome_usuario');
				$_SESSION['sessao_nome_usuario'] = $registro->USUARIO_NOME;

				session_register('sessao_login_usuario');
				$_SESSION['sessao_login_usuario'] = $registro->USUARIO_EMAIL;
				
				direciona('mostrausuario.php');
				exit;
			}
			else{
				alerta("Dados incorretos!");
				voltar();
				exit; 
			}
	}
	else{
		echo '<center>Preencha os campos de e-mail e senha!!!</center>';
	}
?>