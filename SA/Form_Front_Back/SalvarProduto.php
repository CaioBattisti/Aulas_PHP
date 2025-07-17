<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
<?php
// Arquivo onde os dados serão salvos
    $arquivo = 'produtos.txt';

// Captura os dados do formulário
    $nome = $_POST['Nome_Produto'];
    $qtd_enviada = $_POST['Qntd_Enviada'];
    $qtd_estoque = $_POST['Qntd_Estoque'];
    $fornecedor = $_POST['Nome_Fornecedor'];
    $lote = $_POST['Lote'];
    $validade = $_POST['Validade'];
    $fabricacao = $_POST['Data_Fabricacao'];
    $tipo = $_POST['Tipo_Remedio'];

// Monta a linha de dados separada por |
    $linha = "$nome | $qtd_enviada | $qtd_estoque | $fornecedor | $lote | $validade | $fabricacao | $tipo\n";

// Salva no arquivo
    file_put_contents($arquivo, $linha, FILE_APPEND);

// Redireciona para exibir os dados
    header("Location: MostrarProduto.php");
    exit;
?>
</body>
</html>