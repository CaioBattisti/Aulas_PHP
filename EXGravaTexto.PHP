<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $texto = file_get_contents("texto.txt");
        echo nl2br($texto)."<hr/>";
        $texto = $texto. " extra";
        echo nl2br($texto)."<hr/>";
        file_get_contents("texto.txt", $texto);
    ?>
</body>
</html>