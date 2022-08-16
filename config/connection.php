<?php

$host = "localhost";
$dbname = "agenda";
$user = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    //ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // erro na conexao
    $error = $e->getMessage();
    echo "Erro: $error";
}


?>