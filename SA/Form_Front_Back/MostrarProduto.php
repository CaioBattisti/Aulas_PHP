<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados do Produto</title>
</head>
<body>
<?php
$arquivo = 'produtos_cadastrados.txt';

if (!file_exists($arquivo)) {
    echo "<p>Nenhum produto cadastrado ainda.</p>";
    exit;
}

$linhas = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (count($linhas) == 0) {
    echo "<p>Nenhum produto cadastrado ainda.</p>";
    exit;
}

echo '<h2>Produtos Cadastrados:</h2>';
echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>
        <th>Nome Produto</th>
        <th>Qtd Enviada (Caixas)</th>
        <th>Qtd Estoque (Caixas)</th>
        <th>Nome Fornecedor</th>
        <th>Lote</th>
        <th>Validade</th>
        <th>Data Fabricação</th>
        <th>Tipo Remédio</th>
      </tr>';

foreach ($linhas as $linha) {
    $dados = explode(" | ", $linha);
    echo '<tr>';
    foreach ($dados as $campo) {
        echo '<td>' . htmlspecialchars($campo) . '</td>';
    }
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>
