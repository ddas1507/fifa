<?php 
	  require('../util/conecta.php');
		  echo 'Tabela: '.$tabela = $_REQUEST['tabela'];

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

/*INICIO - Regulamento ###########################################################################################################*/
		if($tabela == "formularioCadastrarRegulamento") require('pages/regulamento/acaoRegulamento.php');
		if($tabela == "listarRegulamento") require('pages/regulamento/acaoRegulamento.php');
		if($tabela == "gravarRegulamento") require('pages/regulamento/acaoRegulamento.php');
		if($tabela == "formularioAlterarRegulamento") require('pages/regulamento/acaoRegulamento.php');
		if($tabela == "gravarAlteracaoRegulamento") require('pages/regulamento/acaoRegulamento.php');
		if($tabela == "excluirRegulamento") require('pages/regulamento/acaoRegulamento.php');
		if($tabela == "detalhesRegulamento") require('pages/regulamento/acaoRegulamento.php');
		if($tabela == "votarGosteiRegulamento") require('pages/regulamento/acaoRegulamento.php');
		if($tabela == "votarNaoGosteiRegulamento") require('pages/regulamento/acaoRegulamento.php');
/*FINAL  - Regulamento ###########################################################################################################*/

/*INICIO - Usuarios #########################################################################################################*/
		if($tabela == "formularioCadastrarUsuarios") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "listarUsuarios2") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "escolherTimeLibertadores") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "selecionarClubeLibertadores") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "escolherTimeChampions") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "selecionarClubeChampions") require('pages/usuarios/acaoUsuarios.php');		
		if($tabela == "listarClassificacao") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "zerarTabelaClassificacao") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "gravarUsuarios") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "formularioAlterarUsuarios") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "formularioAlterarUsuarios") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "gravarAlteracaoUsuarios") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "excluirUsuarios") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "detalhesUsuarios") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "detalhesUsuariosLibertadores") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "detalhesUsuariosChampions") require('pages/usuarios/acaoUsuarios.php');
		if($tabela == "formularioAlterarMusicaLibertadores") require('pages/usuarios/acaoUsuarios.php');	
		if($tabela == "formularioAlterarMusicaChampions") require('pages/usuarios/acaoUsuarios.php');	
		if($tabela == "formularioAlterarFotoUsuarios") require('pages/usuarios/acaoUsuarios.php');		
		if($tabela == "formularioAlterarFotoFundoUsuarios") require('pages/usuarios/acaoUsuarios.php');		
		if($tabela == "gravarAlteracaoMusicaUsuariosLibertadores") require('pages/usuarios/acaoUsuarios.php');		
		if($tabela == "gravarAlteracaoMusicaUsuariosChampions") require('pages/usuarios/acaoUsuarios.php');		
		if($tabela == "gravarAlteracaoFotoUsuarios") require('pages/usuarios/acaoUsuarios.php');		
		if($tabela == "gravarAlteracaoFotoFundoUsuarios") require('pages/usuarios/acaoUsuarios.php');		
/*FINAL  - Usuarios ###########################################################################################################*/

/*INICIO - clubes #########################################################################################################*/
		if($tabela == "formularioCadastrarClubes") require('pages/clubes/acaoClubes.php');
		if($tabela == "listarClubes") require('pages/clubes/acaoClubes.php');
		if($tabela == "gravarClubes") require('pages/clubes/acaoClubes.php');
		if($tabela == "formularioAlterarClubes") require('pages/clubes/acaoClubes.php');
		if($tabela == "gravarAlteracaoClubes") require('pages/clubes/acaoClubes.php');
		if($tabela == "excluirClubes") require('pages/clubes/acaoClubes.php');
		if($tabela == "detalhesClubes") require('pages/clubes/acaoClubes.php');
		if($tabela == "formularioAlterarFotoClubes") require('pages/clubes/acaoClubes.php');		
		if($tabela == "gravarAlteracaoFotoClubes") require('pages/clubes/acaoClubes.php');		
/*FINAL  - clubes ###########################################################################################################*/

/*INICIO - Debitos #########################################################################################################*/
		if($tabela == "formularioCadastrarDebitos") require('pages/debitos/acaoDebitos.php');
		if($tabela == "listarDebitos") require('pages/debitos/acaoDebitos.php');
		if($tabela == "gravarDebitos") require('pages/debitos/acaoDebitos.php');
		if($tabela == "formularioAlterarDebitos") require('pages/debitos/acaoDebitos.php');
		if($tabela == "gravarAlteracaoDebitos") require('pages/debitos/acaoDebitos.php');
		if($tabela == "excluirDebitos") require('pages/debitos/acaoDebitos.php');
		if($tabela == "detalhesDebitos") require('pages/debitos/acaoDebitos.php');
		if($tabela == "formularioAlterarFotoDebitos") require('pages/debitos/acaoDebitos.php');
		if($tabela == "gravarAlteracaoFotoDebitos") require('pages/debitos/acaoDebitos.php');
/*FINAL  - Debitos ###########################################################################################################*/

/*INICIO - Creditos #########################################################################################################*/
		if($tabela == "formularioCadastrarCreditos") require('pages/creditos/acaoCreditos.php');
		if($tabela == "listarCreditos") require('pages/creditos/acaoCreditos.php');
		if($tabela == "gravarCreditos") require('pages/creditos/acaoCreditos.php');
		if($tabela == "formularioAlterarCreditos") require('pages/creditos/acaoCreditos.php');
		if($tabela == "gravarAlteracaoCreditos") require('pages/creditos/acaoCreditos.php');
		if($tabela == "excluirCreditos") require('pages/creditos/acaoCreditos.php');
		if($tabela == "detalhesCreditos") require('pages/creditos/acaoCreditos.php');
		if($tabela == "formularioAlterarFotoCreditos") require('pages/creditos/acaoCreditos.php');
		if($tabela == "gravarAlteracaoFotoCreditos") require('pages/creditos/acaoCreditos.php');
/*FINAL  - Creditos ###########################################################################################################*/

/*INICIO - Lancamentos #########################################################################################################*/
		if($tabela == "listarLancamentos") require('pages/lancamentos/acaoLancamentos.php');
/*FINAL  - Lancamentos ###########################################################################################################*/

/*INICIO - jogadores #########################################################################################################*/
		if($tabela == "formularioCadastrarJogadores") require('pages/jogadores/acaoJogadores.php');
		if($tabela == "listarJogadores") require('pages/jogadores/acaoJogadores.php');		
		if($tabela == "gravarJogadores") require('pages/jogadores/acaoJogadores.php');
		if($tabela == "formularioAlterarJogadores") require('pages/jogadores/acaoJogadores.php');
		if($tabela == "gravarAlteracaoJogadores") require('pages/jogadores/acaoJogadores.php');
		if($tabela == "excluirJogadores") require('pages/jogadores/acaoJogadores.php');
		if($tabela == "detalhesJogador") require('pages/jogadores/acaoJogadores.php');
		if($tabela == "formularioAlterarFotoJogadores") require('pages/jogadores/acaoJogadores.php');		
		if($tabela == "gravarAlteracaoFotoJogadores") require('pages/jogadores/acaoJogadores.php');		
		if($tabela == "somarGol") require('pages/jogadores/acaoJogadores.php');		
		if($tabela == "somarCartaoAmareloIndividual") require('pages/jogadores/acaoJogadores.php');		
		if($tabela == "somarCartaoVermelhoIndividual") require('pages/jogadores/acaoJogadores.php');		
		if($tabela == "zerarCartoesAmarelosindividuais") require('pages/jogadores/acaoJogadores.php');		
		if($tabela == "zerarCartoesVermelhosindividuais") require('pages/jogadores/acaoJogadores.php');		
/*FINAL  - jogadores ###########################################################################################################*/

/*INICIO - IMAGENS ###########################################################################################################*/
		if($tabela == "listarImagens") require('imagens/acaoImagens.php');
		if($tabela == "formularioCadastrarImagens") require('imagens/acaoImagens.php');
		/*if($tabela == "gravarImagens") require('imagens/acaoImagens.php');*/
		if($tabela == "gravarImagens") require('usuarios/acaoUsuarios.php');
		if($tabela == "excluirImagens") require('imagens/acaoImagens.php');
/*FINAL  - IMAGENS ###########################################################################################################*/

/*INICIO - Partidas Libertadores #########################################################################################################*/
		if($tabela == "formularioCadastrarPartidasp1") require('pages/partidas/acaoPartidas.php');
		if($tabela == "formularioCadastrarPartidasp2") require('pages/partidas/acaoPartidas.php');
		if($tabela == "formularioCadastrarPartidasp3") require('pages/partidas/acaoPartidas.php');
		if($tabela == "formularioCadastrarPartidasp4") require('pages/partidas/acaoPartidas.php');
		if($tabela == "listarPartidasLibertadores") require('pages/partidas/acaoPartidas.php');
		if($tabela == "gravarPartidas") require('pages/partidas/acaoPartidas.php');
		if($tabela == "formularioAlterarPartidas") require('pages/partidas/acaoPartidas.php');
		if($tabela == "formularioAlterarPartidasDatasHorarios") require('pages/partidas/acaoPartidas.php');
		if($tabela == "gravarAlteracaoPartidas") require('pages/partidas/acaoPartidas.php');
		if($tabela == "gravarAlteracaoPartidasDatasHorarios") require('pages/partidas/acaoPartidas.php');
		if($tabela == "excluirPartidas") require('pages/partidas/acaoPartidas.php');
		if($tabela == "detalhesPartidas") require('pages/partidas/acaoPartidas.php');
		if($tabela == "formularioAlterarFotoPartidas") require('pages/partidas/acaoPartidas.php');
		if($tabela == "gravarAlteracaoFotoPartidas") require('pages/partidas/acaoPartidas.php');
/*FINAL  - Partidas Libertadores ###########################################################################################################*/
			
		else
			require('content/principal.php');
?>	