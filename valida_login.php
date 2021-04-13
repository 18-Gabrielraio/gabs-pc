<?php 
    $nomeee= $_POST['email'];
    $senhaaa=$_POST['pass'];

    $sqlll ="SELECT * FROM usuario WHERE email='$nomeee'";
    include('conexao.php');
    $resultad=mysqli_query($conn, $sqlll);
    $linha1=mysqli_fetch_array($resultad);
    mysqli_close($conn);
    if (!$linha1){
        echo($linha1);
        //echo("<script> alert('email erradao'); window.location.href='login.html';</script>");
    }else{
        if (password_verify($senhaaa,$linha1['senha'])) {
            session_start();
            $_SESSION['nome']=$linha1['nome_usuario'];
            echo("<script> window.location.href='index.php'; </script>");
        } else{
            echo("<script> alert('senha errada'); window.location.href='login.html';</script>");
        }
    }
?>