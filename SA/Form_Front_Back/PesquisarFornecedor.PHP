<?php
require_once "../banco.PHP";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pesquisar Fornecedor</title>
</head>
<body>
    <h2>Pesquisar Fornecedor</h2>
    <form method="GET">
        <label>Pesquisar por:</label>
        <input type="text" name="termo" placeholder="ID ou Nome">
        <button type="submit">Pesquisar</button>
    </form>
    <br>

<?php
if (isset($_GET['termo']) && $_GET['termo'] !== "") {
    $termo = $_GET['termo'];
    $sql = "SELECT * FROM fornecedores WHERE id = :termo OR nome LIKE :nome";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":termo", $termo, PDO::PARAM_STR);
    $stmt->bindValue(":nome", "%$termo%", PDO::PARAM_STR);
    $stmt->execute();
    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($dados) {
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Telefone</th><th>Ações</th></tr>";
        foreach ($dados as $d) {
            echo "<tr>";
            echo "<td>{$d['id']}</td>";
            echo "<td>{$d['nome']}</td>";
            echo "<td>{$d['telefone']}</td>";
            echo "<td>
                    <a href='AlterarFornecedor.PHP?id={$d['id']}'>Alterar</a> |
                    <a href='ExcluirFornecedor.PHP?id={$d['id']}' onclick='return confirm(\"Deseja excluir?\")'>Excluir</a>
                  </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum fornecedor encontrado.";
    }
}
?>
</body>
</html>
