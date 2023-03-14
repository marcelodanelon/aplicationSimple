<?php
    include "conexao.php";

    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $preco_compra = $_POST['preco_compra'];
    $preco_venda = $_POST['preco_venda'];

    $slq = "insert into produtos (nome,categoria,quantidade,preco_compra,preco_venda) values ('$nome', '$categoria','$quantidade','$preco_compra','$preco_venda')";

    mysqli_query($conexao,$slq);

    header('location:index.php');
?>