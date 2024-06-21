<?php
include 'config.php';  // Inclui a configuração do banco de dados

// Verifica se o ID do produto foi enviado via GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Consulta SQL para buscar os dados do produto pelo ID
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $produto = $result->fetch_assoc();
    } else {
        echo "Produto não encontrado.";
        exit();
    }
} else {
    echo "ID do produto não fornecido.";
    exit();
}

// Consulta para buscar categorias
$sqlCategorias = "SELECT * FROM categorias";
$resultCategorias = $conn->query($sqlCategorias);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Editar Produto</title>
</head>
<body>
    <div id="nav-superior">
        <h1>Editar Produto</h1>
        <a href="index.php">Home</a>
        <a href="produtos.php">Produtos</a>
        <a href="categorias.php">Categorias</a>
    </div>
    <div id="principal">
        <div class="conteudo-produtos">
            <div class="cadastrar-produto">
                <form action="update_process.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
                    <div class="form-group">
                      <label for="nome_produto">Nome do Produto</label>
                      <input name="nome_produto" type="text" class="form-control" id="nome_produto" value="<?php echo $produto['nome_produto']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="descricao_produto">Descrição</label>
                      <input name="descricao_produto" type="text" class="form-control" id="descricao_produto" value="<?php echo $produto['descricao_produto']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="quantidade">Quantidade</label>
                      <input name="quantidade" type="number" class="form-control" id="quantidade" value="<?php echo $produto['quantidade']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="preco">Preço</label>
                      <input name="preco" type="text" class="form-control" id="preco" value="<?php echo $produto['preco']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="categoria_id">Categoria</label>
                      <select name="categoria_id" class="form-control" id="categoria_id">
                        <?php
                        if ($resultCategorias->num_rows > 0) {
                            while ($row = $resultCategorias->fetch_assoc()) {
                                $selected = ($row['ID'] == $produto['categoria_id']) ? 'selected' : '';
                                echo '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['nome_categoria'] . '</option>';
                            }
                        } else {
                            echo '<option value="">Nenhuma categoria encontrada</option>';
                        }
                        ?>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php $conn->close(); // Fecha a conexão com o banco de dados ?>
t