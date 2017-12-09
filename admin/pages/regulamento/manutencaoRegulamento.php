<?php
	class manutencaoRegulamento{
		var $resultado;
		var $registros;

		function manutencaoRegulamento(){
			$this->con = new conexao();
		}

		function listarRegulamento(){
			$sql = "select * FROM tbl_regulamento ORDER BY REG_CODIGO DESC";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirRegulamento(){
			$sql = "delete from tbl_regulamento where REG_CODIGO =".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Regulamento excluida com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir a regulamento!");
						return false;
				}
		}

		function formularioAlterarRegulamento(){
			$sql = "select * from tbl_regulamento where REG_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesRegulamento(){
			$sql = "select * from tbl_regulamento where REG_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoRegulamento(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "update tbl_regulamento set 
			REG_NOME = '".$_POST['reg_nome']."',
			REG_ASSUNTO = '".$_POST['reg_assunto']."',
			REG_MENSAGEM = '".$_POST['reg_mensagem']."',
			REG_DTALT = '".$data_hora."'

			where REG_CODIGO = ".$_POST['codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				alerta("Regulamento alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar ao seu regulamento!");
					return false;
			}
		}

		function gravarRegulamento(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into tbl_regulamento
			(
				REG_NOME,
				REG_ASSUNTO,
				REG_MENSAGEM,
				REG_DTCAD
			)	
			values 	
			(
			'".$_REQUEST['reg_nome']."',
			'".$_REQUEST['reg_assunto']."',
			'".$_REQUEST['reg_mensagem']."',
			'".$data_hora."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Regulamento cadastrado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar o regulamento!");
						return false;
				}
		}

		function totalDeRegulamentoCadastradas(){
			$sql = "select COUNT(*) as TOTALREGULAMENTO from tbl_regulamento";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALREGULAMENTO;
		}
	}
?>