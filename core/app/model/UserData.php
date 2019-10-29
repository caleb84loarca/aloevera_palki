<?php
class UserData {
	public static $tablename = "usuario";



	public function Userdata(){
		$this->nombre1 = "";
		$this->nombre2 = "";
		$this->apellido1 = "";
		$this->apellido2 = "";
		$this->username = "";
		$this->email = "";
		$this->contrasena = "";
		$this->image = "";
		$this->fechacreacion = "NOW()";
	}

	public function add(){
		$sql = "insert into usuario (nombre1,nombre2,apellido1,apellido2,username,email,contrasena,imagen,fechacreacion) ";
		$sql .= "value (\"$this->nombre1\",\"$this->nombre2\",\"$this->apellido1\",\"$this->apellido2\",\"$this->username\",\"$this->email\",\"$this->contrasena\",$this->created_at)";
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

// partiendo de que ya tenemos creado un objecto UserData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set nombre1=\"$this->name1\",nombre2=\"$this->name2\",apellido1=\"$this->lastname1\",apellido2=\"$this->lastname2\",username=\"$this->username\",email=\"$this->email\",password=\"$this->password\",idusuario=\"$this->idusuario\",idusuario=\"$this->idusuario\" where id=$this->idusuario";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where idusuario=$this->id";
		Executor::doit($sql);
	}


	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());

	}

	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where email=\"$mail\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());

	}


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