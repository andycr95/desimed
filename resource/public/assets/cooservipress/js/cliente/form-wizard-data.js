/*FormWizard Init*/
$(function () {
	"use strict";
	/* Basic Wizard Init*/
	if ($('#example-basic').length > 0)
		$("#example-basic").steps({
			headerTag: "h3",
			bodyTag: "section",
			transitionEffect: "fade",
			autoFocus: true,
			titleTemplate: "#title#",
			labels: {
				cancel: "Cancelar",
				current: "Siguiente paso:",
				pagination: "Paginacion",
				finish: "Registrar cliente",
				next: "Siguiente",
				loading: "Cargando ..."
			},
			onFinished: function (event, currentIndex) {
				registrarCliente();      
				document.getElementsByName('nombre_apellido')[0].value = ""   
   				document.getElementsByName('documento')[0].value = ""
   				document.getElementsByName('fecha_nacimiento')[0].value = ""
   				document.getElementsByName('sexo')[0].value = ""
   				document.getElementsByName('direccion')[0].value = ""
   				document.getElementsByName('telefono')[0].value = ""
   				document.getElementsByName('celular')[0].value = ""
   				document.getElementsByName('email')[0].value = "" 
			}
        });
        
	/* Input spinner Init*/
	setTimeout(function () {
		$("input.normal").inputSpinner({
			groupClass: "input-group-sm w-100p",
			buttonsClass: "btn-outline-light"
		});
	}, 100);
});
