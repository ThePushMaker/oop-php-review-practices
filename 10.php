<?php
include 'includes/header.php';

// herencia

class Empleado 
{
  protected $nombre;
  protected $apellido;
  protected $email;
  protected $telefono;
  protected $codigo;
  protected $departamento;
  
  public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->telefono = $telefono;
    $this->codigo = $codigo;
    $this->departamento = $departamento;
  }
  
  public function mostrarInformacion()
  {
    echo "Nombre: " . $this->nombre . " " . $this->apellido . " " . "Email: " . $this->email;
  }
}

class Proveedor
{
  protected $nombre;
  protected $apellido;
  protected $email;
  protected $telefono;
  protected $empresa;
  
  public function __construct($nombre, $apelido, $email, $telefono, $empresa)
  {
    $this->nombre = $nombre;
    $this->apelido = $apelido;
    $this->email = $email;
    $this->telefono = $telefono;
    $this->empresa = $empresa;
  }
  
  public function mostrarInformacion()
  {
    echo "Nombre: " . $this->nombre . " " . $this->apellido . " " . "Email: " . $this->email;
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

$empleado->mostrarInformacion();
echo '<br>';
$proveedor->mostrarInformacion();