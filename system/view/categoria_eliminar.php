<?php  
require_once "../library/Mysql.php";
$bd = new Mysql();
$codigo = $_REQUEST["codigo"];
$sql = "delete from categoria where id_cat='".$codigo."'";
$bd->select($sql);
header("Location:categoria_index.php");
?>