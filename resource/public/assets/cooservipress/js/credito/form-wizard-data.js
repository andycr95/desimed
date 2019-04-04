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
				finish: "Registrar credito",
				next: "Siguiente",
				previous: "Anterior",
				loading: "Cargando ..."
			},
			onStepChanging: function (event, currentIndex, newIndex) { 
				
			 	if(newIndex == 3){
					 alert('fase 3');
                    //  var tasa =parseFloat(document.getElementsByName("tasa")[0].value) / 100;
                    //  var ingresos = document.getElementsByName("ingresos")[0].value;
                    //  var egresos = document.getElementsByName("egresos")[0].value;
                    //  var monto = document.getElementsByName("monto")[0].value;
                    //  var ncuotas = document.getElementsByName("plazo")[0].value;
                    //  var seguro = document.getElementsByName("aval_credito")[0].value;
                    //  var admin = document.getElementsByName("seguro_credito")[0].value;
                    //  var aval = document.getElementsByName("administracion_credito")[0].value;
                    //  var cuota = (  (parseFloat(tasa) * parseFloat(monto) )    /  ( 1 - Math.pow(1 + parseFloat(tasa),-parseInt(ncuotas)) ) );
                     
                    //  var otros =(parseFloat(seguro) + parseFloat(admin) + parseFloat(aval) ) +parseFloat(cuota) ;
                    //  var capacidad = (parseFloat(ingresos) - parseFloat(egresos))*0.5;
                    //  console.log(capacidad);
                    //  if(otros > capacidad){
                        
                    //     $("#revision").html("<div class='alert alert-danger mb-20' role='alert'>No es viable la creacion del credito</div");
                    //  }else{
                    //     $("#revision").html("<div class='alert alert-success mb-20' role='alert'>Es viable la creacion del credito.</div");
                    //  }
                    //  //cuota = new Intl.NumberFormat(["ban", "id"]).format(Math.round(cuota));
                    //  //otros = new Intl.NumberFormat(["ban", "id"]).format(Math.round(otros));
                    //  //capacidad = new Intl.NumberFormat(["ban", "id"]).format(Math.round(capacidad));
                    //  document.getElementById('cuotaX').value = cuota;
                    //  document.getElementById('otrosX').value = otros;
                    //  document.getElementById('capacidadX').value =capacidad ;
			 		return true;
				 }
				 if(newIndex == 2){
					
					document.getElementsByName("tasa_ofrecidad")[0].value=document.getElementsByName("tasa_ofrecidad_f")[0].value;
					document.getElementsByName("monto")[0].value=document.getElementsByName("monto_aval")[0].value;
					document.getElementsByName("plazo")[0].value=document.getElementsByName("plazo_f")[0].value;

					document.getElementsByName("aval_credito")[0].value=document.getElementsByName("aval_f")[0].value;
					document.getElementsByName("administracion_credito")[0].value=document.getElementsByName("administracion_f")[0].value;
					document.getElementsByName("seguro_credito")[0].value=document.getElementsByName("seguro_f")[0].value;
					
					//RESUMEN FINAL
					document.getElementsByName("capacidadX")[0].value=document.getElementsByName("capacidad_f")[0].value;
					document.getElementsByName("montoFinal")[0].value=document.getElementsByName("monto_aval")[0].value;
					document.getElementsByName("cuotaFinal")[0].value=document.getElementsByName("cuotaX")[0].value;
					document.getElementsByName("tasa_ofrecidadFinal")[0].value=document.getElementsByName("tasa_ofrecidad_f")[0].value;
					
				 }
				 if(newIndex == 1){
					
					var tasa =document.getElementsByName("tasa")[0].value;
					var ingresos = document.getElementsByName("total_ingresos")[0].value;
					ingresos=replaceAll(ingresos);
					var monto = document.getElementsByName("monto_f")[0].value;
					monto = replaceAll(monto);
					var ncuotas = document.getElementsByName("plazo_f")[0].value;
					var descuentos_ley = document.getElementsByName("descuentos_ley")[0].value;
					descuentos_ley =replaceAll(descuentos_ley);
					var descuentos_nomina = document.getElementsByName("descuentos_nomina")[0].value;
					descuentos_nomina=replaceAll(descuentos_nomina);
					var cartera= document.getElementsByName("cartera")[0].value;
					cartera=replaceAll(cartera);
					var edad = document.getElementsByName("edad")[0].value;
					var aval= document.getElementsByName("aval_f")[0].value;
					//aval = replaceAll(aval);
					var seguro = document.getElementsByName("seguro_f")[0].value;
					seguro = replaceAll(seguro);
					var administracion = document.getElementsByName("administracion_f")[0].value;
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

					  },'#resultadoS'); 
				 }
				 if(newIndex == 4){
					alert('fase 4');
				 }
				 if(newIndex == 5){
					alert('fase 5');
				 }

			return true;
		 },
			onFinished: function (event, currentIndex) {
                
                
                registrarCredito();
                document.getElementsByName("validar")[0].value=1;
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
