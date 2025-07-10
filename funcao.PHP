<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        # index 0123456789012345
        $name = "Stefanie Hatcher";
        $length = strlen($name);
        $cmp = strcmp($name, "Brian Le");
        $index = strpos($name, "e");
        $first = substr($name, 9 , 5);
        $name = strtoupper($name);
        echo "Original: $name<br>";
        echo "Comprimento: $length<br>";
        echo "Comparação com 'Brian Le': $cmp<br>";
        echo "Índice da primeira letra 'e': $index<br>";
        echo "Substring a partir do índice 9 (5 caracteres): $first<br>";
    ?>
</body>
</html>