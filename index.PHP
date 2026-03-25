<?php
include ("conexao.PHP");
$sql = "SELECT * FROM produtos ORDER BY id Desc";
$result = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang = "pt-br">
   <head>
    <title>INGRIDIYS</title>
   </head>
   <body>
    <h1>Cadastro de produtos</h1>

    <form action="salvar.php" method="post">
    <label>nome</label>
    <input type="text" name="nome" required>
    
    </form>
   </body>