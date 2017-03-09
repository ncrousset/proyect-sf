<?php

include "vendor/autoload.php";

use App\Controllers\MainController;


$accion = isset($_GET['accion']) ? $_GET['accion'] : null;


if($accion == "list" || is_null($accion)) {
    (new MainController())->index();
} elseif ($accion == "show") {
    (new MainController())->show();
} elseif ($accion == "add") {
    (new MainController())->add();
} elseif ($accion == "edit") {
    (new MainController())->edit();
} elseif ($accion == "delete") {
    (new MainController())->delete();
} elseif ($accion == "save") {
    (new MainController())->save();
}



//$json = new JsonDb();
//$cliente = new Cliente("Rudys", "Acosta", "031-0495445-8", "tito8@gmail.com");
//$json->insert($cliente);
//var_dump($json->edit("031-0495445-3", $cliente));
//$json->remove("031-0495445-5");

//var_dump($json->get());

// echo __DIR__;