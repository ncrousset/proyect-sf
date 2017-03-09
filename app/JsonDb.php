<?php

namespace App;


class JsonDb
{
    const DB_NAME = __DIR__ . "/../storage/clientes.json";

    protected $clientes = [];

    public function __construct()
    {
        $archivo = file_get_contents(self::DB_NAME);
        $this->clientes = json_decode($archivo, true);
    }

    /**
     * @param null $id Cedula
     * @return array|mixed|void
     */
    public function get($id = null)
    {
        if(is_null($id)) return $this->clientes;

        $key = $this->validateUnico($id, "cedula");

        if(is_null($key))
            return false;

        return $this->clientes[$key];
    }

    public function set()
    {
        $json = json_encode($this->clientes);
        file_put_contents(self::DB_NAME, $json);
    }

    /**
     * Inserta un nuevo cliente al JSON
     *
     * @param Cliente $cliente
     * @return bool
     */
    public function insert(Cliente $cliente)
    {
        if(is_null($this->validateUnico($cliente->getCedula(), "cedula")) &&
            is_null($this->validateUnico($cliente->getEmail(), "email"))) {

            $nuevoRegistro = $this->prepararRegistroInsert($cliente);
            array_push($this->clientes, $nuevoRegistro);
            $this->set();
        }else {
            return ["estatus" => false, "mensaje" => "Hay algun registro con esta cedula o este email"];
        }

        return ["estatus" => true, "mensaje" => "Se a agregado un nuevo registro"];
    }

    /**
     * Edito un registro, utilizo la cedula como key
     *
     * @param $cedula
     * @param Person $person - nuevo registro a guardar
     */
    public function edit($cedula, Cliente $cliente)
    {
        $keyCliente = $this->validateUnico($cedula, "cedula");
        $validar = $this->validateUnico($cliente->getCedula(), "cedula");
        $validar2 = $this->validateUnico($cliente->getEmail(), "email");

        if(is_null($keyCliente))
            return ["estatus" => false, "mensaje" => "no existe registro con este key"];

        if(!is_null($validar) && $keyCliente != $validar) {
            return ["estatus" => false, "mensaje" => "ya existe un registro con esta cedula"];
        }

        if(!is_null($validar2) && $keyCliente != $validar2) {
            return ["estatus" => false, "mensaje" => "ya existe un registro con esta email"];
        }

        $this->clientes[$keyCliente] =  $this->prepararRegistroInsert($cliente);
        $this->set();

        return ["estatus" => true, "mensaje" => "cliente key:" . $cliente->getCedula() . " modificado"];
    }

    public function remove($cedula)
    {
        $keyCliente = $this->validateUnico($cedula, "cedula");

        if(is_null($keyCliente))
            return ["estatus" => false, "mensaje" => "no existe un registro con este key:" . $cedula];

        unset($this->clientes[$keyCliente]);
        $this->set();
    }

    private function prepararRegistroInsert(Cliente $cliente)
    {
        $registro = [
            "nombre" => $cliente->getNombre(),
            "apellido" => $cliente->getApellido(),
            "cedula" => $cliente->getCedula(),
            "email" => $cliente->getEmail(),
            "telefono" => $cliente->getTelefono(),
            "direccion" => $cliente->getDireccion(),
            "fechaNacimiento" => $cliente->getFechaNacimiento(),
            "fechaInicio" => $cliente->getFechaInicio(),
            "fechaFin" => $cliente->getFechaFin()
        ];

        return $registro;
    }

    /**
     * Valida si existe un registro, de no existir retorna null,
     * de existir retorna el key
     *
     * @param $valor
     * @param $key
     * @return mixed|null
     */
    private function validateUnico($valor, $key)
    {
       $encontrado = array_filter($this->clientes, function($cliente) use ($valor, $key) {
            if($cliente[$key] === $valor) return true;
        });

        if(empty($encontrado)) return null;

        return key($encontrado);
    }

}