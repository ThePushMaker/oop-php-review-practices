<?php
include 'includes/header.php';

// static
class Empleado {
  protected static $nombre;
  public $apellido;
  public $departamento;
  public $email;
  public $coidigo;
  
  public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $coidigo)
  {
    self::$nombre = $nombre;
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
  
  public static function getEmpleado()
  {
    echo "Desde método estático";
  }
  
  public static function getNombre()
  {
    return self::$nombre;
  }
}

Empleado::getEmpleado();

$juan = new Empleado('Juan', 'De la Torre', 'TI', 'Lp5p4@example.com', 006);
echo '<br>';
echo $juan::getNombre();

echo '<pre>';
var_dump($juan);
echo '</pre><br>';