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
    <div class="cad">
        <button><a href="cadastro.php">Cadastrar</a></button>
    </div>
    <hr>
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
                    <td><button><a href='atualiza.php?id=$id'>Atualizar</a></button></td>
                    <td>";
                    ?>
                    <form action="excluir.php" method="post" onsubmit="return confirm('Tem certeza que deseja atualizar?','texto')">
                        <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                        <button type="submit"><a>Excluir</a></button>
                    </form>
                    <?php echo "</td></tr>";
            }
        ?>
    </table>
</body>
</html>