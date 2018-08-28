<?php  
class Mysql{
	private $host;
	private $bd;
	private $user;
	private $pass;
	private $cn;

	public function __construct(){
		$this->host = "localhost";
		$this->bd = "tienda";
		$this->user = "root";
		$this->pass = "";
		$this->connect();
	}

	public function connect(){
		$this->cn = mysqli_connect(
			$this->host,$this->user,$this->pass,$this->bd);
		if($this->cn === false){
			echo "Error en la conexion";
			exit();
		}
	}

	public function select($query){
		$rs = mysqli_query($this->cn,$query);
		if(!$rs){
			echo "Error en la consulta";
			exit();
		}
		else{
			$result = array();
			while($row = mysqli_fetch_array($rs)){
				$result[] = $row;
			}
			return $result;
		}
	}
}
?>