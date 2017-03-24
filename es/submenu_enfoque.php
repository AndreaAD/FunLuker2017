<?php  
    $archivo_actual = basename($_SERVER['PHP_SELF']); 
?>

<div class="row subMenu verde inverso">
    <div class="col-sm-5">
        <a href="../en/<?php echo $archivo_actual; ?>" class="language">English</a>
        <span class="bar-separator">|</span>
        <a href="ReporteSostenibilidad2016.pdf" class="DescargarPDF" target="_blank"><img src="./img/pdf.gif" alt=""> Versión PDF</a>
    </div>
    <div class="col-sm-11">
        <nav>
		    <ul class="pager">
		     	<li><a href="enfoque-estrategico.php" class="<?php echo $activo_submenu == 1 ? 'active' : '' ?>">Enfoque</a></li>
		        <li><a href="valores.php" class="<?php echo $activo_submenu == 2 ? 'active' : '' ?>">Valores</a></li>
		    </ul>
		</nav>
    </div>
</div>
