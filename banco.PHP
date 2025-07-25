<?php
    $bdServidor = '127.0.0.1';
    $bdUsuario = 'root'
    $bdSenha = '';
    $bdBanco = 'caio_battisti';
    $conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);
        if (mysqli_connect_errno($conexao)) {
            echo "Problemas para conectar no banco. Verifique os Dados!";
            die();
        }
        function buscar_tarefas($conexao){
            $sqlBusca = 'SELECT * FROM tarefas';
            $resultado = mysqli_query($conexao, $sqlBusca);
            $Tarefas = array();
            while ($Tarefa = mysqli_fetch_assoc($resultado)) {
                $Tarefas[] = $Tarefa;
            }
        return $Tarefas;
        }
        function gravar_tarefa($conexao, $Tarefa){
            sqlGravar = "
            INSERT INTO tarefas
            (nome, descricao, prioridade, prazo, concluida)
            VALUES
            (
                '{$Tarefa['nome']}',
                '{$Tarefa['descricao']}',
                '{$Tarefa['prioridade']}',
                '{$Tarefa['prazo']}',
                '{$Tarefa['conclusao']}'
            )    
            ";
        }
?>