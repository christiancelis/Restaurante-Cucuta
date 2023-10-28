<?php 
  header('Content-Type: application/json');

  function mostrar_estudiante(){
  	$estudiante = array(
  		"nombre"=> "Falcao",
  		"apellido"=> "Garcia",
  		"Ciudad"=> "Cucúta"
  	);
  	return $estudiante;
  }

  echo json_encode(mostrar_estudiante());
 ?>