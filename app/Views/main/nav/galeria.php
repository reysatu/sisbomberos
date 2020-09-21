 <?php 
    $paginas = $total_n/$n_x_pagina;
    $paginas=ceil($paginas);
?>
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
<div class="padre_galeria" id="padre_galeria">
	<?php foreach ($galeria as $fila):?>
	<section>
		<a href="<?php echo $fila->Ling;?>">
			<p><?php echo $fila->Titulo;?></p>
			<img src="<?php echo base_url();?>/public/img/galeria/<?php echo $fila->Nombre_Foto;?>">
		</a>
	</section>
	<?php endforeach?>
</div>
<br><br><br>
<div class="paginacion">
   
    <a class="paginacion_a <?php  echo $_GET['pagina']<=1? 'disable':''?>" href="<?php echo base_url();?>/Galeria?pagina=<?php echo $_GET['pagina']-1?>">
          Anterior
    </a>

    <?php for ($i=0; $i < $paginas; $i++) :?>
    <a class="paginacion_a <?php  echo $_GET['pagina']==$i+1? 'color_pagina':''?>" href="<?php echo base_url();?>/Galeria?pagina=<?php echo $i+1 ?>">
          <?php echo $i+1; ?>
    </a>
    <?php endfor?>

    <a class="paginacion_a <?php  echo $_GET['pagina']>=$paginas? 'disable':''?>" href="<?php echo base_url();?>/Galeria?pagina=<?php echo $_GET['pagina']+1?>">Siguiente
    </a>

</div>
<br><br><br><br> 