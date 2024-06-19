<?php
include 'config.php';

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  // Verifica se há registros retornados
    echo '<table class="table table-bordered">';
    echo '<tr><th>ID</th><th>nome</th><th>descricao</th><th>quantidade</th><th>preco</th><th>categoria</th></tr>';
    while ($row = $result->fetch_assoc()) {  // Loop através de cada registro retornado
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["nome"] . '</td>';
        echo '<td>' . $row["quantidade"] . '</td>';
        echo '<td>' . $row["preco"] . '</td>';
        echo '<td>' . $row["categoria"] . '</td>';
        echo '<td>';
        echo '<a href="update.php?id=' . $row["id"] . '" class="btn btn-success">Editar</a> ';  // Link para editar
        echo '<a href="delete.php?id=' . $row["id"] . '" class="btn btn-danger">Excluir</a>';    // Link para deletar
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "0 resultados";  // Exibe mensagem se não houver registros
}

$conn->close();  // Fecha a conexão com o banco de dados
?>
