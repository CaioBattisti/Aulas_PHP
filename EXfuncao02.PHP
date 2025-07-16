<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $vogais = array("a","e","i","o","u",
                        "A","E","I","O","U");
        echo "Hello World of PHP<br/>";
        $cons = str_replace($vogais, "", "Hello World of PHP");
        echo "Consoantes:".$cons,"<br/>";
        //       012345678901
        $test = "Hello World! \n";
        print "Posição da Letra 'o' :";
        print strpos($test , "o"). "<br/>";
        print "Posição da Letra 'o' após 5° :";
        print strpos($test, "o", 5). "<hr/>";
        $message = "Troca letra uma a uma";
        echo $message. "<br/>";
        $new_message = strtr($message, 'abcdef', '123456');
        echo "Criptogrando: ".$new_message."<br/>";
        $new_message = strtr($message, '123456', 'abcdef');
        echo "Descriptografando: ".$new_message."<br/>";
    ?>
</body>
</html>