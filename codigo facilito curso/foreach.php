<?php

#bucle foreach

$predefinido = array("elemento1","elemento2");

foreach ($predefinido as $elementos)
{

    echo $elementos. "<br>";


}

//array personalizado o asociativo

$asoci= array ("clave1"=>"elemento1","clave2"=>"elemento2");

foreach ($asoci as $claves => $elemento)
{
    echo $claves. " = ".$elemento. "<br>";
}