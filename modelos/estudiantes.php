<?php
require 'Conexion.php';

class Producto extends Conexion{
    public $id_estudiante;
    public $nombre;
    public $apellido;
    public $fecha_nacimiento;
    public $numero_telefono;
    public $correo_electronico;



    public function __construct($args = [] )
    {
        $this->id_estudiante = $args['id_estudiante'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->fecha_nacimiento = $args['fecha_nacimiento'] ?? '';
        $this->numero_telefono = $args['numero_telefono'] ?? '';
        $this->correo_electronico = $args['correo_electronico'] ?? '';
        
    }

    public function guardar(){
        $sql = "INSERT INTO productos(nombre, apellido, fecha_nacimiento, numero_telefono, correo_electronico) values('$this->nombre','$this->apellido','$this->fecha_nacimiento','$this->numero_telefono','$this->correo_electronico')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}