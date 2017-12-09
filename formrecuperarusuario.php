<html>
	<head>
		<title>Recuperar Usu&aacute;rio</title>
			<link type="text/css" href="admin/css/estilos.css" rel="stylesheet" />
	</head>
<body class="login-body">
<table border="0" class="login-table">
	<form method="post" action="recuperar_usuario_validacao.php" >
		<tr><td align="center"><center><img src="admin/images/others/.png" class="login-logo" style="margin: 15px;"/></center></td></tr>
		<tr><td class="login-frase"><label >Recuperar nome de usu&aacute;rio</label></td></tr>
		<tr><td ><hr class="login-linha" /></td></tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td>
							<table>
								<tr><td><label class="login-labels">E-mail:</label></td></tr>
								<tr><td><input class="login-inputs" type="text" name="tec_email" id="tec_email" size="30px" maxlength="50" placeholder="Digite seu e-mail" /></td></tr>
								<tr><td><label class="login-labels">Senha:</label></td></tr>
								<tr><td><input class="login-inputs" type="password" name="tec_senha" id="tec_senha" size="30px" maxlength="50" placeholder="Digite sua senha" /></td></tr>
							</table>
						</td>
						<td>
							<table>
								<tr>
									<td align="center">
										<input 
											class="bt-login" onmouseover="this.className='bt-loginOver'" onmouseout="this.className='bt-login'"
											type="submit" value="BUSCAR"
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
		<tr><td align="center"><a href="index.php"><label >Voltar</label></a></td></tr>
	</form>
</table>
</body>
</html>