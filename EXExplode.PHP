<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        foreach (file("Livros.txt") as $livro) {
            list($titulo, $autor) = explode(",",$livro);
    ?>
        <p>Título: <?= $titulo ?>, Autor: <?= $autor ?> </p>
    <?php     
        }
    ?>
</body>
</html>