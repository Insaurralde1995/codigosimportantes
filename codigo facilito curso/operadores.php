<?php

#OPERADORES

//nos permiten hacer operaciones

//existen 7 tipos

/* operadores de aritmética
adición (+)
substracción(-)
Multiplicación(*)
División(/)
Porcentaje(%)
*/

$adicion= 4+4;
$multiplicacion =$adicion *3;
/*

echo $multiplicacion;
echo "<br>";

#Operador de asignacion

//asignacion (=)
echo "<br>";
$valor1= "hola";
echo "<br>";
$valor2= 15;
echo "<br>";

echo $valor1;
echo "<br>";
echo $valor2;

*/
#Operador de cadena

//punto (.)

$texto= "yo tengo" . 20 . "años";

//echo $texto;
//echo "<br>";

#Operador de comparación
/*
Igual (==)
identico (===)
Diferente (!= o <>)
no identicos (!==)
menor que (<)
mayor que (>)
menor o igual que (<=)
Mayor o igual que (>=)
*/

/*
echo (6>=4);
echo "<br>";
echo (5 == 11);
*/

#Operador de prueba de errores
//arroba (@)
//echo 'Hola';
//@ define ();
#Operadores de incremento y decremento

$variable =3;

echo ++$variable;
echo $variable;

#operadores de logica

//Y (&& o and) - Devuelve 1 si ambos operadores son 1
//O (|| o or)-Devuelve 1 si algún operador es 1
//O exclusvio (xor)- Devuelve 1 si solo 1 operando es 1

echo ((2 == 2)&&(2 !=1));
echo ((3==3) or (4 !=4));