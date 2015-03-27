$(document).ready(function(){
	$('#empresa').hide();
	$('#gestion').hide();
	$('#tecnica').hide();
	
	$('#servicio').click(function(){
		$('#empresa').show();
		$('#gestion').hide();
		$('#tecnica').hide();
	});
	
	$('#software').click(function(){
		$('#empresa').hide();
		$('#gestion').show();
		$('#tecnica').hide();
	});
	
	$('#asistencia').click(function(){
		$('#empresa').hide();
		$('#gestion').hide();
		$('#tecnica').show();
	});

});