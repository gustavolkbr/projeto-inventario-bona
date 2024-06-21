projeto CRUD - sistema de inventario

aula de desenvolvimento web - 1

Leonardo Kobus = FRONTEND

Gustavo Linkevick Brasileiro = BACKEND
Jonathan Felipe Kuss = BACKEND
Kauan Silva = BACKEND

considerações:

    por algum motivo a gente conseguiu fazer o sistema funcionar em apenas uma unica maquina, quando tentamos baixar os codigos do repositorio git, ou
    entao compartilhar por outros locais, dava esse erro na hora de testar o sistema (mesmo configurando cada maquina para rodar igual o "original")

    Fatal error: Uncaught mysqli_sql_exception: Cannot add or update a child row: a foreign key constraint fails (inventario.produtos, CONSTRAINT fk_categoria FOREIGN KEY (categoria_id) REFERENCES categorias (id)) in C:\xampp\htdocs\trabalho\trabalho\create_produto.php:14 Stack trace: #0 C:\xampp\htdocs\trabalho\trabalho\create_produto.php(14): mysqli->query('INSERT INTO pro...') #1 {main} thrown in C:\xampp\htdocs\trabalho\trabalho\create_produto.php on line 14


    segue abaixo o link para um video no youtube com o sistema funcionando

    https://www.youtube.com/watch?v=UMW5LnQ76CQ