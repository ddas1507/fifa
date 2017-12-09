<?php
	session_start();
	if(!$_SESSION['sessao_codigo_usuario']){
		require('../util/funcoes.php');
		direciona('../index.php');
	}
	else
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Campeonato Imperial - FIFA 2013</title>
		<?php require('head/head.php');?>
	</head>
	<body style="margin: 0; font-family: Arial;">
		<table border="0" style=" width:100%; margin: 0 auto; border-collapse:collapse; ">
			<tr><td colspan="3"><?php require('header/cabecalho.php');?></td></tr>
			<tr>
				<td width="5%" valign="top">&nbsp;</td>
				<td width="90%" align="center"><?php require('nav/index.php');?></td>
				<td width="5%" valign="top">&nbsp;</td>
			</tr>			
			<tr>
				<td width="5%" valign="top">&nbsp;</td>
				<td width="90%" align="center"><?php require('direcoes.php');?></td>
				<td width="5%" valign="top">&nbsp;</td>
			</tr>
			<tr>
			<td width="5%" valign="top">&nbsp;</td>
			<td colspan="3" align="center"><?php require('footer/rodape.php');?></td>
			<td width="5%" valign="top">&nbsp;</td>
			</tr>
		</table>
	</body>
</html>
<?php
	}
?>