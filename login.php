<?php

session_start();

if (isset($_SESSION['cpf'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $senha = md5($senha);

    include 'conexao.php';

    $sql = "select * from clientes where cpf='$cpf'";
    $resul = mysqli_query($conexao,$sql);

    while($cliente=mysqli_fetch_assoc($resul)){
        $cpfBanco=$cliente['cpf'];
        $senhaBanco=$cliente['senha'];

        if (($cpf == $cpfBanco) && ($senha == $senhaBanco)) {
            $_SESSION['cpf'] = $cpf;
            header("Location: index.php");
            exit();
        }
    }

    $erro = "CPF ou senha inválidos";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Tela de Login
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group">
                                <label for="cpf">CPF:</label>
                                <input type="text" class="form-control" name="cpf" id="cpf">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" name="senha" id="senha">
                            </div>
                            <?php if (isset($erro)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $erro; ?>
                            </div>
                            <?php } ?>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
