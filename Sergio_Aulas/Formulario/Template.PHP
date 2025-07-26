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
            <legend>Nova tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome" />
            </label>
            <br>
            <br>
            <label>
                Descrição :
                <textarea name="descricao"></textarea>
            </label>
            <br>
            <br>
            <label>
                Prazo:
                <input type="text" name="parazo"/>
            </label>
            <br>
            <br>
        </fieldset>
        <fieldset>
            <legend>Prioridade</legend>
            <label>
                <input type="radio" name="prioridade" value="baixa" checked/>
                Baixa
                <input type="radio" name="prioridade" value="media"/>
                Média
                <input type="radio" name="prioridade" value="alta"/>
                Alta
            </label>
        </fieldset>
        <label>
            Tarefa concluida:
            <input type="checkbox" name="concluida" value="sim"/>
        </label>
            <input type="submit" value="Cadastrar"/>
    </form>
    <table>
        <tr>
            <th>Tarefas</th>
            <th>Descricao</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluida</th>
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