// Generar contrasenia
$(document).ready(function(){
    $("#genPassw").click(function(){
        var clave = "";
		var tContrasenia = document.getElementById('tContrasenia');
		var tContraseniaV = document.getElementById('tContraseniaV');
		chars = "0123456789aAbBcCdDeEfFgGhHIIjJkKlLmMnNñÑoOpPqQrRsStTuUvVwWxXyYzZ";
		for (var i=0; i<=7; i++) {
			var rand = Math.floor(Math.random()*chars.length);
			clave += chars.substr(rand, 1);
		}
		
		tContrasenia.value = clave;
		tContraseniaV.value = clave; 
		tContrasenia.type = 'text';
    });
}); 


