<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 8/3/17
 * Time: 11:11 PM
 */

namespace App;


class Cliente
{
    protected $nombre;

    protected $apellido;

    protected $cedula;

    protected $email;

    protected $telefono;

    protected $direccion;

    protected $fechaNacimiento;

    protected $fechaInicio;

    protected $fechaFin;

    /**
     * Cliente constructor.
     *
     * @param $nombre
     * @param $apellido
     * @param $cedula
     * @param $email
     * @param $telefono
     * @param $direccion
     * @param $fechaNacimiento
     * @param $fechaInicio
     * @param $fechaFin
     */
    public function __construct($nombre, $apellido, $cedula, $email, $telefono = "", $direccion = "",
                                $fechaNacimiento = "", $fechaInicio = "", $fechaFin = "")
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cedula = $cedula;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
    }


    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * @param mixed $cedula
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param mixed $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * @return mixed
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * @param mixed $fechaInicio
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    }

    /**
     * @return mixed
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * @param mixed $fechaFin
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
    }

}