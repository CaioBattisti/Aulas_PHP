<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    unset($_SESSION["Usuario_Logado"]); //Remove apenas a variavel 'Usuario_Logado'
    echo "variavel 'Usuario_Logado' removida da sesssão <br/>"
    ?>
<?php
    session_unset(); //Remove todas as variaveis da sessão
    echo "todas as variaveis da sessao foram removidas."
?>
</body>
</html>