<?php
include 'includes/header.php';

// métodos
class Empleado {
  public $nombre;
  public $apellido;
  public $departamento;
  public $email;
  public $coidigo;
  
  public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $coidigo)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->departamento = $departamento;
    $this->email = $email;
    $this->coidigo = $coidigo;
    
    // $this->nombreEmpleado();
  }
  
  
  public function nombreEmpleado() 
  {
    echo $this->nombre . " " . $this->apellido . '<br>';
  }
  public function departamentoEmpleado() 
  {
    return $this->departamento;
  }
}

$juan = new Empleado('Juan', 'De la Torre', 'TI', 'Lp5p4@example.com', 006);
// $juan->nombreEmpleado();

$karen = new Empleado('Karen', 'Perez', 'MKT', 'Ap5p4@example.com', 007);
// $karen->nombreEmpleado();

echo $juan->nombreEmpleado();
echo $karen->nombreEmpleado();

$departamento1 =$juan->departamentoEmpleado();
echo $departamento1;

echo '<pre>';
var_dump($juan);
echo '</pre><br>';
echo '<pre>';
var_dump($karen);
echo '</pre>';

