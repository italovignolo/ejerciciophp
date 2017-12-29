<?php
include('Persona.php');
$obj = new Persona();
$obj->setNombre("Jorgito");
$obj->setApellido("Miguel");
echo json_encode($obj);

?>
