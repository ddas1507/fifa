<?
$usercod = $_SESSION['sessao_codigo_usuario'];
?>
<div id="menu">
    <ul class="menu">
        <li><a href="index.php" class="parent"><span>Home</span></a>
			<div>
				<ul><li><a href="index.php?tabela=detalhesUsuarios&acao=detalhesUsuarios&usercod=<? echo $usercod;?>" ><span>Minha Conta</span></a></li></ul>
				<ul><li><a href="../logoff.php"><span>Encerrar Sess&atilde;o</span></a></li></ul>
			</div>
		</li>
        <!--li><a href="index.php?acao=listarIdeias&tabela=listarIdeias"><span>Id&eacute;ias</span></a></li-->
        <li><a href="#"><span>Torneios</span></a>
			<div>
				<ul><li><a href="#"><span>Libertadores da Am&eacute;rica</span></a>
					<div>
						<ul><li><a href="index.php?acao=listarClassificacao&tabela=listarClassificacao"><span>Classifica&ccedil;&atilde;o</span></a></li></ul>
						<ul><li><a href="index.php?acao=listarPartidasLibertadores&tabela=listarPartidasLibertadores"><span>Partidas</span></a></li></ul>
					</div>				
				</li></ul>
			</div>
		</li>
        <li><a href="index.php?acao=listarRegulamento&tabela=listarRegulamento"><span>Regulamento</span></a></li>
        <li><a href="index.php?acao=listarUsuarios2&tabela=listarUsuarios2"><span>Usu&aacute;rios</span></a></li>
        <li><a href="#"><span>Transfer&ecirc;ncias</span></a>
			<div>
				<ul><li><a href="index.php?acao=listarClubes&tabela=listarClubes" ><span>Clubes Cadastrados</span></a></li></ul>
				<ul><li><a href="index.php?tabela=listarJogadores&acao=listarJogadores" ><span>Jogadores Cadastrados</span></a></li></ul>
			</div>		
		</li>
        <li><a href="#"><span>Financeiro</span></a>
			<div>
				<ul><li><a href="index.php?tabela=listarCreditos&acao=listarCreditos" ><span>Creditos</span></a></li></ul>
				<ul><li><a href="index.php?tabela=listarDebitos&acao=listarDebitos" ><span>Debitos</span></a></li></ul>
				<ul><li><a href="index.php?tabela=listarLancamentos&acao=listarLancamentos" ><span>Extrato</span></a></li></ul>
			</div>			
		</li>
    </ul>
</div>