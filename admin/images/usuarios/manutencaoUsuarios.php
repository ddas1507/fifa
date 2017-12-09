<?php
	class manutencaoUsuarios{
		var $resultado;
		var $registros;

		function manutencaoUsuarios(){
			$this->con = new conexao();
		}

		function listarUsuarios(){
			$sql = "select * FROM tbl_usuarios
			ORDER BY USUARIO_NOME ASC";
			$this->resultado = $this->con->banco->Execute($sql);			
		}
		
		function listarPartidas(){
			$sql = "select * FROM tbl_partidas
			ORDER BY PART_RODADA ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}		

		function excluirUsuarios(){
			$sql = "delete from tbl_usuarios where USUARIO_CODIGO =".$_REQUEST['usercod'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Usuario excluido  com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o usuario!");
						return false;
				}
		}

		function formularioAlterarUsuarios(){
			$sql = "select * from tbl_usuarios where USUARIO_CODIGO =".$_REQUEST['usercod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesUsuarios(){
			$sql = "select * from tbl_usuarios where USUARIO_CODIGO =".$_REQUEST['usercod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}
		
		function detalhesUsuarios2(){
			//$sql = "select * from tbl_usuarios where USUARIO_CODIGO =".$_SESSION['sessao_codigo_usuario'];
			$sql = "select * from tbl_usuarios where USUARIO_CODIGO =".$_REQUEST['usercod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoUsuarios(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";
		$nivel = 2;

			$sql = "update tbl_usuarios set 
			USUARIO_NIVEL = '".$nivel."',
			USUARIO_NOME = '".$_POST['usuario_nome']."',
			USUARIO_SNOME = '".$_POST['usuario_snome']."',
			USUARIO_CPF = '".$_POST['usuario_cpf']."',
			USUARIO_EMAIL = '".$_POST['usuario_email']."',
			USUARIO_CEL = '".$_POST['usuario_cel']."',
			USUARIO_DTALT = '".$data_hora."'

			where USUARIO_CODIGO = ".$_POST['usercod'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Usuario alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar a seu usuario!");
					return false;
			}
		}

		function gravarUsuarios(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into tbl_usuarios
			(
				USUARIO_NIVEL,
				USUARIO_NOME,
				USUARIO_SNOME,
				USUARIO_CPF,
				USUARIO_EMAIL,
				USUARIO_PASS,
				USUARIO_CEL,
				USUARIO_DTCAD
			)	
			values 	
			(
				'".$_REQUEST['usuario_nivel']."',
				'".$_REQUEST['usuario_nome']."',
				'".$_REQUEST['usuario_snome']."',
				'".$_REQUEST['usuario_cpf']."',
				'".$_REQUEST['usuario_email']."',
				'".base64_encode($_REQUEST['usuario_pass'])."',
				'".$_REQUEST['usuario_cel']."',
				'".$data_hora."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Usuario cadastrado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar seu usuario!");
						return false;
				}
		}

		function formularioAlterarFotoUsuarios(){
			$sql = "select * from tbl_usuarios where USUARIO_CODIGO =".$_REQUEST['usercod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}
		
		function formularioAlterarFotoFundoUsuarios(){
			$sql = "select * from tbl_usuarios where USUARIO_CODIGO =".$_REQUEST['usercod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		
		function gravarImagens(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['img_descricao']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['img_descricao']['tmp_name'],"images/usuarios/".$arquivo)){

					$sql = "insert into tbl_imagens
					(
						IMG_DESCRICAO,
						USUARIO_CODIGO,
						IMG_DTCAD
					)	
					values 	
					(
					'".$arquivo."',
					'".$_REQUEST['usercod']."',
					'".$data_hora."'
					)";

					if($this->resultado = $this->con->banco->Execute($sql)){
						alerta("Imagem cadastrada com sucesso!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar cadastrar a imagem!");
							return false;
					}
				
				}
			}
		}		
		function gravarAlteracaoFotoUsuarios(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['usuario_img']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['usuario_img']['tmp_name'],"images/usuarios/".$arquivo)){

				$sql = "update tbl_usuarios set 
						USUARIO_IMG = '".$arquivo."',
						USUARIO_DTALT = '".$data_hora."'		
						
						where USUARIO_CODIGO = ".$_POST['usercod'];
						if($this->resultado = $this->con->banco->Execute($sql)){
							alerta("Foto do Usuario cadastrada com sucesso!");
								return true;
						}
						else{
							alerta("Ocorreu um erro ao tentar cadastrar a foto do usuario!");
								return false;
						}
			
				}
			}
		}
		function gravarAlteracaoFotoFundoUsuarios(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['usuario_img']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['usuario_img']['tmp_name'],"images/usuariosfundos/".$arquivo)){

				$sql = "update tbl_usuarios set 
						USUARIO_IMG2 = '".$arquivo."',
						USUARIO_DTALT = '".$data_hora."'		
						
						where USUARIO_CODIGO = ".$_POST['usercod'];
						if($this->resultado = $this->con->banco->Execute($sql)){
							alerta("Fundo cadastrado com sucesso!");
								return true;
						}
						else{
							alerta("Ocorreu um erro ao tentar cadastrar a foto do usuario!");
								return false;
						}
			
				}
			}
		}		
		function totalDeUsuariosCadastrados(){
			$sql = "select COUNT(*) as TOTALUSUARIOS from tbl_usuarios";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALUSUARIOS;
		}
	}
?>