<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Reporte de sostenibilidad 2017 de la Fundación Luker">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="http://fundacionluker.org.co/new/favicon.ico">
    <link rel="author" type="text/plain" href="humans.txt" />
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://code.cdn.mozilla.net/fonts/fira.css' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animation.css"/>
    <link rel="stylesheet" href="css/transitions.css"/>
    <link rel="stylesheet" type="text/css" href="css/menuResponsive.css" />
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/mediaQueries.css">
    <title>Reporte de sostenibilidad 2017 : Fundación Luker</title>
</head>
<?php

    $color= '#FFFFFF';
    switch ($activo) 
    {
        case '2':
            $color= '#8BC53F';
        break;
        case '3':
            $color= '#EB0029';
        break;
        case '4':
            $color= '#008AAB';
        break;
        case '5':
            $color= '#F7B032';
        break;
    }
?>
<body id="presentacion" style="background-color: <?php echo $color; ?>">
    <div class="fluid menu">
        <div class="container">
            <div class="row cabecera">
                <div class="col-xs-3 menuResponsive visible-xs">
                    <div id="dl-menu" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li>
                                <a href="#" class="item0">Presentación</a>
                                <ul class="dl-submenu" >
                                    <li><a href="index.php" class="item0">Carta de la Gerencia</a></li>
                                    <li><a href="fLuker.php" class="item0">La Fundación</a></li>
                                    <li><a href="areas.php" class="item0">Áreas de Trabajo</a></li>
                                    <li><a href="informe.php" class="item0">Acerca de este informe</a></li>
                                    <li><a href="equipo.php" class="item0">Equipo de trabajo</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="enfoque-estrategico.php" class="item1">Enfoque estratégico</a>
                                <ul class="dl-submenu" >
                                    <li><a href="enfoque-estrategico.php" class="item1">Enfoque</a></li>
                                    <li><a href="valores.php" class="item1">Valores</a></li>
                                </ul>
                            </li>
                            <li><a href="grupos-interes.php" class="item2">Grupos de interés</a></li>
                            <li>
                                <a href="#" class="item3">Nuestro trabajo en 2015</a>
                                <ul class="dl-submenu">
                                    <li><a href="nuestro-trabajo.php" class="item3">Educación</a></li>
                                    <li><a href="emprendimiento.php" class="item3">Emprendimiento</a></li>
                                    <li><a href="proyectos-especiales.php" class="item3">Proyectos especiales y otras iniciativas de ciudad</a></li>
                                    <li><a href="proyecto-casaluker.php" class="item3">El proyecto con CasaLuker</a></li>
                                </ul>
                            </li>
                            <li><a href="inversion.php" class="item5">Dimensión económica</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-13 col-sm-5">
                    <a href="../index.php"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
                </div>
                <div class="col-sm-11 text-center nav">
                    <nav>
                        <ul class="nav nav-pills">
                          <li role="presentation"><a href="index.php" class="item0 <?php echo $activo == 1 ? 'active' : '' ?>">Presentación</a></li>
                          <li role="presentation"><a href="enfoque-estrategico.php" class="item1 <?php echo $activo == 2 ? 'active' : '' ?>">Enfoque<br>estratégico</a></li>
                          <li role="presentation"><a href="grupos-interes.php" class="item2 <?php echo $activo == 3 ? 'active' : '' ?>">Grupos de<br>interés</a></li>
                          <li role="presentation"><a href="nuestro-trabajo.php" class="item3 <?php echo $activo == 4 ? 'active' : '' ?>">Nuestro<br>trabajo en 2016</a></li>
                          <li role="presentation"><a href="inversion.php" class="item5 <?php echo $activo == 5 ? 'active' : '' ?>">Dimensión<br>económica</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>