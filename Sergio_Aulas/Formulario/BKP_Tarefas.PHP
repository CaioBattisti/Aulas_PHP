<?php session_start(); ?>
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
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>

    <?php
        $Lista_Tarefas = array();
            if (isset($_GET['nome'])) {
                $_SESSION['Lista_Tarefas'] [] = $_GET['nome'];
    }
            $Lista_Tarefas = array();

            if (isset($_SESSION['Lista_Tarefas'])){
                $Lista_Tarefas = $_SESSION['Lista_Tarefas'];
    }
    ?>
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