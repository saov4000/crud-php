<?php

if(isset($_POST["id"])){
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $cidade = $_POST["cidade"];
    $con = mysqli_connect("127.0.0.1","root","","escola");
    $sql = "UPDATE aluno SET nome='$nome', sexo='$sexo', cidade='$cidade' WHERE id=$id";
    
    mysqli_query($con, $sql);
    header("location:index.php");
}
?>