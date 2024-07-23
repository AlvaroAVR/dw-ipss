<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoModel extends Model
{
    use HasFactory;
    private $id;
    private $nombre;
    private $fechaInicio;
    private $estado;
    private $responsable;
    private $monto;

    public function __construct()
    {
        //constructor para poder instanciar el objeto
    }

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getFechaInicio(){
        return $this->fechaInicio;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function getResponsable(){
        return $this->responsable;
    }
    
    public function getMonto(){
        return $this->monto;
    }

    public function setId($_n){
        $this->id = $_n;
    }

    public function setNombre($_n){
        $this->nombre = $_n;
    }

    public function setFechaInicio($_n){
        $this->fechaInicio = $_n;
    }

    public function setEstado($_n){
        $this->estado = $_n;
    }

    public function setResponsable($_n){
        $this->responsable = $_n;
    }
    
    public function setMonto($_n){
        $this->monto = $_n; 
    }

}