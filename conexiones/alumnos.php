<?php
require 'conexion_db.php';

class Alumnos extends Conexion{
    public $id_alumno;
    public $alu_nombre1;
    public $alu_nombre2;
    public $alu_apellido1;
    public $alu_apellido2;
    public $alu_fecha_nac;
    public $alu_tel;
    public $alu_email;

    public function __construct($args = [])
    {
        $this-> id_alumno = $args['id_alumno'] ?? null;
        $this-> alu_nombre1 = $args['alu_nombre1'] ?? '';
        $this-> alu_nombre2 = $args['alu_nombre2'] ?? '';
        $this-> alu_apellido1 = $args['alu_apellido1'] ?? '';
        $this-> alu_apellido2 = $args['alu_apellido2'] ?? '';
        $this-> alu_fecha_nac = $args['alu_fecha_nac'] ?? '';
        $this-> alu_tel = $args['alu_tel'] ?? '';
        $this-> alu_email = $args['alu_email'] ?? '';
    }
    public function guardar(){
        $sql= "INSERT INTO alumnos(id_alumno,alu_nombre1,alu_nombre2,alu_apellido1,alu_apellido2,alu_fecha_nac,alu_tel,alu_email) values('$this->id_alumno','$this->alu_nombre1','$this->alu_nombre2','$this->alu_apellido1','$this->alu_apellido2','$this->alu_fecha_nac','$this->alu_tel','$this->alu_email')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
?>