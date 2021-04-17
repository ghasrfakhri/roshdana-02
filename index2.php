<?php
$a = 0;
$b = 1;
$op = "";
if ($a != $b) {
    echo "Not Eq";
} else {
    echo "Eq";
}

switch ($op) {
    case '+':
    case 'jam':
    case 'sum':
        $result = $a + $b;
        break;
    case '-':
    case 'menha':
    case 'sub':
        $result = $a - $b;
        break;
    default:
        $result = "No Operator selected";

}

for ($i = 1; $i <= 10; $i++) {
echo $i;

}

while ($a != false) {
    $a = rand(0,20);
}
//for(  ; $a != false ;  ){
//
//}

do {
    //yrtyrtyrtr
    $a = rand(0,20);
} while ($a != false);


foreach ($ar as $k2 => $v) {
    echo $k2 . ": " . $v . "<br>";
}


function sum($a, $b, $c = 0)
{
    return $a + $b + $c;
}

