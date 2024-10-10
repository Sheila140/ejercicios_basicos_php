<?PHP
$num1 = $_GET ['numero1'];
$num2 = $_GET ['numero2'];
$num3 = $_GET ['numero3'];

if(($num1 > $num2) && ($num2 > $num3)){
    echo "$num1 es el numero mayor";
}elseif(($num2> $num3) && ($num2 > $num1)){
    echo "$num2 es el numero mayor";
}elseif(($num3 > $num2) && ($num3 > $num1)){
    echo "$num3 es el numero mayor";
}
?>