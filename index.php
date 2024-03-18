<?php
declare(strict_types=1);
require('./formulario.php');

//Instanciar el formulario
$formulario = new Form($_REQUEST['precio'] ?? '0', $_REQUEST['nombreProducto'] ?? '');

// $formulario->setMethod('POST');

//Cargar la vista
require('./pages/vista.php');