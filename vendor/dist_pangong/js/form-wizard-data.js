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
				finish: "Finalizar",
				next: "Siguiente",
				previous: "Anterior",
				loading: "Cargando ..."
			},
			onStepChanging: function (event, currentIndex, newIndex) { 
				
				
				if(newIndex == 2){
					document.getElementById('nombreU').value=document.getElementById('nombreFormUsuario').value;
					document.getElementById('direccionU').value=document.getElementById('direccionFormUsuario').value;
					document.getElementById('telefonoU').value=document.getElementById('telefonoFormUsuario').value;
					document.getElementById('emailU').value=document.getElementById('emailFormUsuario').value;
					document.getElementById('documentoU').value=document.getElementById('documentoFormUsuario').value;
					document.getElementById('usuarioU').value=document.getElementById('usuarioFormUsuario').value;
					document.getElementById('claveU').value=document.getElementById('claveFormUsuario').value;

					var rol =$("#rolesForm option:selected").text();
					document.getElementById('rolU').value=rol.trim();

					//document.getElementById('rolU').value=document.getElementById('rolForm').value;
					var sucursal =$("#sucursalForm option:selected").text();
					document.getElementById('sucursalU').value=sucursal.trim();

					return true;
					//document.getElementById('la').value='sdf';
				}
					//console.log("current "+currentIndex+" new "+newIndex);
				
			return true;
		 },


			onFinished: function (event, currentIndex) {
				alert("Submitted!");
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
