$(document).ready(function(){
	/*Micrositios*/
	$(".editMS").click(function(){
		$("#listaMicrositio").fadeOut();
		$("#editarMicrositio").fadeIn();
	})
	$(".verMS").click(function(){
		$("#listaMicrositio").fadeOut();
		$("#detalleDbMS").fadeIn();
	})
	$(".crearMS").click(function(){
		$("#listaMicrositio").fadeOut();
		$("#crearMicrositio").fadeIn();
	})
	$(".returnMS").click(function(){
		$("#listaMicrositio").fadeIn();
		$(".subCat").fadeOut();
	})

	/*Databases*/
	
	$(".verDB").click(function(){
		$("#listaDB").fadeOut();
		$("#detalleDB").fadeIn();
	})
	$(".crearDB").click(function(){
		$("#listaDB").fadeOut();
		$("#crearDB").fadeIn();
	})
	$(".returnDB").click(function(){
		$("#listaDB").fadeIn();
		$(".subCat").fadeOut();
	})

	/*Ventas*/
	
	$(".verVentas").click(function(){
		$("#listaVentas").fadeOut();
		$("#detalleVentas").fadeIn();
	})
	$(".crearVentas").click(function(){
		$("#listaVentas").fadeOut();
		$("#crearVentas").fadeIn();
	})
	$(".returnVentas").click(function(){
		$("#listaVentas").fadeIn();
		$(".subCat").fadeOut();
	})

	/*Perfil de Campaña*/
	
	$(".editPerfilc").click(function(){
		$("#fichaPerfilc").fadeOut();
		$("#editPerfilc").fadeIn();
	})
	$(".returnPerfilc").click(function(){
		$("#fichaPerfilc").fadeIn();
		$(".subCat").fadeOut();
	})


});
function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});