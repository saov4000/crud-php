<?php

    $id = $_GET["id"];

    $con = mysqli_connect("127.0.0.1","root","","escola");
    $sql = "SELECT * FROM aluno WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row["id"];
    $nome = $row["nome"];
    $sexo = $row["sexo"];
    $cidade = $row["cidade"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Atualização de Cadastro</h1>
    <div class="dados">
    <form action="atualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Nome:<br>
        <input type="text" name="nome" value="<?php echo $nome; ?>"><br>
        Sexo:<br>
        <input type="text" name="sexo" value="<?php echo $sexo; ?>"><br>
        Cidade:<br>
        <input type="text" name="cidade" value="<?php echo $cidade; ?>"><br>
        <input type="submit" value="ATUALIZAR">
    </form>
    </div>
    
</body>
</html>