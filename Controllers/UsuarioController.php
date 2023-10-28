<?php 

class UsuarioController{

	function __construct()
	{
		
	}

	
	function index(){
		require_once('Views/Persona/bienvenido.php');
	}


	function register(){
		require_once('Views/Persona/register2.php');
	}


	function save(){
		$usuario=new Usuario($_POST["idusuario"],$_POST["username"],$_POST["password"],$_POST["idpersona"],$_POST["idtipousuario"]);

		Usuario::save($usuario);
		$this->show();
	}

	function update(){
		$usuario = new Usuario($_POST['idusuario'],$_POST['username'],$_POST['password'],$_POST['idpersona'],$_POST['idtipousuario']);
		Usuario::update($usuario);
		$this->show();
	}

	function updateshow(){
		$idusuario=$_GET['idusuario'];
		$usuario=Usuario::searchById($idusuario);
		require_once('Views/Persona/updateshow2.php');
	}


	function show() {
		$listausuario=Usuario::all();
		require_once('Views/Persona/show2.php');
	}

	function delete(){
		$idusuario=$_GET['idusuario'];
		Usuario::delete($idusuario);
		$this->show();
	}

	function search(){
		$idusuario=$_POST['idusuario'];
		$usuario=Usuario::searchById($idusuario);
		if (!empty($_POST['idusuario'])) {
			$idusuario=$_POST['idusuario'];
			$usuario=Usuario::searchById($idusuario);
			$listausuario[]=$usuario;
			//var_dump($id);
			//die();
			require_once('Views/Persona/show2.php');
		}else{
			$listausuario=Usuario::all();

			require_once('Views/Persona/show2.php');
		
	}
}

	function error(){
		require_once('Views/Persona/error.php');
	}

}
 ?>