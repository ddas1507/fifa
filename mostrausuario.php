<?php 
session_start();
$nome = $_SESSION['sessao_nome_usuario'];
$login = $_SESSION['sessao_login_usuario'];

?>
<html>
	<head>
		<title>Usu&aacute;rio Localizada</title>
			<link type="text/css" href="admin/css/estilos.css" rel="stylesheet" />
	</head>
<body class="login-body">
<table border="0" class="login-table">
	<form method="post" action="index.php" >
		<tr><td align="center"><center><img src="admin/images/others/.png" class="login-logo" style="margin: 15px;"/></center></td></tr>
		<tr><td class="login-frase"><label >Ol&aacute;&nbsp;<?php echo '<b>'.$nome.'</b>';?></label></td></tr>
		<tr><td ><hr class="login-linha" /></td></tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td>
							<table>
								<tr><td><label class="login-labels">Seu Login:</label></td></tr>
								<tr><td><input class="login-inputs" type="text" name="tec_login" id="tec_login" size="30px" maxlength="15" value="<?php echo $login;?>" disabled="disabled" /></td></tr>
							</table>
						</td>
						<td>
							<table>
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
		<tr><td align="center"><a href="formrecuperarsenha.php">Esqueceu sua senha?</label></a></td></tr>
		<tr><td align="center"><a href="#"><label >&nbsp;</label></a></td></tr>
	</form>
</table>
</body>
</html>