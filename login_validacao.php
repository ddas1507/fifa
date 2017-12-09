<?php
	session_start();
	
$email = $_REQUEST['usuario_email'];
$senha = base64_encode($_REQUEST['usuario_pass']);

	if($email != '' || $senha != ''){
		require('util/conecta.php');
		
		$sql = "SELECT * FROM tbl_usuarios where USUARIO_EMAIL = '".$email."' AND USUARIO_PASS = '".$senha."' ";
			$resultado = $con->banco->Execute($sql);
			if($registro = $resultado->FetchNextObject()){
				//alerta("Acesso Autenticado!");
				
				session_register('sessao_codigo_usuario');
				$_SESSION['sessao_codigo_usuario'] = $registro->USUARIO_CODIGO;
				
				session_register('sessao_nome_usuario');
				$_SESSION['sessao_nome_usuario'] = $registro->USUARIO_NOME;
				
				session_register('sessao_snome_usuario');
				$_SESSION['sessao_snome_usuario'] = $registro->USUARIO_SNOME;

				session_register('sessao_nivel_usuario');
				$_SESSION['sessao_nivel_usuario'] = $registro->USUARIO_NIVEL;
				
				direciona('admin/index.php');
				exit;				
			}
			else{
				alerta("Dados incorretos, Por favor verificar!");
				voltar();
				exit; 
			}
	}
	else{
		echo '<center>Preencha os campos de usuario e senha!!!</center>';
	}
?>