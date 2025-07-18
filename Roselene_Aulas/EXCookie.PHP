<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        //Exemplo1: Cookie simples que dura uma Hora
        setcookie("Nome_Usuario","João Silva",time()+3600); //Expira em 1 hora(3600 segundos)
        echo "Cookie 'Nome_Usuario' criado com sucesso!";
        echo "<br/>";
        //Exemplo2: Cookie com mais opções
        setcookie("Preferencias_site","tema=escuro&idioma=pt_BR", time()+(86400 * 7),"/","",false,true);//86400 segundos = 1 dia
        echo "<br/>Cookie 'Preferencias_site' Criado com sucesso!"
    ?>
</body>
</html>