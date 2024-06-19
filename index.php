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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Lista de Produtos</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome do Produto</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'config.php';

                            // Consulta SQL para buscar todos os produtos
                            $sql = "SELECT p.id, p.nome_produto, p.descricao_produto, p.quantidade, p.preco, c.nome_categoria
                                    FROM produtos p
                                    LEFT JOIN categorias c ON p.categoria_id = c.ID";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr>';
                                    echo '<th scope="row">' . $row['id'] . '</th>';
                                    echo '<td>' . $row['nome_produto'] . '</td>';
                                    echo '<td>' . $row['descricao_produto'] . '</td>';
                                    echo '<td>' . $row['quantidade'] . '</td>';
                                    echo '<td>' . $row['preco'] . '</td>';
                                    echo '<td>' . $row['nome_categoria'] . '</td>';
                                    echo '<td>
                                            <form action="update_process.php" method="post" style="display: inline-block;">
                                                <input type="hidden" name="id" value="' . $row['id'] . '">
                                                <button type="submit" class="btn btn-success">Editar <i class="fas fa-edit"></i></button>
                                            </form>
                                            <form action="delete.php" method="get" style="display: inline-block;">
                                                <input type="hidden" name="id" value="' . $row['id'] . '">
                                                <button type="submit" class="btn btn-danger" onclick="return confirm(\'Tem certeza que deseja deletar este produto?\')">Deletar <i class="far fa-trash-alt"></i></button>
                                            </form>
                                          </td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo '<tr><td colspan="7">Nenhum produto encontrado.</td></tr>';
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
