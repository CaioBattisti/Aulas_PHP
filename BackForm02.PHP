<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET['Nome']) && isset($_GET["Idade"]))
        {
            echo "Recebido o Cliente ".$GET['Nome'];
            echo " que tem ".$GET['Idade']." anos";
        }
    ?>
</body>
</html>