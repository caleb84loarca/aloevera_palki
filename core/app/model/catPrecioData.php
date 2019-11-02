<?php
class catPrecioData {
	public static $tablename = "categoriaprecio";



	public function catPrecioData(){
		$this->idcatprecio = "";
		$this->categoriaprecio = "";
        $this->idmedida = "";
        $this->valor = "";
	}

	public function add(){
		$sql = "insert into `usuario`(`nombre1`, `nombre2`, `apellido1`, `apellido2`, `username`, `email`, `contrasena`, `idtipouser`, `fechacreacion`)";
		$sql .= "VALUES (\"$this->nombre1\",\"$this->nombre2\",\"$this->apellido1\",\"$this->apellido2\",\"$this->username\",\"$this->email\",\"$this->contrasena\",\"$this->idtipouser\",\"$this->fechacreacion\")";

		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where idusuario=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where idusuario=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto MuniData previamente utilizamos el contexto
	public function update(){
		$sql = "update `".self::$tablename."` set `nombre1`=\"$this->nombre1\", `nombre2`=\"$this->nombre2\", `apellido1`=\"$this->apellido1\", `apellido2`=\"$this->apellido2\",";
		 $sql .="`nit`=\"$this->nit\", `dpi`=\"$this->dpi\", `direccion`=\"$this->direccion\", `telefono1`=\"$this->telefono1\", `telefono2`=\"$this->telefono2\", `idcatprecio`=\"$this->idcatprecio\", where `idprovee`=\"$this->idprovee\"";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set contrasena=\"$this->contrasena\" where idusuario=$this->idusuario";
		Executor::doit($sql);
	}


	public static function getById($id){
		$sql = "select * from ".self::$tablename." where iddepto=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new MuniData());

	}

	public static function updateById($id){
		$sql = "update ".self::$tablename." set nombre1=\"$this->nombre1\",nombre2=\"$this->nombre2\",apellido1=\"$this->apellido1\",apellido2=\"$this->apellido2\",username=\"$this->username\",where idusuario=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new MuniData());

	}

	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where email=\"$mail\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new MuniData());

	}

//funcionando el palki
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new MuniData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre1 like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new MuniData());

	}

	

}

?>