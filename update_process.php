<?php
include 'config.php';  // Inclui a configuração do banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome_produto = $_POST["nome_produto"];
    $descricao_produto = $_POST["descricao_produto"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];
    $categoria_id = $_POST["categoria_id"];

    // Verifica se todas as variáveis foram definidas
    if (!empty($id) && !empty($nome_produto) && !empty($descricao_produto) && !empty($quantidade) && !empty($preco) && !empty($categoria_id)) {
        // Atualiza os dados na tabela produtos
        $sql = "UPDATE produtos SET nome_produto='$nome_produto', descricao_produto='$descricao_produto', quantidade='$quantidade', preco='$preco', categoria_id='$categoria_id' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");  // Redireciona para a página principal se a atualização for bem-sucedida
            exit();
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;  // Exibe um erro se a atualização falhar
        }
    } else {
        echo "Erro: Todos os campos devem ser preenchidos.";
    }
}

$conn->close();  // Fecha a conexão com o banco de dados
?>
