<?php
	class manutencaoImagens{
		var $resultado;
		var $registros;

		function manutencaoImagens(){
			$this->con = new conexao();
		}

		function listarImagens(){
			$sql = "SELECT * FROM tbl_imagens WHERE USUARIO_CODIGO =".$_REQUEST['usercod'];
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirImagens(){
			$sql = "delete from tbl_imagens where USUARIO_CODIGO =".$_REQUEST['usercod'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Imagem excluida com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir a imagem!");
						return false;
				}
		}

		function gravarImagens(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['img_descricao']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['img_descricao']['tmp_name'],"../images/imagens/".$arquivo)){

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
						alerta("Imagem cadastrado com sucesso!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar cadastrar a imagem!");
							return false;
					}
				
				}
			}
		}
		
		function totalDeImagensCadastrados(){
			$sql = "select COUNT(*) as TOTALIMAGENS from tbl_imagens";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALIMAGENS;
		}
	}
?>