<?php 
	session_start();
	$codigo = $_SESSION['sessao_codigo_usuario'];
	$nome = $_SESSION['sessao_nome_usuario'];
	$snome = $_SESSION['sessao_snome_usuario'];
?>
<table style="border-collapse:collapse; border:0px solid; margin: 0 auto;" >
	<tr>
		<td>
			<a href="index.php">
				<img src="images/header/fifa2013.png" border="0" />
			</a>
		</td>
	</tr>
	<tr>
		<td style=" position: relative; float: right; left: 285px; color: #999; ">
		<?php echo 'Seja Bem-vindo '.$nome.' '.$snome.'!';?>
		</td>
	</tr>
</table>