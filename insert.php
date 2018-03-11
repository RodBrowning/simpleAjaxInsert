<?php

	// coloque os dados do seu banco. se achar o que fiz ontem acredito que esta certo.
	$localhost = "localhost";
	$user = "root";
	$password = "";
	$database = "insert"; // este é o nome do banco que criei. o que esta no seu é loja

	$conn = mysqli_connect($localhost,$user,$password,$database);

	// verifique se a tabela e colunas estao conforme a tabela no seu banco.
	$sql = "INSERT INTO `user` (`id`, `nome`, `email`, `status`) VALUES (NULL, '".$_REQUEST['nome'] ."', '".$_REQUEST['email']."', '1')";
	$insert = mysqli_query($conn, $sql);


?>
<h1 style="color: red;">Os nome inseriodo é:</h1>
<p style="color: darkblue;"><?php echo $_REQUEST['nome']?></p>
<p style="color: black;"><?php echo "E o email é: ". $_REQUEST['email']?></p>

<!--So basta rodar-->