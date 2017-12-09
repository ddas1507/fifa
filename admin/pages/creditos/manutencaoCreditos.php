<?php
	class manutencaoCreditos{
		var $resultado;
		var $registros;

		function manutencaoCreditos(){
			$this->con = new conexao();
		}

		function listarCreditos(){
			$sql = "select * FROM tbl_creditos
			ORDER BY CRED_NOME ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirCreditos(){
			$sql = "delete from tbl_creditos where CRED_CODIGO =".$_REQUEST['credcod'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Credito excluido com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o credito!");
						return false;
				}
		}

		function formularioAlterarCreditos(){
			$sql = "select * from tbl_creditos where CRED_CODIGO =".$_REQUEST['credcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesCreditos(){
			$sql = "select * from tbl_creditos where CRED_CODIGO =".$_REQUEST['credcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoCreditos(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "update tbl_creditos set 
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

		function gravarCreditos(){
			$dt = date('d/m');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt";

			$sql = "insert into tbl_creditos
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
		
		function gravarLancamentos(){
			$dt = date('d/m');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt";

			$sql = "insert into tbl_lancamentos
			(
				LANC_NOME,
				LANC_VALOR,
				LANC_DTCAD
			)	
			values 	
			(			
				'".$_REQUEST['cred_nome']."',
				'".$_REQUEST['cred_valor']."',
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

		function otimizarTabelaCreditos(){
			$sql = "OPTIMIZE TABLE tbl_creditos";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		function totalDeCreditosCadastrados(){
			$sql = "select SUM(CRED_VALOR) as TOTALCREDITOS from tbl_creditos";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALCREDITOS;
		}
	}
?>