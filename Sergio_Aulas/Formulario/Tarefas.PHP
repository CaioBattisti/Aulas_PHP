<?php
session_start();
include "banco.PHP"; // Certifique-se de que o arquivo banco.PHP está configurado corretamente

if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $Tarefa = array();

    $Tarefa['nome'] = $_GET['nome'];
    $Tarefa['descricao'] = isset($_GET['descricao']) ? $_GET['descricao'] : '';
    $Tarefa['prazo'] = isset($_GET['prazo']) ? $_GET['prazo'] : '';
    $Tarefa['prioridade'] = isset($_GET['prioridade']) ? $_GET['prioridade'] : 'baixa';
    $Tarefa['concluida'] = isset($_GET['concluida']) ? $_GET['concluida'] : 'nao';

    // Grava a tarefa no banco de dados
    gravar_tarefa($conexao, $Tarefa);
}

$lista_tarefas = buscar_tarefas($conexao);
include "Template.PHP";
?>