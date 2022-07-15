<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'users';

$conn = mysqli_connect( $host, $user, $password, $database );

$pesquisar = $_POST[ 'search-field' ];
$sql_select = "SELECT * FROM dados WHERE email LIKE '%$pesquisar%' OR nome LIKE '%$pesquisar%' OR sobrenome LIKE '%$pesquisar%' OR rg LIKE '%$pesquisar%' OR cpf LIKE '%$pesquisar%' LIMIT 5";
$resultado = mysqli_query( $conn, $sql_select );

while ( $rows = mysqli_fetch_array( $resultado ) ) {
    echo $rows[ 'email' ].'<br>';
}
?>