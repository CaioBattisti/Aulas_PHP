<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
    <style type="text/css">
    label{
        display: inline-block;
        width: 100px;
    }
    </style>
</head>
<body>
    <form method="POST" action="#">
        <label for="usuario"> Usuário: </label>
        <input type="text" name="usuario" required />
        <br/>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" required />
        <br/>
        <input type="submit" value="Enviar" name="enviar" />
        <input type="reset" value="Limpar" />
    </form>
    <?php
        if(isset($_POST["enviar"]))
        {
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
            echo "Recebido $usuario e $senha <br/>";
            $cripto = MD5($senha);
            echo "Criptografada $cripto";
        } 
    ?>
</body>
</html>