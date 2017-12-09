<?php 
	  require('util/conecta.php');
		  $tabela = $_REQUEST['tabela'];

/*INICIO - Ideias ###########################################################################################################*/
		if($tabela == "formularioCadastrarIdeias") require('pages/ideias/acaoIdeias.php');
		if($tabela == "listarIdeias") require('pages/ideias/acaoIdeias.php');
		if($tabela == "gravarIdeias") require('pages/ideias/acaoIdeias.php');
		if($tabela == "formularioAlterarIdeias") require('pages/ideias/acaoIdeias.php');
		if($tabela == "gravarAlteracaoIdeias") require('pages/ideias/acaoIdeias.php');
		if($tabela == "excluirIdeias") require('pages/ideias/acaoIdeias.php');
		if($tabela == "detalhesIdeias") require('pages/ideias/acaoIdeias.php');
		if($tabela == "votarGosteiIdeias") require('pages/ideias/acaoIdeias.php');
		if($tabela == "votarNaoGosteiIdeias") require('pages/ideias/acaoIdeias.php');
/*FINAL  - Ideias ###########################################################################################################*/

/*INICIO  - Inscricao ########################################################################################################*/
		if($tabela == "formInscricao") require('pages/inscricao/acaoUsuarios.php');
		if($tabela == "listarUsuarios") require('pages/inscricao/acaoUsuarios.php');
		if($tabela == "gravarUsuarios") require('pages/inscricao/acaoUsuarios.php');
		if($tabela == "formularioAlterarUsuarios") require('pages/inscricao/acaoUsuarios.php');
		if($tabela == "detalhesUsuarios") require('pages/inscricao/acaoUsuarios.php');
		if($tabela == "gravarAlteracaoUsuarios") require('pages/inscricao/acaoUsuarios.php');
		if($tabela == "excluirUsuarios") require('pages/inscricao/acaoUsuarios.php');
		if($tabela == "formularioAlterarFotoUsuarios") require('pages/inscricao/acaoUsuarios.php');
		if($tabela == "gravarAlteracaoFotoUsuarios") require('pages/inscricao/acaoUsuarios.php');
		if($tabela == "gravarImagens") require('pages/inscricao/acaoUsuarios.php');

/*FINAL  - Inscricao ########################################################################################################*/

/*INICIO - Ideias ###########################################################################################################*/
		if($tabela == "formularioLogin") require('formLogin.php');
/*FINAL  - Ideias ###########################################################################################################*/
		else
			require('content/principal.php');
?>	