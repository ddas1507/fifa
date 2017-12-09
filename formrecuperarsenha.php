<html>
	<head>
		<title>Recuperar Senha</title>
			<link type="text/css" href="admin/css/estilos.css" rel="stylesheet" />
		<script>
		function mascara(src, mask){
			var i = src.value.length;
			var saida = mask.substring(0,1);
			var texto = mask.substring(i)
			
			if (texto.substring(0,1) != saida){
				src.value += texto.substring(0,1);
			}
		} 

		function proximoCampo(atual,proximo){
			if(atual.value.length >= atual.maxLength){
				document.getElementById(proximo).focus();
			}
		}
		</script>
	</head>
<body class="login-body">
<table border="0" class="login-table">
	<form method="post" action="recuperar_senha_validacao.php" >
		<tr><td align="center"><center><img src="admin/images/others/logo.png" class="login-logo" style="margin: 15px;"/></center></td></tr>
		<tr><td class="login-frase"><label >Recuperar senha de acesso</label></td></tr>
		<tr><td ><hr class="login-linha" /></td></tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td>
							<table>
								<tr><td><label class="login-labels">CPF:</label></td></tr>
								<tr><td><input class="login-inputs" type="text" name="tec_cpf" id="tec_cpf" size="30px" maxlength="14" onkeyup="proximoCampo(this, 'tec_email')" onkeypress="mascara(this, '###.###.###-##')" placeholder="Digite seu CPF" /></td></tr>
								<tr><td><label class="login-labels">E-mail:</label></td></tr>
								<tr><td><input class="login-inputs" type="text" name="tec_email" id="tec_email" size="30px" maxlength="50" placeholder="Digite seu e-mail" /></td></tr>
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
		<!--tr><td align="center"><a href="formrecuperarusuario.php">Esqueceu seu nome de us&uacute;ario?</label></a></td></tr-->
		<tr><td align="center"><a href="index.php"><label >Voltar</label></a></td></tr>
	</form>
</table>
</body>
</html>