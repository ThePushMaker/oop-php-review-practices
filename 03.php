<?php
include 'includes/header.php';


// Atributos
class Empleado {
  public $nombre;
  public $departamento;
  public $apellidos;
  public $email;
  public $coidigo;
}

$empleado = new Empleado;
$empleado2 = new Empleado;

$empleado->nombre= 'Juan'; 
$empleado->apellidos= 'De la Torre';

$empleado2->nombre= 'Karla';
$empleado2->apellidos= 'Perez';

echo '<pre>';
var_dump($empleado);
echo '</pre>';

echo '<pre>';
var_dump($empleado2);
echo '</pre>';