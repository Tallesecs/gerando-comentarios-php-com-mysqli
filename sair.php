<?php
include('conexao.php');
include ('header.php');

if (mysqli_close($conexao))
	echo '<H1> VOCE SAIU DO SISTEMA</H1>';



?>

<a href='index.php'>VOLTAR</a>