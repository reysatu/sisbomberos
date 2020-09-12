<style type="text/css">
    #noticias_in{
     color:#fdc236;
    } 
</style>
<?php foreach ($detalle_noticia as $fila):?>
<section class="padre_intro">
	<h1>Noticias de la semana</h1>
	<h3>Bomberos voluntarios del Perú <br> Tarapoto - Perú</h3>
	<img  src="<?php echo base_url();?>/public/img/noticia/<?php echo $fila->Nombre_Foto;?>">
</section>
<br><br><br>
<div class="auto_container"> 
        <ul class="breadcrumb"><li><a href="<?php echo base_url();?>/Noticias">Noticias</a></li><li>#</li></ul>
</div>
<br><br>
<div class="padre_detalle_noticias">
	 <h1 id="padre_detalle_noticias_h1"><?php echo $fila->Titulo;?> </h1>
	<br><br>
	<div class="detalle_not_otras_not" id="detalle_not_otras_not">
		<div class="detalle_not" id="detalle_not">
			<img src="<?php echo base_url();?>/public/img/noticia/<?php echo $fila->Nombre_Foto;?>">
			<br><br>
			<section class="fecha_d_not">
				<h3>Contenido</h3>
				<h5> Actualizado el <?php echo $fila->Fecha;?></h5>
			</section>
			<p><?php echo $fila->Descripcion;?></p>
		</div>
<?php endforeach?> 	
		<div class="otras_not" id="otras_not">
			<section>Últimas Noticias</section>
			<?php foreach ($ultimas_not as $fila):?>
				<a href="<?php echo base_url();?>/Noticias/detalle_noticia?idn=<?php echo $fila->Id;?>">
					<div>
						<img src="<?php echo base_url();?>/public/img/noticia/<?php echo $fila->Nombre_Foto;?>">
						<h2><?php echo $fila->Titulo;?> </h2>
					</div>
				</a>
			<?php endforeach?>
		</div> 	
	</div>
</div>
<br><br><br><br><br><br><br>