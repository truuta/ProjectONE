<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'users';

$email = $_POST['email_name'];
$senha = $_POST['senha_name'];
$nome = $_POST['nome_name'];
$sobrenome = $_POST['sobrenome_name'];
$rg = $_POST['rg_name'];
$cpf = $_POST['cpf_name'];

$mysqli = new mysqli($host, $user, $password, $database );

if ( !$mysqli ) {
    die( 'Connection failed: ' . mysqli_connect_error() );
}

$sql = "INSERT INTO dados (email, senha, nome, sobrenome, rg, cpf) VALUES ('$email', '$senha', '$nome', '$sobrenome', '$rg', '$cpf')";
if ( mysqli_query( $mysqli, $sql ) ) {
header('Location: /projectone/login.php');
die();
}
else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($mysqli);
}

mysqli_close( $mysqli );
?>