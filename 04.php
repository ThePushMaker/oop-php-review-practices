<?php
include 'includes/header.php';

// constructores
class Empleado {
  public $nombre;
  public $apellidos;
  public $departamento;
  public $email;
  public $coidigo;
  
  public function __construct($nombre, $apellido, $departamento, $email, $coidigo) {
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->departamento = $departamento;
    $this->email = $email;
    $this->coidigo = $coidigo;
  }
}

$juan = new Empleado('Juan', 'De la Torre', 'TI', 'Lp5p4@example.com', 006);
$karen = new Empleado('Karen', 'Perez', 'MKT', 'Ap5p4@example.com', 007);

echo '<pre>';
var_dump($juan);
echo '</pre><br>';
echo '<pre>';
var_dump($karen);
echo '</pre>';
