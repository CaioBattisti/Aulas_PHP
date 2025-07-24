<?php
    session_start(); 
    if (isset($_GET['nome']) && $_GET['nome'] !='') {
        $Tarefa = array();

        $Tarefa['nome'] = $_GET['nome'];

    if (isset($_SESSION['descricao'])){
        $Tarefa = ['descricao'] = $_GET['descricao'];
        }else{
            $Tarefa['descricao'] = '';
        }
        
    if (isset($_GET['prazo'])){
        $Tarefa = ['prazo'] = $_GET['prazo'];
        }else{
            $Tarefa['prazo'] = '';
        }
            $Tarefa['prioridade'] = $_GET['prioridade'];

    if (isset($_GET['concluida'])){
        $Tarefa = ['concluida'] = $_GET['concluida'];
        }else{
            $Tarefa['concluida'] = '';
        }
    $_SESSION['Lista_Tarefas'] [] = $Tarefa;
}
    if (array_key_exists('Lista_Tarefas', $_SESSION)){
        $Lista_Tarefas = $_SESSION['Lista_Tarefas'];
        }else{
            $Lista_Tarefas = [];
        }

    include "Template.PHP"
    //include "Template.PHP";
    //session_destroy():
?>