<table border="0" align="center">
	<form method="post" action="login_validacao.php" >
		<tr><td ><label >Seja bem-vindo! Por favor, realize a autentica&ccedil;&atilde;o</label></td></tr>
		<tr><td ><hr /></td></tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td>
							<table>
								<tr><td><label class="login-labels">E-mail:</label></td></tr>
								<tr><td><input class="login-inputs" type="text" name="usuario_email" id="usuario_email" size="30px" maxlength="30" placeholder="Digite seu usu&aacute;rio" autofocus="autofocus"/></td></tr>
								<tr><td><label class="login-labels">Senha:</label></td></tr>
								<tr><td><input class="login-inputs" type="password" name="usuario_pass" id="usuario_pass" size="30px" maxlength="30" placeholder="Digite sua senha" /></td></tr>
							</table>
						</td>
						<td>
							<table>
								<tr>
									<td align="center">
										<input 
											class="bt-login" onmouseover="this.className='bt-loginOver'" onmouseout="this.className='bt-login'"
											type="submit" value="LOGIN"
										/>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>

		</tr>
		<tr><td align="center"><a href="formrecuperarsenha.php">Esqueceu sua senha?</a></td></tr>
		<tr><td align="center"><label >&nbsp;</label></td></tr>
	</form>
</table>