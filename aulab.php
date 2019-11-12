<?php 



$conexao = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexao, "meubd");



/**
$dados = mysqli_query($conexao, "SELECT * FROM PESSOAS");

while  ($tabela = mysqli_fetch_array($dados)) {
	echo $tabela['nome'] . '<br/>';
} **/

/** mysqli_query($conexao,"
	CREATE TABLE pessoas (
	id MEDIUMINT NOT NULL AUTO_INCREMENT,
	nome varchar(255),
	PRIMARY KEY (id))

"); **/

 /** mysqli_query($conexao,"
	INSERT INTO pessoas
	(nome)
	VALUES 
	('JOSE')
 
") **/





?>