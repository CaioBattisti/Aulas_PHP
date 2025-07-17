<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados do Fornecedor</title>
</head>
<body>
    <h2>Dados Cadastrados do Fornecedor</h2>
    <table>
        <tr><th>Campo</th><th>Valor</th></tr>
        <tr><td>ID</td><td><?php echo ($_POST["ID"]); ?></td></tr>
        <tr><td>Nome Fornecedor</td><td><?php echo ($_POST["NomeFornecedor"]); ?></td></tr>
        <tr><td>Email</td><td><?php echo ($_POST["Email"]); ?></td></tr>
        <tr><td>Telefone</td><td><?php echo ($_POST["Telefone"]); ?></td></tr>
        <tr><td>Produto</td><td><?php echo ($_POST["Produto"]); ?></td></tr>
        <tr><td>Transporte</td><td><?php echo ($_POST["Transporte"]); ?></td></tr>
        <tr><td>Data Início Contrato</td><td><?php echo ($_POST["InicioContrato"]); ?></td></tr>
        <tr><td>Data Final Contrato</td><td><?php echo ($_POST["FinalContrato"]); ?></td></tr>
    </table>
    <div>
        <a href="SaFornecedor.HTML"><button>Voltar ao Cadastro</button></a>
    </div>
</body>
</html>