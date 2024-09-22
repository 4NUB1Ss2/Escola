<?php
include_once("conexao.php");

$name = $_POST['nomenovo'];
$end = $_POST['endcli'];
$cep = $_POST['cep'];
$bair = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cel = $_POST['cel'];
$email = $_POST['email'];

$sql = "INSERT INTO clientes (nome,ende,cep,bairro,cidade,estado,cel,email) values('$name', '$end', '$cep', '$bair', '$cidade', '$estado', '$cel', '$email')";
$query = mysqli_query($conn, $sql) or die ("Erro");

 if (mysqli_affected_rows($conn)){
    echo " <script> window.alert('Cliente cadastrado com sucesso') </script>";
    echo " <script> location.href='index.html' </script>";
}
else{
    echo " <script> window.alert('Erro ao cadastrar cliente') </script>";
	 echo " <script> location.href='produtos.html' </script>";
}

?>