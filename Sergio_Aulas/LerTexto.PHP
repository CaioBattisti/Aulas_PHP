<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $texto = file_get_contents("texto.txt");
        echo nl2br($texto);
        var_dump($texto);
    ?>
</body>
</html>