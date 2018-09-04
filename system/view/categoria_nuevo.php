<?php  
require_once "../library/Mysql.php";
$bd = new Mysql();
$accion = $_REQUEST["accion"];
if($accion==""){
	$codigo = "";
	$nombre = "";
	$modo = "insertar";
	if(isset($_REQUEST["modo"])){
		$modo = $_REQUEST["modo"];
		$id = $_REQUEST["codigo"];
		$nombre = $_REQUEST["nombre"];	
		if($modo=="insertar"){
			$sql = "insert into categoria (descripcion) values ('".$nombre."')";
			//echo $sql;
			$bd->insert($sql);
			header("Location: categoria_index.php");
		}
		else if($modo=="actualizar"){
			$sql = "update categoria set descripcion='".$nombre."' where id_cat='".$id."'";
			$bd->select($sql);
			header("Location: categoria_index.php");
		}
	}
}
elseif($_REQUEST["accion"]=="editar"){//Editar
	$codigo = $_REQUEST["codigo"];
	$sql = "select * from categoria where id_cat='".$codigo."'";
	$rs = $bd->select($sql);
	$nombre = $rs[0]["descripcion"];
	echo $codigo;
	echo $nombre;
	$modo = "actualizar";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Categoria nuevo</title>
	<script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../js/categoria.js"></script>	
</head>
<body>
<form id="frmPrincipal">
	<div>
		<label>Id</label>
		<input type="text" name="codigo" id="codigo" value="<?php echo $codigo;?>">
	</div>
	<div>
		<label>Nombre Categoria</label>
		<input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>">
	</div>
	<div>
		<button type="button" id="agregar">Agregar</button>
		<button type="button" id="salir">Salir</button>
		<input type="hidden" name="modo" id="modo" value="<?php echo $modo;?>">
		<input type="hidden" name="accion" id="accion">
		<!--Modo: insertar,actualizar-->
		<!--Accion: nuevo-->
	</div>
</form>
</body>
</html>