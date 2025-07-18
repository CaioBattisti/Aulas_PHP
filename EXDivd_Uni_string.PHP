<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $turma= "Turma de Desenvolvimento";
        echo "Turma: ".$turma."<br/>";
        $turma1 = explode(" ", $turma);
        echo "Turma1: "; Print_r ($turma1); echo "<br/>";
        $turma2 = implode("...", $turma1);
        echo "Turma2: $turma2 <br/>";
    ?>
</body>
</html>