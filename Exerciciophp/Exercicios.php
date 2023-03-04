<?php
$nome = $_POST['nome'];
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$n3 = $_POST['num3'];
$n4 = $_POST['num4'];
$media = ($n1 + $n2 + $n3 + $n4) / 4;

if ($media >= 6) {
    echo "Parábens $nome você foi <span style ='color: blue;'>Aprovado</span><br>";
    echo "Sua média foi de: $media";
}

else{
    echo "Infelizmene $nome você foi <span style ='color: red;'>Reprovado</span><br>";
    echo "Sua média foi de: $media";
}

    echo "<br> <br> SUAS NOTAS<br>
           Nota 1: $n1 <br>
           Nota 2: $n2 <br>
           Nota 3: $n3 <br>
           Nota 4: $n4 <br>
           Média: $media "
            
?>