<?php
	class manutencaoLancamentos{
		var $resultado;
		var $registros;

		function manutencaoLancamentos(){
			$this->con = new conexao();
		}

		function listarLancamentos(){
			$sql = "select * FROM tbl_lancamentos
			ORDER BY LANC_CODIGO ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirLancamentos(){
			$sql = "delete from tbl_lancamentos where CRED_CODIGO =".$_REQUEST['credcod'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Credito excluido com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o credito!");
						return false;
				}
		}

		function formularioAlterarLancamentos(){
			$sql = "select * from tbl_lancamentos where CRED_CODIGO =".$_REQUEST['credcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesLancamentos(){
			$sql = "select * from tbl_lancamentos where CRED_CODIGO =".$_REQUEST['credcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoLancamentos(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "update tbl_lancamentos set 
			CRED_NOME = '".$_POST['cred_nome']."',
			CRED_VALOR = '".$_POST['cred_valor']."',
			CRED_DTALT = '".$data_hora."'

			where CRED_CODIGO = ".$_POST['credcod'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Credito alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar o seu credito!");
					return false;
			}
		}

		function gravarLancamentos(){
			$dt = date('d/m');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt";

			$sql = "insert into tbl_lancamentos
			(
				CRED_NOME,
				CRED_VALOR,
				CRED_DTCAD
			)	
			values 	
			(			
				'".$_REQUEST['cred_nome']."',
				'".$_REQUEST['cred_valor']."',
				'".$data_hora."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Credito cadastrado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar seu credito!");
								return false;
					}
		}

		function otimizarTabelaLancamentos(){
			$sql = "OPTIMIZE TABLE tbl_lancamentos";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		function totalDeLancamentosCadastrados(){
			$sql = "select SUM(LANC_VALOR) as TOTALLANCAMENTOS from tbl_lancamentos";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALLANCAMENTOS;
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