<?php
	class manutencaoDebitos{
		var $resultado;
		var $registros;

		function manutencaoDebitos(){
			$this->con = new conexao();
		}

		function listarDebitos(){
			$sql = "select * FROM tbl_debitos
			ORDER BY DEBT_NOME ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirDebitos(){
			$sql = "delete from tbl_debitos where DEBT_CODIGO =".$_REQUEST['debtcod'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Debito excluido com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o debito!");
						return false;
				}
		}

		function formularioAlterarDebitos(){
			$sql = "select * from tbl_debitos where DEBT_CODIGO =".$_REQUEST['debtcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesDebitos(){
			$sql = "select * from tbl_debitos where DEBT_CODIGO =".$_REQUEST['debtcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoDebitos(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "update tbl_debitos set 
			DEBT_NOME = '".$_POST['debt_nome']."',
			DEBT_VALOR = '".$_POST['debt_valor']."',
			DEBT_DTALT = '".$data_hora."'

			where DEBT_CODIGO = ".$_POST['debtcod'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Debito alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar o seu debito!");
					return false;
			}
		}

		function gravarDebitos(){
			$dt = date('d/m');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt";
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['debt_img']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['debt_img']['tmp_name'],"images/debitos/".$arquivo)){			

			$sql = "insert into tbl_debitos
			(
				DEBT_IMG,
				DEBT_NOME,
				DEBT_VALOR,
				DEBT_DTCAD
			)	
			values 	
			(			
				'".$arquivo."',
				'".$_REQUEST['debt_nome']."',
				'".$_REQUEST['debt_valor']."',
				'".$data_hora."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Debito cadastrado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar seu debito!");
								return false;
						}
			
				}
			}
		}
		
		function gravarLancamentos(){
			$dt = date('d/m');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt";
			
			$vl = '-';
			
			$nome = $_REQUEST['debt_nome'];
			$deb = '-'.$_REQUEST['debt_valor'];
			
			$sql = "insert into tbl_lancamentos
			(
				LANC_NOME,
				LANC_VALOR,
				LANC_DTCAD
			)	
			values 	
			(			
				'".$nome."',
				'".$deb."',
				'".$data_hora."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Lancamento cadastrado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar seu lancamento!");
								return false;
				}
		}
		

		function formularioAlterarFotoDebitos(){
			$sql = "select * from tbl_debitos where DEBT_CODIGO =".$_REQUEST['debtcod'];
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
				if(move_uploaded_file($_FILES['img_descricao']['tmp_name'],"images/debitos/".$arquivo)){

					$sql = "insert into tbl_imagens
					(
						IMG_DESCRICAO,
						DEBT_CODIGO,
						IMG_DTCAD
					)	
					values 	
					(
					'".$arquivo."',
					'".$_REQUEST['debtcod']."',
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
		function gravarAlteracaoFotoDebitos(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['debt_img']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['debt_img']['tmp_name'],"images/debitos/".$arquivo)){

				$sql = "update tbl_debitos set 
						DEBT_IMG = '".$arquivo."',
						DEBT_DTALT = '".$data_hora."'		
						
						where DEBT_CODIGO = ".$_POST['debtcod'];
						if($this->resultado = $this->con->banco->Execute($sql)){
							//alerta("Foto do Clube cadastrada com sucesso!");
								return true;
						}
						else{
							alerta("Ocorreu um erro ao tentar cadastrar a foto do debito!");
								return false;
						}
			
				}
			}
		}
		function otimizarTabelaDebitos(){
			$sql = "OPTIMIZE TABLE tbl_debitos";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function totalDeCreditosCadastrados(){
			$sql = "select SUM(CRED_VALOR) as TOTALCREDITOS from tbl_creditos";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALCREDITOS;
		}
		
		function totalDeDebitosCadastrados(){
			$sql = "select SUM(DEBT_VALOR) as TOTALDEBITOS from tbl_debitos";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALDEBITOS;
		}
	}
?>