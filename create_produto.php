<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome_produto = $_POST["nome_produto"];
    $descricao_produto = $_POST["descricao_produto"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];
    $categoria_id = $_POST["categoria_id"];

    // inserindo na tabela
    $sql = "INSERT INTO produtos (nome_produto, descricao_produto, quantidade, preco, categoria_id) VALUES ('$nome_produto', '$descricao_produto','$quantidade','$preco','$categoria_id')";
    
    if($conn->query($sql) === true){
        header("Location: index.php"); //redireciona para a o index se der tudo certo
        exit();
    }else{
        echo "Erro: " . $sql . "<br>"; //retorna erro
    }
}

$conn->close();
?>