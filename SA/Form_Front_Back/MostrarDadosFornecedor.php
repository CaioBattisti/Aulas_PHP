<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados do Fornecedor</title>
    <link rel="stylesheet" type="text/css" href="CSS/SAEstilo.CSS">
    <style>
        table {
            margin: auto;
            border-collapse: collapse;
        }
        td {
            padding: 8px;
            border: 1px solid #ddd;
        }
        th {
            text-align: left;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 align="center">Dados Cadastrados do Fornecedor</h2>
    <table>
        <tr><th>Campo</th><th>Valor</th></tr>
        <tr><td>ID</td><td><?php echo htmlspecialchars($_POST["ID"]); ?></td></tr>
        <tr><td>Nome Fornecedor</td><td><?php echo htmlspecialchars($_POST["NomeFornecedor"]); ?></td></tr>
        <tr><td>Email</td><td><?php echo htmlspecialchars($_POST["Email"]); ?></td></tr>
        <tr><td>Telefone</td><td><?php echo htmlspecialchars($_POST["Telefone"]); ?></td></tr>
        <tr><td>Produto</td><td><?php echo htmlspecialchars($_POST["Produto"]); ?></td></tr>
        <tr><td>Transporte</td><td><?php echo htmlspecialchars($_POST["Transporte"]); ?></td></tr>
        <tr><td>Data Início Contrato</td><td><?php echo htmlspecialchars($_POST["InicioContrato"]); ?></td></tr>
        <tr><td>Data Final Contrato</td><td><?php echo htmlspecialchars($_POST["FinalContrato"]); ?></td></tr>
    </table>
    <div align="center" style="margin-top:20px;">
        <a href="EXFormulario02.PHP"><button>Voltar ao Cadastro</button></a>
    </div>
</body>
</html>
