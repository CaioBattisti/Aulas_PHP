<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Gerenciamento de Tarefas</title>
</head>
<body>
    <h1>Gerenciamento de Tarefas</h1>
<!--Aqui irá o restante do código -->
    <form>
        <fieldset>
            <legend>Nova Tarefa</legend>
        <label>
            Tarefa:
            <Input type="text" name="nome" />
            <br/>
        </label>
        <label>
            Descrição (Opcional):
            <Input type="text" name="descricao" />
            <br/>
        </label>
        <label>
            Prazo (Opcional):
            <Input type="text" name="prazo" />
            <br/>
        </label>
            <fieldset>
                <legend>Prioridade:<legend>
                    <label>
                        <input type="radio" name="prioridade" value="baixa" checked />
                        Baixa
                        <input type="radio" name="prioridade" value="media" checked />
                        Média
                        <input type="radio" name="prioridade" value="Alta" checked />
                        Alta
                    </label>
            </fieldset>
            <label>
                Tarefa Concluída:
                <input type="checkbox" name="concluida" value="sim" />
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>
    <table>
        <tr>
            <th>Tarefas</th>
            <th>Descricao</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>concluida</th>
        </tr>
        <?php foreach ($Lista_Tarefas as $Tarefa) : ?>
            <tr>
                <td><?php echo $Tarefa['nome']; ?> </td>
                <td><?php echo $Tarefa['descricao']; ?> </td>
                <td><?php echo $Tarefa['prazo']; ?> </td>
                <td><?php echo $Tarefa['prioridade']; ?> </td>
                <td><?php echo $Tarefa['concluida']; ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>