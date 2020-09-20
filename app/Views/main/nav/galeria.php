<style type="text/css">
    #galeria_in{
     color:#fdc236;
    } 
</style>
<section class="padre_intro">
	<h1>GALERIA</h1>
	<h3>Bomberos voluntarios del Perú <br> Tarapoto - Perú</h3>
	<img  src="<?php echo base_url();?>/public/img/fondo.jpg">
</section>
<br><br><br>
<div class="auto_container">
        <ul class="breadcrumb"><li><a href="#">Home</a></li><li>Galeria</li></ul>
</div>
<br><br>
<div class="padre_galeria">
	<?php foreach ($galeria as $fila):?>
	<section>
		<a href="<?php echo $fila->Ling;?>">
			<p><?php echo $fila->Titulo;?></p>
			<img src="<?php echo base_url();?>/public/img/galeria/<?php echo $fila->Nombre_Foto;?>">
		</a>
	</section>
	<?php endforeach?>
</div>
<br><br><br><br>