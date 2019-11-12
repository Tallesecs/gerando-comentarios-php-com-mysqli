<?php
include('conexao.php');
include ('header.php');

mysqli_query($conexao, "INSERT INTO comentarios (comentario) VALUES('$_POST[comentario]');");


header('location:index.php');


?>