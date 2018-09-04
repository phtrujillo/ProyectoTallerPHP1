base_url = "http://localhost:81/ProyectoTallerPHP1/";
$(function(){
	$("#nuevo").click(function(){
		location.href= base_url + "system/view/categoria_nuevo.php?accion=";
	});

	$(".editar").click(function(){
		codigo = $(this).parent().attr("id");
		location.href = base_url + "system/view/categoria_nuevo.php?accion=editar&codigo="+codigo;
	});

	$(".eliminar").click(function(){
		codigo = $(this).parent().attr("id");
		if(confirm("Esta seguro que desea eliminar el item ")){
			location.href= base_url + "system/view/categoria_eliminar.php?codigo="+codigo;
		}
	});	

	$("#agregar").click(function(){
		//$("#modo").val("insertar");
		$("#frmPrincipal").submit();
	});	

	$("#salir").click(function(){
		location.href = base_url + "system/view/categoria_index.php";
	});		
});