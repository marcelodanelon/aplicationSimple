<?php
    include "conexao.php";

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $senha = md5($senha);

    $slq = "insert into clientes (cpf,nome,rua,numero,bairro,cidade,estado,email,telefone,senha) values ('$cpf', '$nome','$rua','$numero','$bairro','$cidade','$estado','$email','$telefone','$senha')";

    mysqli_query($conexao,$slq);

    header('location:index.php');
?>