<?php
	include('header.php');
	include ('conexao.php');
     $id = $_GET["id"];
     
	 $deleta = mysqli_query($conexao, "DELETE FROM comentarios WHERE id=$id");
    
     if($deleta){
         echo "O registro foi excluído.";
 
     }else{
         echo "Infelizmente não foi possível excluir.";
    }

header('location:index.php');

?>