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
				previous: "Anterior",
				loading: "Cargando ..."
			},
			onFinished: function (event, currentIndex) {
				registrarAfiliado();              
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
