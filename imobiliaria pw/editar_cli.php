<?php
include("conexao.php");
 
 $prod = $_POST['pesquisa'];
 $sql = "Select * from clientes where nome like '%$prod%'";
  
 $query = mysqli_query($conn, $sql) or die ("Erro");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Loja </title>
</head>    

<body>
<div class="navbar">
  <a class="home" href="index.html"> Home</a> 
  <a href="altera.php"> Alterar</a> 
  <a href="exclui.php"> Excluir</a> 
 
  <form action="editar_cli.php" method="post">
    <input type="text" placeholder="Nome do Cliente" name="pesquisa" required>
    <button class="botao_pesquisa" type="submit" style="font-size: medium;">Procurar </button>
  </form>
  
</div>

<div class="corpo">
    <form action="altera.php" method="POST">
	<?php
            while($linha = mysqli_fetch_assoc($query)){?>
    
     <center> <h1>Altere seu Cliente!! </h1> </center>
	 
	  <label><b>Código </b></label> <br>
      <input type="text" class="texto" value="<?php echo $linha['codigo']?>" name="cod" placeholder="informe o código do produto"  required>  <br>
				
      <label><b>Nome </b></label> <br>
      <input type="text" class="texto" value="<?php echo $linha['nome']?>" name="prod" placeholder="informe o nome do produto"  required>  <br>
  
      <label ><b>Endereço</b></label> <br>
      <input type="text" class="texto" value="<?php echo $linha['ende']?>" name="ende" placeholder="informe a marca do produto"  required>  <br>
  
      <label><b>CEP</b></label> <br>
      <input type="text" class="texto" value="<?php echo $linha['cep']?>" name="cep" placeholder="informe o valor do produto"  required>  <br>
  
      <label ><b>Bairro</b></label> <br>
      <input type="text" class="texto" value="<?php echo $linha['bairro']?>" name="bairro" placeholder="informe o estoque do produto"  required>  <br>
      
      <label ><b>Estoque</b></label> <br>
      <input type="text" class="texto" value="<?php echo $linha['cidade']?>" name="cidade" placeholder="informe o estoque do produto"  required>  <br>

      <label ><b>Estoque</b></label> <br>
      <input type="text" class="texto" value="<?php echo $linha['estado']?>" name="estado" placeholder="informe o estoque do produto"  required>  <br>
      
      <label ><b>Estoque</b></label> <br>
      <input type="text" class="texto" value="<?php echo $linha['cel']?>" name="celular" placeholder="informe o estoque do produto"  required>  <br>

      <label ><b>Estoque</b></label> <br>
      <input type="text" class="texto" value="<?php echo $linha['email']?>" name="email" placeholder="informe o estoque do produto"  required>  <br>

  
   
      <button type="submit" class="botoes">Alterar</button>
  </form>
			 
  <form action="exclui.php" method="post">
      <button type="submit" class="botoes">Excluir Produto</button>
      <input type="hidden" class="texto" value="<?php echo $linha['codigo']?>" name="Codigo"<br>
</form> 

</div> 
    <?php }?>
</body>
</html> 