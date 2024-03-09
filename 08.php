<?php
include 'includes/header.php';

// modificadores de acceso
class Empleado {
  protected $nombre;
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
  }
  
  public function obtenerNombre()
  {
    return $this->nombre . '<br>';
  }
  public function cambiarNombre($nombre)
  {
    $this->nombre = $nombre;
  }
}

$juan = new Empleado('Juan', 'De la Torre', 'TI', 'Lp5p4@example.com', 006);

// echo $juan->nombre;
echo $juan->obtenerNombre();

$juan->cambiarNombre('Juanito');
echo $juan->obtenerNombre();

echo '<pre>';
var_dump($juan);
echo '</pre><br>';

