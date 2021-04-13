<?php 
$serve = 'localhost';
$nome = 'root';
$senha = 'root';
$banco = 'db_ods14';

$conn =mysqli_connect($serve,$nome,$senha,$banco);

if(!$conn){
        die("Conexão falhou: ".mysqli_connect_error());
    } else{
        mysqli_query( $conn, "SET NAMES 'utf8'" );
        mysqli_query( $conn, 'SET character_set_connection=utf8' );
        mysqli_query( $conn, 'SET character_set_client=utf8' );
        mysqli_query( $conn, 'SET character_set_results=utf8' );
    }
?>