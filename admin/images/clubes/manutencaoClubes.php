<?php
	class manutencaoClubes{
		var $resultado;
		var $registros;

		function manutencaoClubes(){
			$this->con = new conexao();
		}

		function listarClubes(){
			$sql = "select * FROM tbl_clubes
			ORDER BY CLUBE_NOME ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		
		function listarJogadores(){
			$sql = "select * FROM tbl_jogadores where CLUBE_CODIGO =".$_REQUEST['clubcod'];
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirClubes(){
			$sql = "delete from tbl_clubes where CLUBE_CODIGO =".$_REQUEST['clubcod'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Clube excluido com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o clube!");
						return false;
				}
		}

		function formularioAlterarClubes(){
			$sql = "select * from tbl_clubes where CLUBE_CODIGO =".$_REQUEST['clubcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesClubes(){
			$sql = "select * from tbl_clubes where CLUBE_CODIGO =".$_REQUEST['clubcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoClubes(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "update tbl_clubes set 
			CLUBE_NOME = '".$_POST['clube_nome']."',
			CLUBE_DTALT = '".$data_hora."'

			where CLUBE_CODIGO = ".$_POST['clubcod'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Clube alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar o seu clube!");
					return false;
			}
		}

		function gravarClubes(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into tbl_clubes
			(
				CLUBE_NOME,
				CLUBE_DTCAD
			)	
			values 	
			(
				'".$_REQUEST['clube_nome']."',
				'".$data_hora."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Clube cadastrado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar seu clube!");
						return false;
				}
		}

		function formularioAlterarFotoClubes(){
			$sql = "select * from tbl_clubes where CLUBE_CODIGO =".$_REQUEST['clubcod'];
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
				if(move_uploaded_file($_FILES['img_descricao']['tmp_name'],"images/clubes/".$arquivo)){

					$sql = "insert into tbl_imagens
					(
						IMG_DESCRICAO,
						CLUBE_CODIGO,
						IMG_DTCAD
					)	
					values 	
					(
					'".$arquivo."',
					'".$_REQUEST['clubcod']."',
					'".$data_hora."'
					)";

					if($this->resultado = $this->con->banco->Execute($sql)){
						//alerta("Imagem cadastrada com sucesso!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar cadastrar a imagem!");
							return false;
					}
				
				}
			}
		}		
		function gravarAlteracaoFotoClubes(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['clube_img']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['clube_img']['tmp_name'],"images/clubes/".$arquivo)){

				$sql = "update tbl_clubes set 
						CLUBE_IMG = '".$arquivo."',
						CLUBE_DTALT = '".$data_hora."'		
						
						where CLUBE_CODIGO = ".$_POST['clubcod'];
						if($this->resultado = $this->con->banco->Execute($sql)){
							//alerta("Foto do Clube cadastrada com sucesso!");
								return true;
						}
						else{
							alerta("Ocorreu um erro ao tentar cadastrar a foto do clube!");
								return false;
						}
			
				}
			}
		}
		function otimizarTabelaClubes(){
			$sql = "OPTIMIZE TABLE tbl_clubes";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function totalDeClubesCadastrados(){
			$sql = "select COUNT(*) as TOTALCLUBES from tbl_clubes";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALCLUBES;
		}
	}
?>