<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $valores = array("Caio Luiz Battisti","16","H","103");
        list($usuario, $idade, $genero, $qi) = $valores;
        echo "Usuários:".$usuario."<br/>";
        echo "Idade:".$idade."<br/>";
        echo "Gênero:".$genero."<br/>";
        echo "QI:".$qi."<br/>";
    ?>
</body>
</html>