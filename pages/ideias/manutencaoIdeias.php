<?php
	class manutencaoIdeias{
		var $resultado;
		var $registros;

		function manutencaoIdeias(){
			$this->con = new conexao();
		}

		function listarIdeias(){
			$sql = "select * FROM tbl_ideias ORDER BY IDEIA_CODIGO DESC";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirIdeias(){
			$sql = "delete from tbl_ideias where IDEIA_CODIGO =".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Ideia excluida com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir a ideia!");
						return false;
				}
		}

		function formularioAlterarIdeias(){
			$sql = "select * from tbl_ideias where IDEIA_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesIdeias(){
			$sql = "select * from tbl_ideias where IDEIA_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoIdeias(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "update tbl_ideias set 
			IDEIA_NOME = '".$_POST['ideia_nome']."',
			IDEIA_ASSUNTO = '".$_POST['ideia_assunto']."',
			IDEIA_MENSAGEM = '".$_POST['ideia_mensagem']."',
			IDEIA_DTALT = '".$data_hora."'

			where IDEIA_CODIGO = ".$_POST['codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				alerta("Ideia alterada com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar a sua ideia!");
					return false;
			}
		}

		function gravarIdeias(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into tbl_ideias
			(
				IDEIA_NOME,
				IDEIA_ASSUNTO,
				IDEIA_MENSAGEM,
				IDEIA_DTCAD
			)	
			values 	
			(
			'".$_REQUEST['ideia_nome']."',
			'".$_REQUEST['ideia_assunto']."',
			'".$_REQUEST['ideia_mensagem']."',
			'".$data_hora."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Ideia cadastrada com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar a ideia!");
						return false;
				}
		}

		function votarGosteiIdeias(){
			$sql = "update tbl_ideias set IDEIA_GOSTEI = (select coalesce(max(IDEIA_GOSTEI) +1,1))

			where IDEIA_CODIGO = ".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Seu voto foi aceito!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar gravar o seu voto!");
						return false;
				}
		}

		function votarNaoGosteiIdeias(){
			$sql = "update tbl_ideias set IDEIA_NAOGOSTEI = (select coalesce(max(IDEIA_NAOGOSTEI) +1,1))

			where IDEIA_CODIGO = ".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Seu voto foi aceito!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar gravar o seu voto!");
						return false;
				}
		}
		
		function totalDeIdeiasCadastradas(){
			$sql = "select COUNT(*) as TOTALIDEIAS from tbl_ideias";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALIDEIAS;
		}
	}
?>