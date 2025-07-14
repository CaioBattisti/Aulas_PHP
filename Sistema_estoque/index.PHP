<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto - Sistema de Estoque</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            padding: 20px;
        }
        .formulario, .resultado {
            background: #fff;
            padding: 20px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
        }
        h2 {
            color: #333;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
        }
        .info {
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="formulario">
    <h2>Cadastro de Produto</h2>
    <form action="index.php" method="POST">
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" required>

        <label for="sku">SKU:</label>
        <input type="text" name="sku" required>

        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" required>

        <label for="preco">Preço de Venda (R$):</label>
        <input type="text" name="preco" required>

        <label for="validade">Data de Validade:</label>
        <input type="date" name="validade">

        <label for="custo">Custo de Aquisição (R$):</label>
        <input type="text" name="custo">

        <button type="submit">Cadastrar</button>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário
    $nome = htmlspecialchars($_POST["nome"]);
    $sku = htmlspecialchars($_POST["sku"]);
    $quantidade = (int) $_POST["quantidade"];
    $preco = (float) str_replace(',', '.', $_POST["preco"]);
    $validade = htmlspecialchars($_POST["validade"]);
    $custo = (float) str_replace(',', '.', $_POST["custo"]);

    // Simular uma baixa de 5 unidades no estoque
    $quantidade -= 5;
    if ($quantidade < 0) $quantidade = 0;

    // Produto está ativo se quantidade > 0
    $ativo = $quantidade > 0;
?>
    <div class="resultado">
        <h2>Produto Cadastrado</h2>
        <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        <p><strong>SKU:</strong> <?php echo $sku; ?></p>
        <p><strong>Quantidade Atual (após baixa de 5):</strong> <?php echo $quantidade; ?> unidades</p>
        <p><strong>Preço de Venda:</strong> R$ <?php echo number_format($preco, 2, ',', '.'); ?></p>
        <p><strong>Custo de Aquisição:</strong> R$ <?php echo number_format($custo, 2, ',', '.'); ?></p>
        <p><strong>Validade:</strong> <?php echo $validade ? $validade : "Não informada"; ?></p>
        <p><strong>Status:</strong>
            <?php echo $ativo ? '<span style="color:green;">Disponível</span>' : '<span style="color:red;">Indisponível</span>'; ?>
        </p>
    </div>
<?php } ?>

</body>
</html>
