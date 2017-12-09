<?php
	class manutencaoPartidas{
		var $resultado;
		var $registros;

		function manutencaoPartidas(){
			$this->con = new conexao();
		}

		function listarUsuarios(){
			$sql = "select * FROM tbl_usuarios ORDER BY USUARIO_NOME ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		
		function listarUsuarios2(){
			$sql = "select * FROM tbl_usuarios WHERE USUARIO_CODIGO <> ".$_REQUEST['usuario_mandante_cod']." ORDER BY USUARIO_NOME ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		
		function listarPartidas(){
			$sql = "select * FROM tbl_partidas
			ORDER BY PART_RODADA ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirPartidas(){
			$sql = "delete from tbl_partidas where PART_CODIGO =".$_REQUEST['partcod'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Partida excluida com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir a partida!");
						return false;
				}
		}

		function formularioAlterarPartidas(){
			$sql = "select * from tbl_partidas where PART_CODIGO =".$_REQUEST['partcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesPartidas(){
			$sql = "select * from tbl_partidas where PART_CODIGO =".$_REQUEST['partcod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoPartidas(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i', strtotime("-3 hours"));	
		$data = $dt;
		$inicio = $hr;
		$final = $hr;

			$sql = "update tbl_partidas set 
			PART_TIME_A = '".$_POST['part_time_a']."',
			PART_TIME_B = '".$_POST['part_time_b']."',
			PART_TIME_A_PLACAR = '".$_POST['part_time_a_placar']."',
			PART_TIME_B_PLACAR = '".$_POST['part_time_b_placar']."',
			PART_DT_H_I = '".$inicio."',
			PART_DT_H_F = '".$final."',
			PART_DT_ALT = '".$data."'

			where PART_CODIGO = ".$_POST['partcod'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Credito alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar o seu credito!");
					return false;
			}
		}

		function gravarPartidas(){
			$dt = date('d/m');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt";

			$sql = "insert into tbl_partidas
			(
				PART_TORNEIO,
				PART_RODADA,
				PART_TIME_A_COD,
				PART_TIME_A,
				PART_TIME_B_COD,
				PART_TIME_B,
				PART_DT_H_I,
				PART_DT_H_F,
				PART_DT_CAD
			)	
			values 	
			(			
				'".$_REQUEST['part_torneio']."',
				'".$_REQUEST['part_rodada']."',
				'".$_REQUEST['usuario_mandante_cod']."',
				'".$_REQUEST['usuario_mandante_nome']."',
				'".$_REQUEST['usuario_visitante_cod']."',
				'".$_REQUEST['usuario_visitante_nome']."',
				'".$_REQUEST['part_dt_h_i']."',
				'".$_REQUEST['part_dt_h_f']."',
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

		function otimizarTabelaPartidas(){
			$sql = "OPTIMIZE TABLE tbl_partidas";
			$this->resultado = $this->con->banco->Execute($sql);
		}

	}
?>