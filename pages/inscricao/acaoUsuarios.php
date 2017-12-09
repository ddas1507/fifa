<?php
	require('manutencaoUsuarios.php');
		$oquefazer = new manutencaoUsuarios();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'formInscricao'){require('formularioCadastrarUsuarios.php');}
	if($acao == 'listarUsuarios'){$oquefazer->listarUsuarios();	require('listarUsuarios.php');}
	if($acao == 'gravarUsuarios'){$oquefazer->gravarUsuarios();require('sucessoInscricao.php');}
	if($acao == 'formularioAlterarUsuarios'){$oquefazer->formularioAlterarUsuarios();require('formularioAlterarUsuarios.php');}
	if($acao == 'detalhesUsuarios'){$oquefazer->detalhesUsuarios();require('detalhesUsuarios.php');}
	if($acao == 'gravarAlteracaoUsuarios'){$oquefazer->gravarAlteracaoUsuarios();$oquefazer->listarUsuarios();require('listarUsuarios.php');}
	if($acao == 'excluirUsuarios'){$oquefazer->excluirUsuarios();$oquefazer->listarUsuarios();require('listarUsuarios.php');}	
	if($acao == 'formularioAlterarFotoUsuarios'){$oquefazer->formularioAlterarFotoUsuarios();require('formularioAlterarFotoUsuarios.php');}
	if($acao == 'gravarAlteracaoFotoUsuarios'){$oquefazer->gravarAlteracaoFotoUsuarios();$oquefazer->listarUsuarios();require('listarUsuarios.php');}		
	if($acao == 'gravarImagens'){$oquefazer->gravarImagens();$oquefazer->detalhesUsuarios();$oquefazer->listarUsuarios();require('detalhesUsuarios-listar-imagens.php');}	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
?>