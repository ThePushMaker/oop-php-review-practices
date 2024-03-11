<?php
include 'includes/header.php';

include './DB.php';


// comunicar 2 clases 
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
  
  public function getNombre()
  {
    return $this->nombre . '<br>';
  }
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }
}

$juan = new Empleado('Juan', 'De la Torre', 'TI', 'Lp5p4@example.com', 006);

$nombre = $juan->getNombre();
echo $nombre;

$db = new DB($nombre);

var_dump($db);
echo '<br>';
$db->guardar();