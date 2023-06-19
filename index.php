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
    <h1>Lista de Alunos</h1>
    <a href="cadastro.php">Cadastrar</a>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Cidade</th>
        </tr>
        <?php
            $con = mysqli_connect("127.0.0.1","root","","escola");
            $sql = "SELECT * FROM aluno";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)) {
                $id = $row["id"];
                echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["nome"]."</td>
                    <td>".$row["sexo"]."</td>
                    <td>".$row["cidade"]."</td>
                    <td><a href='atualiza.php?id=$id'>Atualizar</a></td>
                    <td><a href='excluir.php?id=$id'>Apagar</a></td>
                </tr>";
            }
        ?>
    </table>
</body>
</html>