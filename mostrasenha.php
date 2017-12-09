<?php 
session_start();
$nomerecebido   = $_SESSION['sessao_nome_usuario'];
$snomerecebido  = $_SESSION['sessao_snome_usuario'];
$cpfrecebido  = $_SESSION['sessao_cpf_usuario'];
$emailrecebido  = $_SESSION['sessao_email_usuario'];
$senharecebida  = $_SESSION['sessao_senha_usuario'];
$date 			= date("d/m/Y - h:i:s");
?>
<html>
	<head>
		<title>Diones Jobs - FIFA 2013</title>
			<link type="text/css" href="admin/css/estilos.css" rel="stylesheet" />
	</head>
<body class="login-body">
<table border="0" class="login-table">
	<form method="post" action="index.php" >
		<tr><td align="center"><center><img src="admin/images/others/logo.png" class="login-logo" style="margin: 15px;"/></center></td></tr>
		<tr><td class="login-frase"><label>Resgate de Senha<br /></label></td></tr>
		<tr><td class="login-frase">
		<label>
		<?php
		echo "
			<b>Consulta realizada em:</b> $date <br /><br />
			<b>Nome:</b> $nomerecebido $snomerecebido <br />
			<b>CPF:</b> $cpfrecebido <br />
			<b>E-mail:</b> $emailrecebido <br />
			<b>Senha de acesso é:</b> ".base64_decode($senharecebida)."<br />";
		?>
		</label>
		</td></tr>
		<tr><td ><hr class="login-linha" /></td></tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td>
							<table width="100%">
								<tr>
									<td align="center">
										<input 
											class="bt-login" onmouseover="this.className='bt-loginOver'" onmouseout="this.className='bt-login'"
											type="submit" value="Voltar"
										/>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>

		</tr>
		<!--tr><td align="center"><a href="formrecuperarusuario.php">Esqueceu seu nome de us&uacute;ario?</label></a></td></tr-->
		<tr><td align="center"><a href="#"><label >&nbsp;</label></a></td></tr>
	</form>
</table>
</body>
</html>