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
        echo "STRTOLOWER: "; print_r ($estados);
        echo "<hr/>SHIFT: Retira o primeiro elemento de um array<br/>";
        $rotaciona = array_shift($estados);
        echo "SHIFT: "; print_r ($estados);
        echo "<hr/>POP: Extrai um elemento do final do array<br/>";
        array_pop($estados);
        echo "POP: "; print_r ($estados);
        echo "<hr/>PUSH: Adiciona um ou mais elementos no final de um array<br/>";
        array_push($estados, "pr");
        echo "PUSH: "; print_r ($estados);
        echo "<hr/>REVERSE: Retorna um array com os elementos em ordem inversa<br/>";
        $inverso = array_reverse($estados);
        echo "REVERSE: "; print_r ($inverso);
        echo "<hr/>SORT: Ordena um array<br/>";
        sort($estados);
        echo "SORT: "; print_r ($estados);
        echo "<hr/>SLICE: Extrai uma parcela de um array<br/>";
        $divisor = array_slice($estados, 1, 2);
        echo "SLICE: "; print_r ($divisor); echo "<br/>";
    ?>
</body>
</html>