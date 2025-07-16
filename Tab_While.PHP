<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Tabuada</title>
</head>
<body>
<?php
$tabuada = 1;

    while ($tabuada <= 10) {
        echo "<strong>Tabuada do $tabuada:</strong><br>";
        
        $i = 1;
        while ($i <= 10) {
            $resultado = $tabuada * $i;
            echo "$tabuada X $i = $resultado<br>";
            $i++;
        }

        echo "<br>"; // espaço entre as tabuadas
        $tabuada++;
    }
?>
</body>
</html>