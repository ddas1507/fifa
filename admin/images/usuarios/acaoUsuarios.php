<?php
	require('manutencaoUsuarios.php');
		$oquefazer = new manutencaoUsuarios();
			echo 'Acao: '.$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarUsuarios'){
		$oquefazer->listarUsuarios();
		require('listarUsuarios.php');
	}
	
	if($acao == 'formularioCadastrarUsuarios'){
		require('formularioCadastrarUsuarios.php');
	}

	if($acao == 'gravarUsuarios'){
		$oquefazer->gravarUsuarios();
		$oquefazer->listarUsuarios();
		require('listarUsuarios.php');
	}
	
	if($acao == 'formularioAlterarUsuarios'){
		$oquefazer->formularioAlterarUsuarios();
		require('formularioAlterarUsuarios.php');
	}
	
	if($acao == 'detalhesUsuarios'){
		$oquefazer->detalhesUsuarios();
		require('detalhesUsuarios.php');
	}
	
	if($acao == 'gravarAlteracaoUsuarios'){
		$oquefazer->gravarAlteracaoUsuarios();
		$oquefazer->detalhesUsuarios();
		require('detalhesUsuarios.php');
	}
	
	if($acao == 'excluirUsuarios'){
		$oquefazer->excluirUsuarios();
		$oquefazer->listarUsuarios();
		require('listarUsuarios.php');
	}	

	if($acao == 'formularioAlterarFotoUsuarios'){
		$oquefazer->formularioAlterarFotoUsuarios();
		require('formularioAlterarFotoUsuarios.php');
	}
	
	if($acao == 'formularioAlterarFotoFundoUsuarios'){
		$oquefazer->formularioAlterarFotoFundoUsuarios();
		require('formularioAlterarFotoFundoUsuarios.php');
	}
	
	if($acao == 'gravarAlteracaoFotoUsuarios'){
		$oquefazer->gravarAlteracaoFotoUsuarios();
		$oquefazer->listarUsuarios();
		require('listarUsuarios.php');
	}
	
	if($acao == 'gravarAlteracaoFotoFundoUsuarios'){
		$oquefazer->gravarAlteracaoFotoFundoUsuarios();
		$oquefazer->listarUsuarios();
		require('listarUsuarios.php');
	}		

	if($acao == 'gravarImagens'){
		$oquefazer->gravarImagens();
		$oquefazer->detalhesUsuarios();
		$oquefazer->listarUsuarios();
		require('detalhesUsuarios-listar-imagens.php');
	}	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
?>