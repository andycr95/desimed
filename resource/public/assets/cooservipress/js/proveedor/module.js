$(document).on("click", "#registrar_proveedor", function(e) {
  $("#tablaDinamica").html("");
  sendEventApp(
    "POST",
    routesAppPlatform() + "proveedor/registrarProveedor.php",
    (params = {
      razon_social: document.getElementsByName("razon_social")[0].value,
      etiqueta_contacto: document.getElementsByName("etiqueta_contacto")[0]
        .value,
      nombre_contacto: document.getElementsByName("nombre_contacto")[0].value,
      telefono_contacto: document.getElementsByName("telefono_contacto")[0]
        .value,
      direccion_contacto: document.getElementsByName("direccion_contacto")[0]
        .value,
      ciudad_contacto: document.getElementsByName("ciudad_contacto")[0].value
    }),
    "#resultado"
  );
  return false;
});

$(document).on("click", "#buscarProveedor", function(e) {
  $("#tablaDinamica").html("");
  sendEventApp(
    "POST",
    routesAppPlatform() + "proveedor/consultaFiltro.php",
    (params = {
      busqueda: document.getElementsByName("busqueda")[0].value,
      consulta: document.getElementsByName("consulta")[0].value,
      estado: document.getElementsByName("estado")[0].value
    }),
    "#tablaDinamica"
  );
  console.log("bien");
  return false;
});
