<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   include('includes/conexao.php');
   $sql = "SELECT * FROM cidade";
   //executa a consulta
   $result = mysqli_query($con, $sql);
   //retorna apenas ma linha
   //$row = mysqli_fetch_array($result);

   ?>

   <h1>Consulta de cidades</h1>
   <table align ="center" border="1" width = "500">
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Estado</th>
    </tr>
    <?php //mysqli_fetch_array lê uma linha por vez
    while ($row = mysqli_fetch_array ($result)){
        echo "<tr>";
        echo "<td>". $row ['id']."</td>";
        echo "<td>". $row['nome']."</td>";
        echo "<td>". $row['estado']."</td>";
        echo "</tr>";
    }
    ?>
      <a href="index.html"><span class="">Voltar</span></a>
</table>
</body>
</html>