<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'inicio';
$telefono = "";
$direccion= "";
$correo = "";
$inicio ="";
$universal ="" ;
$gdi ="";
$proinsa ="";
$logo ="";
switch ($page) {
    case 'inicio':
        $direccion = "Carretera Troncal del Norte Km 4.1/2 # 50 Ciudad Delgado, San Salvador, El Salvador.";
        $logo = "inicio.webp";
        $inicio = "current";
        $telefono = "2556-5889";
        $correo = "info@grupouniversalsv.com";
        break;
    case "universal-cooling":
        $logo = "universal-cooling.webp";
        $universal = "current";
        $correo ="cooling@grupouniversalsv.com";
        $telefono ="6844-6161";
        $direccion ="km 56.1 carretera longitudinal del norte, cantón Santa Bárbara, El Paraíso, Chalatenango";
        break;
    case "gdi":
        $logo = "gdi.png";
        $gdi = "current";
        $correo ="gdi@grupouniversalsv.com";
        $telefono ="2556-5889";
        $direccion ="Boulevard sergio  viera de mello, centro comercial oppen plaza local #11";
        break;
    case "proinsa":
        $logo ="proinsa.webp";
        $proinsa = "current";
        $correo = "proinsa@grupouniversalsv.com";
        $direccion ="Carretera troncal del norte kilómetro 41/2 número 49-50 ciudad delgado.";
        $telefono ="2286-3978";
        break;
    default:
        $direccion = "Carretera Troncal del Norte Km 4.1/2 # 50 Ciudad Delgado, San Salvador, El Salvador.";
        $logo = "inicio.webp";
        $inicio = "current";
        $telefono = "2556-5889";
        $correo = "info@grupouniversalsv.com";
        break;

}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title> <?php echo $page ?> - Grupo Universal</title>
    <!-- Stylesheets -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/icono.webp" type="image/x-icon">
    <link rel="icon" href="assets/images/icono.webp" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta property="og:description" content="#GrupoUniversal Ingeniera– Cadena y logística de frío – Comercialización – Bienes raíces Infraestructura
    Productiva en El Salvador. Facebook Twitter Linkedin Instagram ¿Quiénes Somos? Somos una corporación joven con los conocimientos, habilidades,
    actitudes, valores, tecnología e infraestructuras suficientes, para atender con calidad todo tipo de proyectos, cubriendo sus necesidades en tiempo y forma.
     Nuestro capital humano ">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">



    <!-- Preloader -->
<!--    <div class="preloader"></div>-->



