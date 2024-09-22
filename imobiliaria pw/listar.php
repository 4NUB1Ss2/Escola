<?php
include("conexao.php");

$sql="Select * from produtos";
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Listar Produtos</title>
</head>

<body>
    <div class="navbar">
	   <a href="index.html"> Home </a> 
	   
	     <form action="listartipo.php" method="post">
			<input type="text" placeholder="Nome do produto" name="pesquisa" required>
			<button class="botao_pesquisa" type="submit" style="font-size: medium;">Listar </button>
		</form>
    </div>   
			
    <br><br>

    <table class="minimalistBlack">
    <thead>   <!-- Table Head Element" ou linha de cabeçalho -->
    <tr>
      <td> <b>Código: </b></td>
      <td><b>Produto:</b></td>
      <td><b>Marca:</b></td>
      <td><b>Valor:</b></td>
      <td><b>Estoque:</b></td>
    </tr>
    </thead>

<?php
$result=mysqli_query($conn,$sql);

while($tbl=mysqli_fetch_array($result))
{
	$cod = $tbl["codigo"];
	$prod = $tbl["produto"];
	$marca = $tbl["marca"];
	$valor = $tbl["valor"];
	$estoque = $tbl["estoque"];
	
	echo "<tr>";
	echo "<td>$cod</td>";
	echo "<td>$prod</td>";
	echo "<td>$marca</td>";
	echo "<td>$valor</td>";
	echo "<td>$estoque</td>";
	echo "</tr>";
}
?>
</table>

</body>
</html>