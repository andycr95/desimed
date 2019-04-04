// /****************************************************************************/
// /*                                                                          */
// /*                                                                          */
// /*                                                                          */
// /*                                                                          */
// /****************************************************************************/
var check = 0;
var smg=" ";
/************************************************/
  //datos globales
  function setMensaje(x){this.smg=x;}
  function getMensaje(){return this.smg;}
  function setCheck(x){this.check=parseInt(x);}
  function getCheck(){return this.check;}
 /********************************************** */
//programacion teclado

function validarCamposVacios(variable) {

  if(variable.length == 0 ){
    return 1;
  }else{  
    if(variable == 'obligatorio'){ return 1; }else{return 0;}
      }  
  }

  $(document).on('click','#validarSesion',function(e){
    e.stopPropagation();
    e.preventDefault();
    console.log("validar sesion  ");
    setCheck(0);
    setMensaje("")
    $("#smg_login").html("");
    var mail = document.getElementsByName("email")[0];
    var clave = document.getElementsByName("clave")[0];
    var camposinicio = [mail,clave];
    var i;
    for (i = 0; i < camposinicio.length; i++) { 
            
            var r = validarCamposVacios(camposinicio[i].value);
             if(parseInt(r) == 1){
                document.getElementsByName(""+camposinicio[i].name)[0].value='obligatorio';
                setCheck( parseInt(getCheck())+1 );
                if(getMensaje().length==0){setMensaje("el campo : "+camposinicio[0].placeholder+",");}
                else{setMensaje(getMensaje()+camposinicio[0].placeholder+",");}
               }
      }
    if(parseInt(getCheck())>0){
        $("#smg_login").html(getMensajeCamposVacios());
      }else{

        var uirol = document.getElementsByName("uirol")[0].value;
        url_sesion_rol = "";
    
        switch (uirol) {
         case "empresa":
             url_sesion_rol = '../../controller/route/sesion/validarSesionEmpresas.php'
            break;
    
         case "mensajero":
            url_sesion_rol = '../../controller/route/sesion/validarSesionMensajero.php'
           break;
    
         case "empleado":
           url_sesion_rol = '../../controller/route/sesion/validarSesionEmpleado.php'
          break;  
    
        }
        
         var params = {
            "email" : mail.value,
            "clave" : clave.value
          };  
         $.ajax({
          data:   params,
          url:   url_sesion_rol,
          type:  'post',
          success:  function (response) {$("#smg_login").html(response);}});
      }
  });



   function getMensajeCamposVacios(){
    var aux ="<div class='alert alert-warning'><strong>Cuidado "+this.getCheck()+
             "!</strong> "+this.getMensaje()+".";
    return aux;
  }
  