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
<div class="padre_cont_noticias">
	<div class="contenedor_noticias">
		<div class="noticia_principal">
			<div class="noticia-row1">
				<div class="principal-img">
					<a href=""><img src="<?php echo base_url();?>/public/img/noticia/1.jpg" alt="" ></a>
				</div>
				<div class="principal-text">
					<h2> <a href="">Bomberos refuerzan su capacidad operativa con cinco vehículos de emergencia</a></h2>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Molestiae placeat amet velit aliquam adipisci labore, autem, neque quaerat aspernatur nihil ullam, dolor voluptatum. Quibusdam aliquam, est animi autem quisquam pariatur.</p>
				</div>
			</div>
			<div class="noticia-row2">
				<div class="secundario-img">
					<a href=""><img src="<?php echo base_url();?>/public/img/noticia/20200211_110951.jpg" alt="" ></a>
				</div>
				<div class="secundario-text">
					<h2> <a href="">Bomberos refuerzan su capacidad operativa con cinco vehículos de emergencia</a></h2>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Molestiae placeat amet velit aliquam adipisci labore, autem, neque quaerat aspernatur nihil ullam, dolor voluptatum. Quibusdam aliquam, est animi autem quisquam pariatur.</p>
				</div>
			</div>

		</div>
	</div>
</div>
<div class="padre_noticias">
    <div class="padre_contenido_not">
    	<?php foreach ($noticias as $fila):?>
        <div>
            <a href="#">
                <span>+</span>
                <img src="<?php echo base_url();?>/public/img/noticia/<?php echo $fila->Nombre_Foto;?>">
                 <section class="padre_a_p_noti_i">
                    <a href="#">
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