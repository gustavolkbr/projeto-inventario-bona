<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome_categoria = $_POST["nome_categoria"];
    $descricao_categoria = $_POST["descricao_categoria"];

    // inserindo na tabela
    $categoria = "INSERT INTO categorias (nome_categoria, descricao_categoria) VALUES ('$nome_categoria', '$descricao_categoria')";
    
    if($conn->query($categoria) === true){
        header("Location: index.php"); //redireciona para a o index se der tudo certo
        exit();
    }else{
        echo "Erro: " . $categoria . "<br>"; //retorna erro
    }
}

$conn->close();
?>