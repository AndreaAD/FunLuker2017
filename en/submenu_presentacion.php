<?php  
$archivo_actual = basename($_SERVER['PHP_SELF']); 
?>

<div class="row subMenu">
    <div class="col-sm-5">
        <a href="../es/<?php echo $archivo_actual; ?>" class="language">Español</a>
        <span class="bar-separator">|</span>
        <a href="ReporteSostenibilidad2016.pdf" class="DescargarPDF" target="_blank"><img src="./img/pdf.gif" alt=""> Versión PDF</a>
    </div>
    <div class="col-sm-11">
        <nav>
		    <ul class="pager">
		        <li><a href="index.php" class="<?php echo $activo_submenu == 1 ? 'active' : '' ?>">Carta de la Gerencia</a></li>
		        <li><a href="fLuker.php" class="<?php echo $activo_submenu == 2 ? 'active' : '' ?>">La Fundación</a></li>
		        <li><a href="areas.php" class="<?php echo $activo_submenu == 3 ? 'active' : '' ?>">Áreas de trabajo</a></li>
		        <li><a href="informe.php" class="<?php echo $activo_submenu == 4 ? 'active' : '' ?>">Acerca de este informe</a></li>
		        <li><a href="equipo.php" class="<?php echo $activo_submenu == 5 ? 'active' : '' ?>">Equipo de trabajo</a></li>
		    </ul>
		</nav>
    </div>
</div>
