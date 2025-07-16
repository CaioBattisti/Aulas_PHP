<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $estados = array("PR","SC","RS","RJ","MG","BA","RN","AM");
        echo "ORIGINAL: ";
        print_r ($estados);
        echo "<hr/>STRTOLOWER: Converte uma string para minusculas<br/>";
        for ($i = 0; $i < count($estados); $i++){
            $estados[$i] =strtolower($estados[$i]);
        }
        echo "STRTOLOWER: ";Print_r ($estados);
        echo "<hr/>SHIFT: Retira o primeiro elemento de um array<br/>";
        $rotaciona = array_shift($estados);
        echo "<hr/>POP: Extrai um elemento do final do array<br/>";
        array_pop($estados);
        echo "POP: ";Print_r ($estados);
        echo "<hr/>PUSH: Adiciona um ou mais elementos no final de um array<br/>";
        array_push($estados, "pr");
        echo "PUSH: "; print_r ($estados); 
    ?>
</body>
</html>