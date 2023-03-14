<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Cadastro de Produtos
                    </div>
                    <div class="card-body">
                        <form action="cadastro_produtos_banco.php" method="POST">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoria do Produto:</label>
                                <input type="text" class="form-control" id="categoria" name="categoria" required>
                            </div>
                            <div class="form-group">
                                <label for="quantidade">Quantidade:</label>
                                <input type="number" min="0" class="form-control" id="quantidade" name="quantidade" required>
                            </div>
                            <div class="form-group">
                                <label for="preco_compra">Preço de Compra:</label>
                                <input type="number" min="0" class="form-control" id="preco_compra" name="preco_compra" step=".01" required>
                            </div>
                            <div class="form-group">
                                <label for="preco_venda">Preço de Venda:</label>
                                <input type="number" min="0" class="form-control" id="preco_venda" name="preco_venda" step=".01" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <a href="index.php" type="submit" class="btn btn-primary">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
