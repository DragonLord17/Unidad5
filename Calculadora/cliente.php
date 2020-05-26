<form action="" method="post">
    <input type="text" name="n" value="" placeholders="Escribe aquí:"><br>
    <input type="text" name="n2" value="" placeholders="Y aquí también:"><br>
    
    <input type="submit" name="a" value="SUMA">
    <input type="submit" name="m" value="MULTIPLICAR">
    <input type="submit" name="d" value="DIVIDIR">
    <input type="submit" name="s" value="RESTA">
</form>

<?php

if(isset($_POST['a']))
{
    $n = $_POST['n'];
    $n2 = $_POST['n2'];
    $add = $n+$n2;
    echo "La suma es: ".$add;
}
if(isset($_POST['m']))
{
    $n = $_POST['n'];
    $n2 = $_POST['n2'];
    $m = $n*$n2;
    echo "La multiplicación es: ".$m;
}
if(isset($_POST['d']))
{
    $n = $_POST['n'];
    $n2 = $_POST['n2'];
    $d = $n/$n2;
    echo "La división es: ".$d;
}
if(isset($_POST['s']))
{
    $n = $_POST['n'];
    $n2 = $_POST['n2'];
    $s = $n-$n2;
    echo "La resta es: ".$s;
}















require_once('lib/nusoap.php');

/*$cliente = new nusoap_client('http://localhost/Calculadora/servicio.php');*/
//$cliente = new nusoap_client('http://localhost/Calculadora/servicio.php');
$cliente = new nusoap_client('http://localhost/Calculadora/servicio.php');

/*$resultado = $cliente -> call("calculadora",  array( "x" => "3", "y" => 4, "operacion" => "multiplica"));*/
$resultado = $cliente -> call('calculadora', array( 'x' => '3', 'y' => 4, 'operacion' => 'multiplica'));

//echo 'hola';
//$resultado = 12;
echo $resultado;

//print_r $resultado;

//var_dump($resultado);
//print json_encode($resultado);

//print implode(", ", $resultado);    //prints 1, 2, 3
//print join(',', $resultado);

//echo implode(" ",$resultado);

//$myJSON=json_encode($resultado);
//echo($myJSON);
















?>


































