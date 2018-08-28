<?php  
require_once "../library/Mysql.php";
$bd = new Mysql();
$rs = $bd->select("select * from categoria");
$fila = "";
foreach($rs as $value){
	$fila.="<tr id='".$value["id_cat"]."'>";
	$fila.="<td>".$value["id_cat"]."</td>";
	$fila.="<td>".$value["descripcion"]."</td>";
	$fila.="<td class='editar'><a href='#'>Editar</a></td>";
	$fila.="<td class='eliminar'><a href='#'>Eliminar</a></td>";
	$fila.="</tr>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Listado de categoria</title>
	<script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../js/categoria.js"></script>
</head>
<body>
<ul>
	<li id="nuevo"><a href="#">Nuevo</a></li>
</ul>
<table border="1">
	<tr>
		<td>ID</td>
		<td>DESCRIPCION</td>
		<td colspan="2">ACCIONES</td>
	</tr>
	<?php echo $fila;?>
</table>
</body>
</html>