<?php
include 'includes/header.php';

// herencia

Class Persona
{
  protected $nombre;
  protected $apellidos;
  protected $email;
  protected $telefono;
  
  public function __construct($nombre, $apelldo, $email, $telefono)
  {
    $this->nombre = $nombre;
    $this->apellido = $apelldo;
    $this->email = $email;
    $this->telefono = $telefono;
  } 
  
  public function getInformacion()
  {
    echo "Nombre: " . $this->nombre . " " . $this->apellido . " " . "Email: " . $this->email;
  }
  public function getTelefono()
  {
    return $this->telefono;
  }
}

class Empleado extends Persona
{
  protected $codigo;
  protected $departamento;
  
  public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
  {
    parent::__construct($nombre, $apellido, $email, $telefono);
    $this->codigo = $codigo;
    $this->departamento = $departamento;
  }
}

class Proveedor extends Persona
{
  protected $empresa;
  
  public function __construct($nombre, $apellido, $email, $telefono, $empresa)
  {
    parent::__construct($nombre, $apellido, $email, $telefono);
    $this->empresa = $empresa;
  }
  
  public function getInformacion()
  {
    echo "Nombre: " . $this->nombre . " " . $this->apellido . " " . "Email: " . $this->email . ' de la empresa: ' . $this->empresa;
  }
}

$empleado = new Empleado('Juan', 'Perez', 'perez@p.com', 123123123, 123, 'TI');

$proveedor = new Proveedor('Pablo', 'Gonzalez', 'gonzalez@p.com', 123123123, 'MKT');

echo '<pre>';
var_dump($empleado);
echo '</pre><br>';
echo '<pre>';
var_dump($proveedor);
echo '</pre><br>';

$empleado->getInformacion();
echo '<br>';
$proveedor->getInformacion();
echo '<br>';
echo $proveedor->getTelefono();