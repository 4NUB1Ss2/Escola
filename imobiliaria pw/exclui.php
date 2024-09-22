<?php

include("conexao.php");

$Cod = $_POST['Codigo'];

$sql = "DELETE FROM produtos WHERE codigo = '$Cod' ";

$query = mysqli_query($conn, $sql) or die ("Erro");

if ($query)
 {
     echo " <script> window.alert('Produto apagado com sucesso') </script>";
     echo " <script> location.href='index.html' </script>";
 }
 else{
    echo " <script> window.alert('Erro ao apagar produto') </script>";
    echo " <script> location.href='index.html' </script>";}
 
 
?>