<?php

    $nomeee=$_POST['nome'];
    $email=$_POST['email'];
    $endereco=$_POST['cep'];
    $senhaaa=trim($_POST['senha']);
    $nick_user=$_POST['nick'];
    $telefone=$_POST['telefone'];
    $data_nasc=$_POST['data'];
    include('conexao.php');
    // executar o comando sql
    $senhacripto =password_hash($senhaaa, PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuario (email, endereco, nome_usuario, senha, nick_usuario, telefone_usuario, data_nasc) VALUES ('$email', '$endereco', '$nomeee', '$senhacripto', '$nick_user', '$telefone', '$data_nasc')";
    if(mysqli_query($conn, $sql)){
        mysqli_close($conn);
        //echo("<script> alert('Enviado com sucesso muito obrigado :D'); window.location.href='index.php';</script>");
    } else{
        echo "error: ".$sql."<br>".mysqli_error($conn);
        mysqli_close($conn);
    };
?>