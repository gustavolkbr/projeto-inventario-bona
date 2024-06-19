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
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nome do Produto</th>
                      <th scope="col">Descrição</th>
                      <th scope="col">Quantidade</th>
                      <th scope="col">Preço</th>
                      <th scope="col">Categoria</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Bootstrap 4 CDN and Starter Template</td>
                      <td>Cristina</td>
                      <td>Cristina</td>
                      <td>Cristina</td>
                      <td>2.846</td>
                      <td>
                        <button type="button" class="btn btn-success">Atualizar<i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt">Deletar</i></button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Bootstrap Grid 4 Tutorial and Examples</td>
                      <td>Cristina</td>
                      <td>3.417</td>
                      <td>3.417</td>
                      <td>3.417</td>
                      <td>
                        <button type="button" class="btn btn-success">Atualizar<i class="fas fa-edit"></i></button>
                        <button><a href="delete.php?id="></a></button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Bootstrap Flexbox Tutorial and Examples</td>
                      <td>Cristina</td>
                      <td>1.234</td>
                      <td>1.234</td>
                      <td>1.234</td>
                      <td>
                        <button type="button" class="btn btn-success">Atualizar<i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-danger">Deletar<i class="far fa-trash-alt"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
    </div>
</body>
</html>