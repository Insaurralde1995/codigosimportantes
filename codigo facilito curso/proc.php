<?php

$operacion= $_POST ['lista'];
echo "El resultado es: " ;
if (isset($_POST['c1']) && !empty ($_POST['c1']) &&
isset($_POST['c2']) && !empty ($_POST['c2']) &&
isset($_POST['c3']) && !empty ($_POST['c3']))
{
switch ($operacion)

{
    case "sumar":
    echo $_POST ['c1'] + $_POST ['c2'] + $_POST ['c3'];
    break;
    
    case "multiplicar":
    echo $_POST ['c1'] * $_POST ['c2'] * $_POST ['c3'];
    break;
    
    case "restar":
    echo $_POST ['c1'] - $_POST ['c2'] - $_POST ['c3'];
    break;
    
    case "dividir":
    echo $_POST ['c1'] / $_POST ['c2'] / $_POST ['c3'];
    break;

    default: "no se ha pido realizar la operación";

}
}else {
    echo "debes insertar todos los campos";
}
