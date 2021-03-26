<?php
	function conectaBanco(){
		$servidor="localhost";
		$usuario="root";
		$senha="";
		$banco="revenda";

		$connection=mysqli_connect($servidor, $usuario, $senha);
		$sla=mysqli_select_db($connection, $banco);
		return $connection;
	}
	function cadastraVeiculo($marca, $modelo, $versao, $ano, $cor, $kilo){
		$anos = (string) $ano;
		$connection=conectaBanco();
		$insere="INSERT INTO veiculo(modelo, marca, versao, ano, anos, cor, kilo) VALUES('$modelo', '$marca', '$versao', '$ano', $anos, '$cor', '$kilo');";
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));
		mysqli_close($connection);
		return 'Veiculo Cadastrado com Sucesso!';
	}
	function consultaModelo($pesquisa){
		$connection=conectaBanco();
		$insere="SELECT modelo, marca, versao, ano, cor, kilo FROM veiculo WHERE 
																				modelo LIKE '%$pesquisa%' OR 
																				marca LIKE '%$pesquisa%' OR 
																				versao LIKE '%$pesquisa%' OR 
																				anos LIKE '%$pesquisa%' OR 
																				cor LIKE '%$pesquisa%';";
		
		$ins=mysqli_query($connection, $insere) or die(mysqli_error($connection));

		$array = array();
		$i = 1;

		$array[0] = "<table class='table' style='margin-top: 50px;'><tr><th>Modelo</th><th>Marca</th><th>Versão</th><th>Ano</th><th>Cor</th><th>Kilometragem</th></tr>";
		while($row = mysqli_fetch_array($ins)){
			$array[$i] = "<tr><td>".$row['modelo']."</td><td>".$row['marca']."</td><td>".$row['versao']."</td><td>".$row['ano']."</td><td>".$row['cor']."</td><td>".$row['kilo']."</td></tr>";
			$i++;
		}
		$array[$i] = "</table>";
		mysqli_close($connection);
		return $array;
	}
	//IP
	$host = "127.0.0.1";
	
	//Porta
	$port = 9000;
	
	//Tempo limite ilimitado.
	set_time_limit(0);
	
	//Cria o Socket e testa se funcionou.
	$socket = socket_create(AF_INET, SOCK_STREAM, 0);
	if ($socket === false) { echo "socket_create falhou: ".socket_strerror(socket_last_error())."\n\n";}

	//Liga o Socket e testa se funcionou.
	$result = socket_bind($socket, $host, $port);
	if ($result === false) { echo "socket_bind falhou: ".socket_strerror(socket_last_error($socket))."\n\n";}

	do{

		//Fica esperando conexão e testa se funcionou.
		$result = socket_listen($socket);
		if ($result === false) { echo "socket_listen falhou: ".socket_strerror(socket_last_error($socket))."\n\n";}

		//Aceita as conexões.
		$spawn = socket_accept($socket);

		//Recebe mensagem.
		$input = socket_read($spawn, 1024);
		$input = trim($input);

		$array = explode('/', $input);

		if($array[0]==1){
			$res = cadastraVeiculo($array[1], $array[2], $array[3], $array[4], $array[5], $array[6]);
			//Responde a mensagem.
			$output = $res;
			socket_write($spawn, $output, strlen ($output));
		}
		elseif($array[0]==2){
			$res = consultaModelo($array[1]);
			//Responde a mensagem.
			$output = implode('', $res);
			socket_write($spawn, $output, strlen ($output));
		}

	}while(true);

	//Fecha os Sockets.
	socket_close($spawn);
	socket_close($socket);
?>