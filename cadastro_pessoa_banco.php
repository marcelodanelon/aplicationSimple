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
    $foto = $_FILES['foto']['name'];

    $pasta = "img/";

    $partes = explode(".",$foto); 
    $nomeNovo =  round(microtime(true)) . ".". end($partes); 

    move_uploaded_file($_FILES["foto"]["tmp_name"],$pasta . $nomeNovo);

    $slq = "insert into clientes (cpf,nome,rua,numero,bairro,cidade,estado,email,telefone,senha,foto) values ('$cpf', '$nome','$rua','$numero','$bairro','$cidade','$estado','$email','$telefone','$senha','$nomeNovo')";

    mysqli_query($conexao,$slq);

    header('location:index.php');
?>