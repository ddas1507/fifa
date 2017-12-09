<?php
	class manutencaoJogadores{
		var $resultado;
		var $registros;

		function manutencaoJogadores(){
			$this->con = new conexao();
		}

		function listarJogadores(){
			$sql = "select * FROM tbl_jogadores";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirJogadores(){
			$sql = "delete from tbl_jogadores where JOGADOR_CODIGO =".$_REQUEST['jogadcod'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Jogador excluido com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o jogador!");
						return false;
				}
		}

		function formularioAlterarJogadores(){
			$sql = "select * from tbl_jogadores where JOGADOR_CODIGO =".$_REQUEST['jogadcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesJogadores(){
			$sql = "select * from tbl_jogadores where JOGADOR_CODIGO =".$_REQUEST['jogadcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesClubes(){
			$sql = "select * from tbl_clubes where CLUBE_CODIGO =".$_REQUEST['clubcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoJogadores(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "update tbl_jogadores set 
			JOGADOR_NOME = '".$_POST['jogador_nome']."',
			JOGADOR_POSICAO = '".$_POST['jogador_posicao']."',
			JOGADOR_HABILIDADE = '".$_POST['jogador_habilidade']."',
			JOGADOR_DTALT = '".$data_hora."'

			where JOGADOR_CODIGO = ".$_POST['jogadcod'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Jogador alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar o seu jogador!");
					return false;
			}
		}

		function gravarJogadores(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['jogador_img']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['jogador_img']['tmp_name'],"images/jogadores/".$arquivo)){			
				$sql = "insert into tbl_jogadores
				(
					JOGADOR_IMG,
					CLUBE_CODIGO,
					CLUBE_NOME,
					JOGADOR_NOME,
					JOGADOR_POSICAO,
					JOGADOR_HABILIDADE,
					JOGADOR_DTCAD
				)	
				values 	
				(
					'".$arquivo."',				
					'".$_REQUEST['clube_codigo']."',
					'".$_REQUEST['clube_nome']."',
					'".$_REQUEST['jogador_nome']."',
					'".$_REQUEST['jogador_posicao']."',
					'".$_REQUEST['jogador_habilidade']."',
					'".$data_hora."'
						)";

						if($this->resultado = $this->con->banco->Execute($sql)){
							alerta("Cliente cadastrado com sucesso!");
								return true;
						}
						else{
							alerta("Ocorreu um erro ao tentar cadastrar seu cliente!");
								return false;
						}
					
					}
				}
		}

		function formularioAlterarFotoJogadores(){
			$sql = "select * from tbl_jogadores where JOGADOR_CODIGO =".$_REQUEST['jogadcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

/*		
		function gravarImagens(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['img_descricao']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['img_descricao']['tmp_name'],"images/jogadores/".$arquivo)){

					$sql = "insert into tbl_imagens
					(
						IMG_DESCRICAO,
						JOGADOR_CODIGO,
						IMG_DTCAD
					)	
					values 	
					(
					'".$arquivo."',
					'".$_REQUEST['jogadcod']."',
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
*/
		function gravarAlteracaoFotoJogadores(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['jogador_img']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['jogador_img']['tmp_name'],"images/jogadores/".$arquivo)){

				$sql = "update tbl_jogadores set 
						JOGADOR_IMG = '".$arquivo."',
						JOGADOR_DTALT = '".$data_hora."'		
						
						where JOGADOR_CODIGO = ".$_POST['jogadcod'];
						if($this->resultado = $this->con->banco->Execute($sql)){
							//alerta("Foto do jogador cadastrada com sucesso!");
								return true;
						}
						else{
							alerta("Ocorreu um erro ao tentar cadastrar a foto do jogador!");
								return false;
						}
			
				}
			}
		}
		function otimizarTabelaJogadores(){
			$sql = "OPTIMIZE TABLE tbl_jogadores";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function totalDeJogadoresCadastrados(){
			$sql = "select COUNT(*) as TOTALJOGADORES from tbl_jogadores";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALJOGADORES;
		}
	}
?>