<!DOCTYPE html>
<html>
<body>


<?php
// Está é a fórmula de Heron, para calcular área de um triângulo com base nos lados e o semiperímetro
function area($l1, $l2, $l3, $p2){
 $p = $p2/2;
$num = $p * ($p - $l1) * ($p-$l2) * ($p-$l3);
echo(sqrt($num));
}

echo area(4, 5, 3, 12);

?> 

</body>
</html>