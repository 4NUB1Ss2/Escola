<?php
include_once("conexao.php");

$prod = $_POST['produtonovo'];
$marc = $_POST['marcaprod'];
$val = $_POST['Valor'];
$estoq = $_POST['estoque'];

$sql = "INSERT INTO produtos (nome,marca,valor,estoque) values('$prod', '$marc', '$val', '$estoq')";
$query = mysqli_query($conn, $sql) or die ("Erro");

 if (mysqli_affected_rows($conn)){
    echo " <script> window.alert('Produto cadastrado com sucesso') </script>";
    echo " <script> location.href='index.html' </script>";
}
else{
    echo " <script> window.alert('Erro ao cadastrar produto') </script>";
	 echo " <script> location.href='produtos.html' </script>";
}

?>