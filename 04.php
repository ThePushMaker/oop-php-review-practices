<?php
include 'includes/header.php';

// constructores
class Empleado {
  public $nombre;
  public $apellido;
  public $departamento;
  public $email;
  public $coidigo;
  
  public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $coidigo) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
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
