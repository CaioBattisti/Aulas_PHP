<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        list($nome,$hobies,$curso) = file ("pessoais.txt");
        echo "Nome: $nome <br/>";
        echo "Hobies: $hobies <br/>";
        echo "Curso: $curso <br/>";
    ?>
</body>
</html>