<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        //Função usada para definir fuso horário padrão
        date_default_timezone_set('America/Los_Angeles');
        //Manipulando HTML e PHP
        $data_hoje = date ("d/m/Y" ,time());
    ?>
    <p align="center">Hoje e dia <?php echo $data_hoje ; ?>
    </p>
</body>
</html>