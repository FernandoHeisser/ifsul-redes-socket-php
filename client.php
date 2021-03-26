<?php
	if(isset($_POST['modelo']) and isset($_POST['marca']) and isset($_POST['versao']) and isset($_POST['ano']) and isset($_POST['kilo']) and isset($_POST['cor'])){

		$modelo = $_POST['modelo'];
		$marca = $_POST['marca'];
		$versao = $_POST['versao'];
		$ano = $_POST['ano'];
		$kilo = $_POST['kilo'];
		$cor = $_POST['cor'];

		$array = [$modelo,$marca,$versao,$ano,$cor,$kilo];
		$mensagem = implode('/', $array);
		$mensagem = '1/'.$mensagem;
		$res = socket($mensagem);
		setcookie('mensagem', $res, time()+1);
		header("Location:index.php");
	}
	elseif(isset($_POST['pesquisa'])){
		$pesquisa = $_POST['pesquisa'];
		$pesquisa = '2/'.$pesquisa;
		$res = socket($pesquisa);
		setcookie('mensagem', $res, time()+1);
		header("Location:index.php");
	}

	function socket($message){
		//IP
		$host = "127.0.0.1";
		
		//Porta
		$port = 9000;

		//Cria o Socket e testa se funcionou.
		$socket = socket_create(AF_INET, SOCK_STREAM, 0);
		if ($socket === false) { echo "socket_create falhou: ".socket_strerror(socket_last_error())."\n\n";}
		
		//Conecta o Socket ao servidor.
		$result = socket_connect($socket, $host, $port);  
		
		//Mensagem enviada ao servidor.
		echo "\n\tMensagem enviada: ".$message."\n\n";
		socket_write($socket, $message, strlen($message));

		//Resposta do Servidor.
		$result = socket_read($socket, 1024);
		echo "\n\tResposta do servidor: ".$result."\n\n";

		//Fecha o Socket.
		socket_close($socket);

		return $result;
	}
?>