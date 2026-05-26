<?php

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";

    $conn = new mysqli($host,$user,$pass,$db);

    if($conn->connect_error){
        die("Erro na conexão!");
    }else{
        // echo "<p> Banco: OK! </p>";
        echo "<script> console.log('Banco: OK!') </script>";
    };


?>