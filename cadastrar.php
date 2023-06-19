<?php
    if(isset($_POST["nome"]) && isset($_POST["sexo"]) && isset($_POST["cidade"])){
        $nome = $_POST["nome"];
        $sexo = $_POST["sexo"];
        $cidade = $_POST["cidade"];
        $con = mysqli_connect("127.0.0.1","root","","escola");
        $sql = "INSERT INTO aluno VALUES(0,'$nome','$sexo','$cidade')";
        mysqli_query($con, $sql);
        header("location:index.php");
    }
?>