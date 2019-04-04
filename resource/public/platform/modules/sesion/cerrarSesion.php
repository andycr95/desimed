<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/conf.php');

session_start();
session_unset($_SESSION['idsesion']);
session_unset($_SESSION['nombre']);
session_unset($_SESSION['foto']);
session_unset($_SESSION['idciudad']);
session_unset($_SESSION['rol']);

session_destroy();
//metodo para cambiar de estado y ultima sesion.
header(LOGIN_PATH);


?>