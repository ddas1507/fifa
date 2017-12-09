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
		
		function listarPartidasLibertadores(){
			$sql = "select * FROM tbl_partidas Where PART_TORNEIO = '1'
			ORDER BY PART_RODADA ASC ";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		
		function listarPartidasChampions(){
			$sql = "select * FROM tbl_partidas Where PART_TORNEIO = '2'
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
		
		function gravarAlteracaoPartidasHorarios(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i', strtotime("-3 hours"));	
		$data = $dt;
		$inicio = $hr;
		$final = $hr;
		
			$sql = "update tbl_partidas set 
			PART_DT_H_I = '".$_POST['part_dt_h_i']."',
			PART_DT_H_F = '".$_POST['part_dt_h_f']."',
			PART_DT_D  = '".$_POST['part_dt_d']."',
			PART_DT_M  = '".$_POST['part_dt_m']."',
			PART_DT_A  = '".$_POST['part_dt_a']."',
			PART_DT_LOCAL  = '".$_POST['part_dt_local']."',
			PART_DT_OBS  = '".$_POST['part_dt_obs']."',
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
		

		function somarMaisUmJogoNaTabelaDoTimeA_Libertadores(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i', strtotime("-3 hours"));	
		$data = $dt;
		
			$sql = "update tbl_usuarios set USUARIO_JL = (select coalesce(max(USUARIO_JL) +1,1))
					where USUARIO_CODIGO = ".$_POST['codigoTimeA'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Jogo do time da casa registrado com Sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar alterar o jogo do time da casa!");
						return false;
				}
		}

		function somarMaisUmJogoNaTabelaDoTimeB_Libertadores(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i', strtotime("-3 hours"));	
		$data = $dt;
		
			$sql = "update tbl_usuarios set USUARIO_JL = (select coalesce(max(USUARIO_JL) +1,1))
					where USUARIO_CODIGO = ".$_POST['codigoTimeB'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Jogo do time visitante registrado com Sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar alterar o seu jogo!");
						return false;
				}
		}

		function VED_Time_A_Libertadores(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i', strtotime("-2 hours"));	
		$data = $dt;
		
		$placar_time_a = $_POST['part_time_a_placar'];
		$placar_time_b = $_POST['part_time_b_placar'];

			if($placar_time_a > $placar_time_b ){
				$sql = "update tbl_usuarios set USUARIO_VL = (select coalesce(max(USUARIO_VL) +1,1))
						where USUARIO_CODIGO = ".$_POST['codigoTimeA'];
					if($this->resultado = $this->con->banco->Execute($sql)){
						//alerta("Vitoria do time da casa registrada com Sucesso!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar registrar a vitoria do time da casa!");
							return false;
					}
			}elseif($placar_time_a == $placar_time_b ){
				$sql = "update tbl_usuarios set USUARIO_EL = (select coalesce(max(USUARIO_EL) +1,1))
						where USUARIO_CODIGO = ".$_POST['codigoTimeA'];
					if($this->resultado = $this->con->banco->Execute($sql)){
						//alerta("O empate do time da casa foi registrado com sucesso!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar registrar o empate do time da casa!");
							return false;
					}
			}elseif($placar_time_a < $placar_time_b ){
				$sql = "update tbl_usuarios set USUARIO_DL = (select coalesce(max(USUARIO_DL) +1,1))
						where USUARIO_CODIGO = ".$_POST['codigoTimeA'];
					if($this->resultado = $this->con->banco->Execute($sql)){
						//alerta("Derrota do time da casa registrada com sucesso!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar registrar a derrota do time da casa!");
							return false;
					}
			}			
			else{
				alerta("Nao foi possivel calcular a vitoria dessa partida!");
					return false;			
			}
		}
		
		function gPL_Time_A_Libertadores(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i', strtotime("-2 hours"));	
		$data = $dt;
		
		$placar_time_a = $_POST['part_time_a_placar'];
		
			$sql = "update tbl_usuarios set USUARIO_GPL = (select coalesce(max(USUARIO_GPL) +".$placar_time_a.",".$placar_time_a."))
					where USUARIO_CODIGO = ".$_POST['codigoTimeA'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Gols Pros do time da casa registrado com Sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar registrar os gols pros do time da casa!");
					return false;
			}
		}
		
		function gCL_Time_A_Libertadores(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i', strtotime("-2 hours"));	
		$data = $dt;
		
		$placar_time_b = $_POST['part_time_b_placar'];
		
			$sql = "update tbl_usuarios set USUARIO_GCL = (select coalesce(max(USUARIO_GCL) +".$placar_time_b.",".$placar_time_b."))
					where USUARIO_CODIGO = ".$_POST['codigoTimeA'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Gols contras do time da casa registrado com Sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar registrar os gols contras do time da casa!");
					return false;
			}
		}
		
		function gPL_Time_B_Libertadores(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i', strtotime("-2 hours"));	
		$data = $dt;
		
		$placar_time_b = $_POST['part_time_b_placar'];
		
			$sql = "update tbl_usuarios set USUARIO_GPL = (select coalesce(max(USUARIO_GPL) +".$placar_time_b.",".$placar_time_b."))
					where USUARIO_CODIGO = ".$_POST['codigoTimeB'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Gols Pros do time visitante registrado com Sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar registrar os gols pros do time visitante!");
					return false;
			}
		}
		
		function gCL_Time_B_Libertadores(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i', strtotime("-2 hours"));	
		$data = $dt;
		
		$placar_time_a = $_POST['part_time_a_placar'];
		
			$sql = "update tbl_usuarios set USUARIO_GCL = (select coalesce(max(USUARIO_GCL) +".$placar_time_a.",".$placar_time_a."))
					where USUARIO_CODIGO = ".$_POST['codigoTimeB'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Gols contras do time da casa registrado com Sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar registrar os gols contras do time da casa!");
					return false;
			}
		}				
		
		function Pontuacao_Time_A_Libertadores(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i', strtotime("-2 hours"));	
		$data = $dt;
		
		$placar_time_a = $_POST['part_time_a_placar'];
		$placar_time_b = $_POST['part_time_b_placar'];

			if($placar_time_a > $placar_time_b ){
				$sql = "update tbl_usuarios set USUARIO_PL = (select coalesce(max(USUARIO_PL) +3,1))
						where USUARIO_CODIGO = ".$_POST['codigoTimeA'];
					if($this->resultado = $this->con->banco->Execute($sql)){
						//alerta("O time da casa ganhou 3 Pontos pela Vitoria!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar registrar os 3 pontos pela vitoria do time da casa!");
							return false;
					}
			}else if($placar_time_a == $placar_time_b ){
				$sql = "update tbl_usuarios set USUARIO_PL = (select coalesce(max(USUARIO_PL) +1,1))
						where USUARIO_CODIGO = ".$_POST['codigoTimeA'];
					if($this->resultado = $this->con->banco->Execute($sql)){
						//alerta("Devido ao empate o time da casa ganhou apenas 1 ponto!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar registrar o unico ponto devido ao empate do time da casa!");
							return false;
					}
			}else if($placar_time_a < $placar_time_b ){
				$sql = "update tbl_usuarios set USUARIO_PL = (select coalesce(max(USUARIO_PL) +0,1))
						where USUARIO_CODIGO = ".$_POST['codigoTimeA'];
					if($this->resultado = $this->con->banco->Execute($sql)){
						//alerta("Como o time da casa perdeu nao foi possivel registrar nenhum ponto!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar registrar o valor zerado decorrente da derrota do time da casa!");
							return false;
					}
			}			
			else{
				alerta("Nao foi possivel calcular pontuacao dessa partida!");
					return false;			
			}
		}
		
		function VED_Time_B_Libertadores(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i', strtotime("-2 hours"));	
		$data = $dt;
		
		$placar_time_a = $_POST['part_time_a_placar'];
		$placar_time_b = $_POST['part_time_b_placar'];

			if($placar_time_b > $placar_time_a ){
				$sql = "update tbl_usuarios set USUARIO_VL = (select coalesce(max(USUARIO_VL) +1,1))
						where USUARIO_CODIGO = ".$_POST['codigoTimeB'];
					if($this->resultado = $this->con->banco->Execute($sql)){
						//alerta("Vitoria do time visitante registrada com Sucesso!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar registrar a vitoria do time visitante!");
							return false;
					}
			}elseif($placar_time_b == $placar_time_a ){
				$sql = "update tbl_usuarios set USUARIO_EL = (select coalesce(max(USUARIO_EL) +1,1))
						where USUARIO_CODIGO = ".$_POST['codigoTimeB'];
					if($this->resultado = $this->con->banco->Execute($sql)){
						//alerta("O empate do time visitante foi registrado com sucesso!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar registrar o empate do time visitante!");
							return false;
					}
			}elseif($placar_time_b < $placar_time_a ){
				$sql = "update tbl_usuarios set USUARIO_DL = (select coalesce(max(USUARIO_DL) +1,1))
						where USUARIO_CODIGO = ".$_POST['codigoTimeB'];
					if($this->resultado = $this->con->banco->Execute($sql)){
						//alerta("Derrota do time visitante registrada com sucesso!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar registrar a derrota do time visitante!");
							return false;
					}
			}			
			else{
				alerta("Nao foi possivel calcular essa partida!");
					return false;			
			}
		}		

		function Pontuacao_Time_B_Libertadores(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i', strtotime("-2 hours"));	
		$data = $dt;
		
		$placar_time_a = $_POST['part_time_a_placar'];
		$placar_time_b = $_POST['part_time_b_placar'];

			if($placar_time_b > $placar_time_a ){
				$sql = "update tbl_usuarios set USUARIO_PL = (select coalesce(max(USUARIO_PL) +3,1))
						where USUARIO_CODIGO = ".$_POST['codigoTimeB'];
					if($this->resultado = $this->con->banco->Execute($sql)){
						//alerta("O time visitante ganhou 3 Pontos pela Vitoria!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar registrar os 3 pontos pela vitoria do time visitante!");
							return false;
					}
			}elseif($placar_time_b == $placar_time_a ){
				$sql = "update tbl_usuarios set USUARIO_PL = (select coalesce(max(USUARIO_PL) +1,1))
						where USUARIO_CODIGO = ".$_POST['codigoTimeB'];
					if($this->resultado = $this->con->banco->Execute($sql)){
						//alerta("Devido ao empate o time visitante ganhou apenas 1 ponto!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar registrar o unico ponto devido ao empate do time visitante!");
							return false;
					}
			}elseif($placar_time_b < $placar_time_a ){
				$sql = "update tbl_usuarios set USUARIO_PL = (select coalesce(max(USUARIO_PL) +0,1))
						where USUARIO_CODIGO = ".$_POST['codigoTimeB'];
					if($this->resultado = $this->con->banco->Execute($sql)){
						//alerta("Como o time visitante perdeu nao foi possivel registrar nenhum ponto!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar registrar o valor zerado decorrente da derrota do time visitante!");
							return false;
					}
			}			
			else{
				alerta("Nao foi possivel calcular pontuacao dessa partida!");
					return false;			
			}
		}

		

	}
?>