<?php
class ProveeData {
	public static $tablename = "proveedor";



	public function ProveeData(){
		$this->idprovee = "";
		$this->nombre1 = "";
		$this->nombre2 = "";
		$this->apellido1 = "";
		$this->apellido2 = "";
		$this->nit = "";
		$this->dpi = "";
		$this->direccion = "";
		$this->iddepartamento = "";
		$this->idmunicipio = "";
		$this->telefono1 = "";
		$this->telefono2 = "";
		$this->idcatprecio = "";

	}

	public function add(){
		$sql = "insert into ".self::$tablename." (nombre1, nombre2, apellido1, apellido2, nit, dpi, direccion";
		$sql .= "iddepartamento, idmunicipio, telefono1, telefono2, idcatprecio)";		
		$sql .= "VALUES (\"$this->nombre1\",\"$this->nombre2\",\"$this->apellido1\",\"$this->apellido2\",\"$this->nit\",\"$this->dpi\",";
		$sql .="\"$this->direccion\",\"$this->iddepartamento\",\"$this->idmunicipio\",\"$this->telefono1\",\"$this->telefono2\",\"$this->idcatprecio\")";

		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where idprovee=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where idusuario=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto UserData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set nombre1=\"$this->nombre1\", nombre2=\"$this->nombre2\", apellido1=\"$this->apellido1\", apellido2=\"$this->apellido2\",";
		 $sql .="nit=\"$this->nit\", dpi=\"$this->dpi\", direccion=\"$this->direccion\", telefono1=\"$this->telefono1\", telefono2=\"$this->telefono2\", idcatprecio=\"$this->idcatprecio\", where idprovee=\"$this->idprovee\"";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set contrasena=\"$this->contrasena\" where idusuario=$this->idusuario";
		Executor::doit($sql);
	}


	public static function getById($id){
		$sql = "select * from ".self::$tablename." where idprovee=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ProveeData());

	}

	public static function updateById($id){
		$sql = "update ".self::$tablename." set nombre1=\"$this->nombre1\",nombre2=\"$this->nombre2\",apellido1=\"$this->apellido1\",apellido2=\"$this->apellido2\",username=\"$this->username\",where idusuario=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());

	}

	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where email=\"$mail\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());

	}

//funcionando el palki
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre1 like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());

	}

	

}

?>