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
        </label>
        <label>
            Descrição (Opcional):
            <Input type="text" name="descricao" />
        </label>
        <label>
            Prazo (Opcional):
            <Input type="text" name="prazo" />
        </label>

            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>
    <table>
        <tr>
            <th>Tarefas</th>
        </tr>
        <?php foreach ($Lista_Tarefas as $Tarefa) : ?>
            <tr>
                <td><?php echo $Tarefa; ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>