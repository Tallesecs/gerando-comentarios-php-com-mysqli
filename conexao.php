<?php
include ('header.php');

$conexao = mysqli_connect("localhost", "root", "");

if (mysqli_query($conexao, "CREATE DATABASE IF NOT EXISTS meubanco")) {
	mysqli_select_db($conexao, "meubanco");
	mysqli_query($conexao, "CREATE TABLE comentarios
		(id MEDIUMINT NOT NULL AUTO_INCREMENT, comentario varchar(255), PRIMARY KEY (id))");
}
else { 
	die('Erro criando o banco de dados' . mysqli_error()); 

}



?>
