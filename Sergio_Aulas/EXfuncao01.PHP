<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        # rand - Gera um Inteiro Aleatório
        $sorteio = rand( 0 , 5 );
        echo "Sorteado: $sorteio <hr/>";
        #array_merge - Combina um ou mais arrays
        #range - cria um array contendo uma faixa de elementos
        #(Inicio,fim, passo)
        $vetor = array_merge( range( 0 , 10 ),
                            range( $sorteio, 10, 2),
                            array( $sorteio ));
        print_r($vetor);
        echo "<hr/>";
        #Embaralha
        shuffle($vetor);
        print_r($vetor);
        echo "<hr/>";
        foreach( $vetor as $valor )
        {
            echo 'O valor ', $valor , ' tem 3 elementos. <br/>';
        }
    ?>
</body>
</html>