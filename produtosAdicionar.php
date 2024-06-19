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
                <form action="create_produto.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nome do Produto</label>
                      <input name="nome_produto" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nome do produto">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Descrição</label>
                      <input name="descricao_produto" type="text" class="form-control" id="exampleInputPassword1" placeholder="Descrição do Produto">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Quantidade</label>
                      <input name="quantidade" type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantidade deste produto">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Preço</label>
                      <input name="preco" type="text" class="form-control" id="exampleInputPassword1" placeholder="Valor do Produto">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Categoria</label>
                      <select name="categoria_id" class="form-control" id="categoria_id">
                        <?php
                        // Inclui o arquivo de configuração do banco de dados
                        include 'config.php';
                        
                        // Consulta SQL para buscar categorias
                        $sql = "SELECT * FROM categorias";
                        $result = $conn->query($sql);
                        
                        // Loop para exibir opções de categorias
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value="' . $row['ID'] . '">' . $row['nome_categoria'] . '</option>';
                            }
                        } else {
                            echo '<option value="">Nenhuma categoria encontrada</option>';
                        }
                        
                        // Fecha conexão
                        $conn->close();
                        ?>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>
