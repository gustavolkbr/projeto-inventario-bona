<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Biblioteca</title>
</head>
<body>
    <div id="nav-superior">
        <h1>Sistema de Gerenciamento de Inventário</h1>
        <a href="index.php">Home</a>
        <a href="produtos.php">Produtos</a>
        <a href="categorias.php">Categorias</a>
    </div>
    <div id="principal">
        <div class="conteudo-produtos">
            <div class="cadastrar-produto">
                <form action="create_categoria.php" method="post" >
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nome do Produto</label>
                      <input name="nome_categoria" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nome do produto">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Descrição</label>
                      <input name="descricao_categoria" type="text" class="form-control" id="exampleInputPassword1" placeholder="Descrição do Produto">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            </div>
    </div>
    </div>
</body>
</html>