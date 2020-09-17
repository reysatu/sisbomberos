<style type="text/css">
    #nosotros_in{
     color:#fdc236;
    } 
</style>
<section class="padre_intro">
	<h1>NOSOTROS</h1>
	<h3>Bomberos voluntarios del Perú <br> Tarapoto - Perú</h3>
	<img  src="<?php echo base_url();?>/public/img/fondo.jpg">
</section>
<br><br><br>
<div class="auto_container">
        <ul class="breadcrumb"><li><a href="#">Home</a></li><li>Nosotros</li></ul>
</div>
<br><br>
<?php foreach ($nosotros as $fila):?>
<div class="padre_historia_img" id="padre_historia_img">
	<div class="padre_img_h" id="padre_img_h">
		<img src="<?php echo base_url();?>/public/nosotros/img/<?php echo $fila->Nombre_Foto;?>">
	</div>
	<div class="padre_historia" id="padre_historia">
		<br>
    	<h2>Nuestra <span class="theme_color">Historia</span></h2>
    	<p><?php echo $fila->Historia;?></p>
	</div>
</div>
<br><br><br><br>
<div class="padre_v_m_a" id="padre_v_m_a">
	<img src="<?php echo base_url();?>/public/nosotros/img/f_hist.jpg">
	<div>
		<h1>Nuestra misión</h1>
		<p><?php echo $fila->Mision;?></p>
	</div>
	<div>
		<h1>Nuestra visión</h1>
		<p><?php echo $fila->Vision;?></p>
	</div>
	<div>
		<h1>Valores</h1>
		<p> <?php echo $fila->Valores;?></p>
	</div>
</div>
<?php endforeach?>
<br><br><br><br><br><br><br><br><br><br>