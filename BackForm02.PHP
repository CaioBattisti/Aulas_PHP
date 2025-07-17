<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET['Nome']) && isset($_GET["Idade"]))
        {
            echo "Recebido o Cliente ".$_GET['Nome'];
            echo " que tem ".$_GET['Idade']." anos";
        }
    ?>
</body>
</html>