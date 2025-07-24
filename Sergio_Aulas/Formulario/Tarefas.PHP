<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $Lista_Tarefas = array();
            if (isset($_GET['nome'])) {
                $_SESSION['Lista_Tarefas'] [] = $_GET['nome'];
            }
            if (isset($_SESSION['Lista_Tarefas'])){
                $Lista_Tarefas = $_SESSION['Lista_Tarefas'];
            }else{
                $Lista_Tarefas = arrat();
            }
        include "Template.PHP"
    ?>
</body>
</html>