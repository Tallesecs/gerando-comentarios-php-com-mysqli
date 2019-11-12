<?php 
	include ('header.php');
	include ('conexao.php');

$dados = mysqli_query($conexao, "SELECT * FROM comentarios");


?>
<body>

<style>
body {
	text-align: center;
	background-image:linear-gradient(to left,#87c7df,#648896);
}

</style>	

	<h1>COMENTÁRIOS</h1>
	<table class='table table-hover table-condensed'>
		<tr>
    		<th>ID</th>
    		<th>Comentário</th>    
  		</tr>

	</table>	

<?php 
	while($tabela = mysqli_fetch_array($dados)) {
	?>

	<div>
		<table>
			<tr>
				<td><?php echo $tabela['id']; ?></td>
				<td><?php echo $tabela['comentario']; ?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>

<hr>

	<form action="inserir.php" method="POST">
		<input type="text" name="comentario" placeholder="digite aqui seu comentário">
		<br>
		<br>
		<button type="submit" class="btn btn-primary"> ENVIAR </button>
		<a href="sair.php" class="btn btn-warning"> SAIR </a>
	</form>

	<form action="apagar.php" method="GET">
		<input name="id">
		<button type="submit" class="btn btn-danger">APAGAR</button>

	</form>
 

</body>
</html>