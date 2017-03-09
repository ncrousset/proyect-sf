<?php

namespace App\Controllers;

use App\JsonDb;
use App\Cliente;

class MainController
{

    protected $db;

    public function __construct()
    {
        $this->db = new JsonDb();
    }

    public function index($mensaje = null)
    {
        $clientes = $this->db->get();
        require_once __DIR__ . "/../../resources/list.php";
    }

    public function show()
    {
        if(!isset($_GET['id']))
            header("location: /");

        $id = $_GET['id'];
        $cliente = $this->db->get($id);

        if(!$cliente)
            header("location: /");

        require_once __DIR__ . "/../../resources/show.php";
    }

    public function add($mensaje = null)
    {
        require_once __DIR__ . "/../../resources/add.php";
    }

    public function edit($mensaje = null)
    {
        if(!isset($_GET['id']))
            header("location: /");

        $id = $_GET['id'];
        $cliente = $this->db->get($id);

        if(!$cliente)
            header("location: /");

        require_once __DIR__ . "/../../resources/edit.php";
    }

    public function delete()
    {
        if($_SERVER['REQUEST_METHOD'] != "POST")
            header("location: /");

        if(!is_null($_POST['key'])) {
          $response =  $this->db->remove($_POST['key']);
        }

        header("location: /");

    }

    public function save($clienteId = null)
    {
        if($_SERVER['REQUEST_METHOD'] != "POST")
            header("location: /");

        $cliente = new Cliente($_POST['nombre'], $_POST['apellido'], $_POST['cedula'],
            $_POST['email'], $_POST['telefono'], $_POST['direccion'], $_POST['fechaNacimiento'],
            $_POST['fechaInicio'], $_POST['fechaFin']);

        if(isset($_POST['_method'])) {
            if($_POST['_method'] == "PUT");

            $response = $this->db->edit($_POST['id'], $cliente);

            if($response["estatus"]) {
                header("location: /");
            }else {
                $this->edit($response["mensaje"]);
            }

        }else {
            $response = $this->db->insert($cliente);

            if($response["estatus"]) {
                header("location: /");
            }else {
                $this->add($response["mensaje"]);
            }
        }
    }

}

/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 9/3/17
 * Time: 1:23 AM
 */