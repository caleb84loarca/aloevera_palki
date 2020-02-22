<?php
class valesData {
	public static $tablename = "vale";

	public function valesData(){
     	$this->numvale = "";
	    $this->fechacompra = "";
		$this->pedido = "";
	    $this->idregion = "";
		$this->iddetallevale = "";
		$this->idrechazo = "";
		$this->idusuario = "";
		$this->idplanta = "";
		$this->iddepartamento = "";
		$this->idmunicipio = "";	
		$this->observacion = "";				
		
	}
	
	public function getVale(){ return valesData::getById($this->numvale);}
   // public function getAutor(){ return AutorData::getById($this->autor_id);}
	
	public function add(){
		$sql = "insert into ".self::$tablename." (nombre, autor_id, user_id, anio_edicion) ";
		$sql .= "value (\"$this->nombre\", \"$this->autor_id\", \"$this->user_id\",\"$this->anio_edicion\")";
		//print_r($sql);
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}


	
	public function update(){
		$sql = "update ".self::$tablename." set `numvale`=\"$this->numvale\",`fechacompra`=\"$this->fechacompra\",`pedido`=\"$this->pedido\",";
		$sql .="`idprovee`=\"$this->idprovee\",`idregion`=\"$this->idregion\",`iddetallevale`=\"$this->iddetallevale\",`idrechazo`=\"$this->rechazo\",";
		$sql .="`idusuario`=\"$this->idusuario\",`idplanta`=\"$this->idplanta\",`iddepartamento`=\"$this->iddepartamento\",`idmunicipio`=\"$this->idmunicipio\",";
		$sql .="`observacion`=\"$this->observacion\"";
		
		

		//print_r($sql);
		Executor::doit($sql);
	}	
	
		

	public static function getById($id){
		 $sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new LibrosData());
	}
	
		

	public static function getAllByDate($start,$end){
  $sql = "select * from ".self::$tablename." where date(anio_edicion) >= \"$start\" and date(anio_edicion) <= \"$end\"  order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new LibrosData());

	}
	
	public static function getidMax(){
		$sql = "select 	MAX(id) AS maxid from ".self::$tablename;
		$query = Executor::doit($sql);
		$found = null;
		$data = new LibrosData();
		
		while($r = $query[0]->fetch_array()){
			$data->id = $r['maxid'];
			$found = $data;
			break;
		}
		return $found;
	}	
	
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new valesData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new LibrosData());

	}


}

?>