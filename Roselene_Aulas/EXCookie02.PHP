<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
<?php
    //Verifica se o cookie 'Nome_Usuario' existe
    if (isset($_COOKIE["Nome_Usuario"])){
        $nome = $_COOKIE["Nome_Usuario"];
        echo "Bem-vindo de volta, ".htmlspecialchars($nome)."!";
    }else{
        echo "Olá, visitante! Parece que você é novo por aqui.";
    }
    echo "<br/>";
    
    //Recuperando o cookie de preferencias
    if (isset($_COOKIE["Preferencias_site"])){
        $Preferencias = $_COOKIE["Preferencias_site"];
        echo "Suas Preferencias são: ".htmlspecialchars($Preferencias);
    }
?>
</body>
</html>