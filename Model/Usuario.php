<?php

class Usuario
{
	private $idusuario;
	private $username;
	private $password;
	private $idpersona;
	private $idtipousuario;
	
	

	function __construct($idusuario,$username,$password,$idpersona,$idtipousuario){
		$this->setIdusuario($idusuario);
		$this->setUsername($username);
		$this->setPassword($password);
		$this->setIdpersona($idpersona);
		$this->setIdtipousuario($idtipousuario);
	}

	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setIdusuario($idusuario){
		$this->idusuario = $idusuario;
	}

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $username;
	}


	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getIdpersona(){
		return $this->idpersona;
	}

	public function setIdpersona($idpersona){
		$this->idpersona = $idpersona;
	}

	public function getIdtipousuario(){
		return $this->idtipousuario
		;
	}

	public static function save($usuario){
		$db=Db::getConnect();
		//var_dump($alumno);
		//die();
		

		$insert=$db->prepare('INSERT INTO usuario VALUES (:idusuario,:username,:password,:idpersona,:idtipousuario)');
		$insert->bindValue('idusuario',$usuario->getIdusuario());
		$insert->bindValue('username',$usuario->getUsername());
		$insert->bindValue('password',$usuario->getPassword());
		$insert->bindValue('idpersona',$usuario->getIdpersona());
		$insert->bindValue('idtipousuario',$usuario->getIdtipousuario());

		$insert->execute();
	}

	public static function all(){
		$db=Db::getConnect();
		$listausuario=[];

		$select=$db->query('SELECT * FROM usuario order by idusuario');

		foreach($select->fetchAll() as $usuario){
			$listausuario[]=new Usuario($usuario['idusuario'],$usuario['username'],$usuario['password'],$usuario['idpersona'],$usuario['idtipousuario']);
		}
		return $listausuario;
	}

	public static function searchById($idusuario){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM usuario WHERE idusuario=:idusuario');
		$select->bindValue('idusuario',$idusuario);
		$select->execute();

		$usuarioDb=$select->fetch();


		$usuario = new Usuario ($usuarioDb['idusuario'],$usuarioDb['username'], $usuarioDb['password'], $idpersonaDb['idpersona'],$usuarioDb['idtipousuario']);
		//var_dump($persona);
		//die();
		return $usuario;
	}


		public static function update($usuario){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE usuario SET username=:username, password=:password, idpersona=:idpersona, idtipousuario=:idtipousuario WHERE idusuario=:idusuario');
		$update->bindValue('idusuario',$usuario->getIdusuario());
		$update->bindValue('username', $usuario->getUsername());
		$update->bindValue('password',$usuario->getPassword());
		$update->bindValue('idpersona',$usuario->getIdpersona());
		$update->bindValue('idtipodocumento',$usuario->getIdtipousuario());
		
		$update->execute();
	}

	public static function delete($idusuario){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE FROM usuario WHERE idusuario=:idusuario');
		$delete->bindValue('idusuario',$idusuario);
		$delete->execute();		
	}
}
?>