<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET['nome']) && $_GET['nome'] !='') {
            $Tarefa = array();

            $Tarefa['nome'] = $_GET['nome'];
}
        if (isset($_SESSION['descricao'])){
            $Tarefa = ['descricao'] = $_GET['descricao'];
        }else{
            $Tarefa['descricao'] = '';
}

include "Template.PHP"
//include "Template.PHP";
//session_destroy():
    ?>
</body>
</html>