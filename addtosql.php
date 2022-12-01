<?php 
    include 'sql-connection.php';
    $info   = mysqli_real_escape_string($conn,$_POST['info']);
    $source = mysqli_real_escape_string($conn,$_POST['source']);
    
        $sql = "INSERT INTO data (info, source) VALUES ('$info', '$source');";
        mysqli_query($conn, $sql);

        header("Location: ./index.php");