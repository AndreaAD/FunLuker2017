<?php  
$archivo_actual = basename($_SERVER['PHP_SELF']); 
?>

<div class="row subMenu azulMenu inverso">
    <div class="col-sm-5">
        <a href="../en/<?php echo $archivo_actual; ?>" class="language">English</a>
        <span class="bar-separator">|</span>
        <a href="ReporteSostenibilidad2016.pdf" class="DescargarPDF" target="_blank"><img src="./img/pdf.gif" alt=""> Versión PDF</a>
    </div>
    <div class="col-sm-11">
        <nav>
		    <ul class="pager">
                <li><a href="nuestro-trabajo.php"  class="<?php echo $activo_submenu == 1 ? 'active' : '' ?>">Educación</a></li>
                <li><a href="emprendimiento.php" class="<?php echo $activo_submenu == 2 ? 'active' : '' ?>">Emprendimiento</a></li>
                <li><a href="proyectos-especiales.php" class="<?php echo $activo_submenu == 3 ? 'active' : '' ?>">Proyectos Especiales y otras iniciativas de ciudad</a></li>
                <li><a href="proyecto-casaluker.php" class="<?php echo $activo_submenu == 4 ? 'active' : '' ?>">El proyecto con CasaLuker</a></li>
		    </ul>
		</nav>
    </div>
</div>
