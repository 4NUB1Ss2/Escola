<?PHP

include_once("conexao.php");

$codigo = $_POST['cod'];
$produto = $_POST['prod'];
$marc = $_POST['marca'];
$val = $_POST['valor'];
$estoq = $_POST['estoque'];

 
$sql ="UPDATE produtos set codigo= '$codigo', nome='$produto', marca='$marc',valor='$val', estoque='$estoq' WHERE codigo='$codigo'"; 
$query = mysqli_query($conn, $sql) or die ("Erro");
 
 if (mysqli_affected_rows($conn)){
    echo " <script> window.alert('Produto Editado') </script>";
    echo " <script> location.href='index.html' </script>";
}
else{
    echo " <script> window.alert('Erro ao editar produto') </script>";
    echo " <script> location.href='produtos.html' </script>";
}
 
?>
