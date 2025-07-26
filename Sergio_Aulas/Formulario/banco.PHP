<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'caio_battisti';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (!$conexao) {
    die("Problemas para conectar no banco. Verifique os dados: " . mysqli_connect_error());
}

function buscar_tarefas($conexao) {
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);

    if (!$resultado) {
        die("Erro ao buscar tarefas: " . mysqli_error($conexao));
    }

    $Tarefas = array();
    while ($Tarefa = mysqli_fetch_assoc($resultado)) {
        $Tarefas[] = $Tarefa;
    }
    return $Tarefas;
}

function gravar_tarefa($conexao, $Tarefa) {
    $nome = mysqli_real_escape_string($conexao, $Tarefa['nome']);
    $descricao = mysqli_real_escape_string($conexao, $Tarefa['descricao']);
    $prioridade = mysqli_real_escape_string($conexao, $Tarefa['prioridade']);
    $prazo = mysqli_real_escape_string($conexao, $Tarefa['prazo']);
    $concluida = mysqli_real_escape_string($conexao, $Tarefa['concluida']);

    $sqlGravar = "
        INSERT INTO tarefas
        (nome, descricao, prioridade, prazo, concluida)
        VALUES
        (
            '$nome',
            '$descricao',
            '$prioridade',
            '$prazo',
            '$concluida'
        )
    ";

    if (!mysqli_query($conexao, $sqlGravar)) {
        die("Erro ao gravar tarefa: " . mysqli_error($conexao));
    }
}
?>