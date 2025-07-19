<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
<?php
//Inicia a sessão
    session_start();
//Armazena dados na sessão
    $_SESSION["Usuario_Logado"] = "admin";
    $_SESSION["Carrinho_Compras"] = array("Produto_A" => 2,"Produto_B" => 1);
    $_SESSION["Ultimo_Acesso"] = date("Y-m-d H:i:s");
    echo "Dados da sessão armazenados com sucesso!";
//Recuperando dados da sessão
    if (isset($_SESSION["Usuario_Logado"])){
        echo "<br>Usuario Logado: ".htmlspecialchars($_SESSION["Usuario_Logado"]);
    }
?>
</body>
</html>