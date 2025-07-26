<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Gerenciamento de Tarefas</title>
</head>
<body>
    <h1>Gerenciamento de Tarefas</h1>
    <form method="GET" action="Tarefas.PHP">
        <fieldset>
            <legend>Nova tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome" />
            </label>
            <br><br>
            <label>
                Descrição:
                <textarea name="descricao"></textarea>
            </label>
            <br><br>
            <label>
                Prazo:
                <input type="date" name="prazo" />
            </label>
            <br><br>
        </fieldset>
        <fieldset>
            <legend>Prioridade</legend>
            <label>
                <input type="radio" name="prioridade" value="baixa" checked />
                Baixa
                <input type="radio" name="prioridade" value="media" />
                Média
                <input type="radio" name="prioridade" value="alta" />
                Alta
            </label>
        </fieldset>
        <label>
            Tarefa concluída:
            <input type="checkbox" name="concluida" value="sim" />
        </label>
        <input type="submit" value="Cadastrar" />
    </form>
    <table>
        <tr>
            <th>Tarefas</th>
            <th>Descrição</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
        </tr>
        <?php foreach ($lista_tarefas as $Tarefa) : ?>
            <tr>
                <td><?php echo htmlspecialchars($Tarefa['nome']); ?></td>
                <td><?php echo htmlspecialchars($Tarefa['descricao']); ?></td>
                <td><?php echo htmlspecialchars($Tarefa['prazo']); ?></td>
                <td><?php echo htmlspecialchars($Tarefa['prioridade']); ?></td>
                <td><?php echo htmlspecialchars($Tarefa['concluida']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>