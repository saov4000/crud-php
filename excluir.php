<?php

    $id = $_POST["id"];
    $con = mysqli_connect("127.0.0.1","root","","escola");
    $sql = "DELETE FROM aluno WHERE id=$id";
    
    mysqli_query($con, $sql);
    header("location:index.php");

?>