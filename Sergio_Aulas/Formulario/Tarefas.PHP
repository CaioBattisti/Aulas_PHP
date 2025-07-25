<?php
    session_start();

    if (isset($_GET['nome']) && $_GET['nome'] != '') {
       $Tarefa = array();

       $Tarefa['nome'] = $_GET['nome'];

    if(isset($_GET['descricao'])) {
            $Tarefa['descricao'] = $_GET['descricao'];
        }else{
            $Tarefa['descricao'] = '';
            }
    if(isset($_GET['prazo'])) {
        $Tarefa['prazo'] = $_GET['prazo'];
        }else{
            $Tarefa['prazo'] = '';
            }
        $Tarefa['prioridade'] = $_GET['prioridade'];

    if(isset($_GET['concluida'])) {
        $Tarefa['concluida'] = $_GET['concluida'];
        }else{
            $Tarefa['concluida'] = 'nao';
            }
    $_SESSION['Lista_Tarefas'][] = $Tarefa;
}
    $lista_tarefas = buscar_tarefas($conexao);
    include "Template.PHP"
    //include "Template.PHP";
    //session_destroy():
?>