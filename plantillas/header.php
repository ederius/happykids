
<!DOCTYPE html>
<html lang="en" ng-app="happykids">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Happy Kids</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <script src="js/jquery-1.11.3.js"></script>

</head>
<body>

<nav class="white blue darken-3" role="navigation">

    <div class="nav-wrapper container">
        <a href="#" class="brand-logo"><img class="circle logo" src="imagenes/logo.png" width="55"/> </a>

        <a href="#" data-activates="mobile" class="button-collapse"><i class=" white-text material-icons">menu</i></a>
        <!--------------------------------MENU MOBIL--------------------------------------------------------------------------------------------->
        <ul class="menuPrincipal right hide-on-med-and-down">

            <li><a class="white-text" href="#">Inicio</a></li>
            <li><a class="dropdown-button white-text" href="#!" data-activates="servicios">Servicios<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="servicios" class="dropdown-content">
                <li><a class="blue-text text-darken-3" href="#!">Orientación escolar</a></li>
                <li><a class="blue-text text-darken-3" href="#!">Restaurante comedor</a></li>
                <li class="divider"></li>
                <li><a class="blue-text text-darken-3" href="#!">Horarios Extendidos</a></li>
            </ul>


            <li><a class="dropdown-button white-text" href="#!" data-activates="nosotros">Nosotros<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="nosotros" class="dropdown-content">
                <li><a class="blue-text text-darken-3" href="#!">¿Quienes somos?</a></li>
                <li><a class="blue-text text-darken-3" href="#!">Organigrama</a></li>
                <li><a class="blue-text text-darken-3" href="#!">Uniforme</a></li>
                <li class="divider"></li>
                <li><a class="blue-text text-darken-3" href="#!">Himno</a></li>
            </ul>
            <li><a class="dropdown-button white-text" href="#!" data-activates="gobierno">Gobierno Escolar<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="gobierno" class="dropdown-content">
                <li><a class="blue-text text-darken-3" href="#!">Órganos del gobierno</a></li>
                <li><a class="blue-text text-darken-3" href="#!">Rectoría</a></li>
                <li><a class="blue-text text-darken-3" href="#!">Consejo Directivo</a></li>
                <li><a class="blue-text text-darken-3" href="#!">Concejo Académico</a></li>
                <li><a class="blue-text text-darken-3" href="#!">Comisión de evalución</a></li>
                <li><a class="blue-text text-darken-3" href="#!">Consejo de padres de familia</a></li>
                <li><a class="blue-text text-darken-3" href="#!">Personero estudiantil</a></li>
                <li class="divider"></li>
                <li><a class="blue-text text-darken-3" href="#!">Horarios Extendidos</a></li>
            </ul>



            <li><a class="dropdown-button white-text" href="#!" data-activates="admisiones">Admisiones<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="admisiones" class="dropdown-content">
                <li><a class="blue-text text-darken-3" href="#!">Proceso de admisión</a></li>
                <li><a class="blue-text text-darken-3" href="#!">Requisitos de matrícula</a></li>
                <li class="divider"></li>
                <li><a class="blue-text text-darken-3" href="#!">Pre-inscripción Online</a></li>
            </ul>

            <li><a class="dropdown-button white-text" href="#!" data-activates="novedades">Novedades<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="novedades" class="dropdown-content">
                <li><a class="blue-text text-darken-3" href="#!">Eventos</a></li>

                <li class="divider"></li>
                <li><a class="blue-text text-darken-3" href="#!">Boletin informativo</a></li>
            </ul>



        </ul>

        <!--------------------------------MENU PRINNCIPAL--------------------------------------------------------------------------------------------->


        <!--------------------------------MENU MOBIL--------------------------------------------------------------------------------------------->
        <ul id="mobile" class="side-nav">


            <li><a href="#">Inicio</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="servicios1">Servicios<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="servicios1" class="dropdown-content">
                <li><a href="#!">Orientación escolar</a></li>
                <li><a href="#!">Restaurante comedor</a></li>
                <li class="divider"></li>
                <li><a href="#!">Horarios Extendidos</a></li>
            </ul>

            <li><a class="dropdown-button" href="#!" data-activates="nosotros1">Nosotros<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="nosotros1" class="dropdown-content">
                <li><a href="#!">¿Quienes somos?</a></li>
                <li><a href="#!">Organigrama</a></li>
                <li><a href="#!">Uniforme</a></li>
                <li class="divider"></li>
                <li><a href="#!">Himno</a></li>
            </ul>
            <li><a class="dropdown-button" href="#!" data-activates="gobierno1">Gobierno Escolar<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="gobierno1" class="dropdown-content">
                <li><a href="#!">Órganos del gobierno</a></li>
                <li><a href="#!">Rectoría</a></li>
                <li><a href="#!">Consejo Directivo</a></li>
                <li><a href="#!">Concejo Académico</a></li>
                <li><a href="#!">Comisión de evalución</a></li>
                <li><a href="#!">Consejo de padres de familia</a></li>
                <li><a href="#!">Personero estudiantil</a></li>
                <li class="divider"></li>
                <li><a href="#!">Horarios Extendidos</a></li>
            </ul>

        </ul>
        <!--------------------------------MENU MOBIL--------------------------------------------------------------------------------------------->

    </div>

</nav>
