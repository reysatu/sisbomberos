 <?php 
    $paginas = $total_n/$n_x_pagina;
    $paginas=ceil($paginas);
?>
<style type="text/css"> 
    #noticias_in{ 
     color:#fdc236; 
    } 
</style> 
<section class="padre_intro">
	<h1>Noticias de la semana</h1>
	<h3>Bomberos voluntarios del Perú <br> Tarapoto - Perú</h3>
	<img  src="<?php echo base_url();?>/public/img/fondo.jpg">
</section>
<br><br><br>
<div class="auto_container"> 
        <ul class="breadcrumb"><li><a href="#">Home</a></li><li>Noticias</li></ul>
</div>
<br><br>
<div class="arriba_noticias" id="arriba_noticias">
    <?php 
    $primerR= 1;
    $segundoR= 1; 
    $salir=0;
    foreach ($noticias_p as $fila):
    if($primerR==1){?>
    	<div class="noticia_1" id="noticia_1">
    		<a href="<?php echo base_url();?>/Noticias/detalle_noticia?idn=<?php echo $fila->Id;?>">
                <img src="<?php echo base_url();?>/public/img/noticia/<?php echo $fila->Nombre_Foto;?>">
    			<div class="principal_text">
    					<h2><?php echo $fila->Titulo;?> </h2>
    					<p><?php echo $fila->Descripcion;?></p>
    			</div>
            </a>
    	</div>
    <?php } ?>
    <?php if($segundoR==2 and $salir==0){?>
    	<div class="noticia_2" id="noticia_2">
    	   <a href="<?php echo base_url();?>/Noticias/detalle_noticia?idn=<?php echo $fila->Id;?>">
                <img src="<?php echo base_url();?>/public/img/noticia/<?php echo $fila->Nombre_Foto;?>">
                <div class="principal_text">
                        <h2><?php echo $fila->Titulo;?> </h2>
                        <p><?php echo $fila->Descripcion;?></p>
                </div>
            </a>
    	</div>
    <?php $salir= 1; } ?>
    <?php $primerR= 2;?>
    <?php $segundoR= 2;?>
    <?php endforeach?>
</div>
<br><br><br>
<div class="padre_noticias" id="padre_noticias">
    <h2>Màs <span class="theme_color">Noticias</span></h2>
    <br><br>
    <div class="padre_contenido_not">
    	<?php foreach ($noticias as $fila):?>
            <div id="padre_contenido_not_div">
                <a href="<?php echo base_url();?>/Noticias/detalle_noticia?idn=<?php echo $fila->Id;?>">
                    <span>+</span>
                    <img src="<?php echo base_url();?>/public/img/noticia/<?php echo $fila->Nombre_Foto;?>">
                     <section class="padre_a_p_noti_i">
                        <a href="<?php echo base_url();?>/Noticias/detalle_noticia?idn=<?php echo $fila->Id;?>">
                            <label><?php echo $fila->Titulo;?></label>
                            <p><?php echo $fila->Descripcion;?></p>
                        </a>
                    </section>
                    <h6><?php echo $fila->Fecha;?></h6>
                </a>
            </div>
        <?php endforeach?>
    </div>
    <br><br>
</div>
<br><br><br>
<div class="paginacion">
   
    <a class="paginacion_a <?php  echo $_GET['pagina']<=1? 'disable':''?>" href="<?php echo base_url();?>/Noticias?pagina=<?php echo $_GET['pagina']-1?>">
          Anterior
    </a>

    <?php for ($i=0; $i < $paginas; $i++) :?>
    <a class="paginacion_a <?php  echo $_GET['pagina']==$i+1? 'color_pagina':''?>" href="<?php echo base_url();?>/Noticias?pagina=<?php echo $i+1 ?>">
          <?php echo $i+1; ?>
    </a>
    <?php endfor?>

    <a class="paginacion_a <?php  echo $_GET['pagina']>=$paginas? 'disable':''?>" href="<?php echo base_url();?>/Noticias?pagina=<?php echo $_GET['pagina']+1?>">Siguiente
    </a>

</div>
<br><br><br><br>