<?php

$servername = "localhost"; //padrão - server local
$database = "curso_estoque"; //alterar conforme o nome do seu banco de dados
$username = "root"; //padrão - root
$password = ""; //senha de conexão do banco de dados
//Create conection
$conexao = mysqli_connect($servername, $username, $password, $database);
?>