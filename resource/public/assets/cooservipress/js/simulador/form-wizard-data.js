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
				finish: "Simular",
				next: "Siguiente",
				previous: "Anterior",
				loading: "Cargando ..."
			},
			
			onFinished: function (event, currentIndex) {
				
				
				var tasa =document.getElementsByName("tasa")[0].value;
				var ingresos = document.getElementsByName("total_ingresos")[0].value;
				ingresos=replaceAll(ingresos);
				var monto = document.getElementsByName("monto")[0].value;
				monto = replaceAll(monto);
				var ncuotas = document.getElementsByName("plazo")[0].value;
				var descuentos_ley = document.getElementsByName("descuentos_ley")[0].value;
				descuentos_ley =replaceAll(descuentos_ley);
				var descuentos_nomina = document.getElementsByName("descuentos_nomina")[0].value;
				descuentos_nomina=replaceAll(descuentos_nomina);
				var cartera= document.getElementsByName("cartera")[0].value;
				cartera=replaceAll(cartera);
				var edad = document.getElementsByName("edad")[0].value;
				var aval= document.getElementsByName("aval")[0].value;
				//aval = replaceAll(aval);
				var seguro = document.getElementsByName("seguro")[0].value;
				seguro = replaceAll(seguro);
				var administracion = document.getElementsByName("administracion")[0].value;
				administracion=replaceAll(administracion); 
				var params;
								console.log(tasa+" tasa  - "+
								ingresos+" ingresos- "+
								monto+" monto- "+
								ncuotas+"cuota - "+
								descuentos_ley+" ley - "+
								descuentos_nomina+" nomina - "+
								edad+"edad  - "+
								aval+" aval - "+
								seguro+" seguro - "+
								administracion+"admin - "+
								cartera+"cartera - ");
			
				sendEventApp('POST',routesAppPlatform()+'credito/calcularCredito.php' ,params = {
					"tasa" : tasa,
					"ingresos" : ingresos,
					"monto" : monto,
					"plazo" : ncuotas,
					"descuentos_ley" : descuentos_ley,
					"descuentos_nomina" : descuentos_nomina,
					"edad" : edad,
					"aval" : aval,
					"seguro" : seguro,
					"administracion" : administracion,
					"cartera" : cartera

					},'#resultado'); 
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
