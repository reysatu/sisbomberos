<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bomberos del Perú</title> 

  <link rel="stylesheet" href="<?php echo base_url();?>/public/icomon/icomoon/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/public/icomon/icomoon_2/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/public/inicio/css/inicio.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/public/nosotros/css/nosotros.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/public/mycss/noticias.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/public/mycss/footer.css">
  <link rel="stylesheet"  href="<?php echo base_url();?>/public/font_awesome/css/all.min.css">

    <script src="<?php echo base_url();?>/public/js/AJAS/funciones.js"></script>
    <script src="<?php echo base_url();?>/public/alertifyJS/alertify.min.js"></script>
   <script src="<?php echo base_url();?>/public/js/jquery.js"></script>
   <script src="<?php echo base_url();?>/public/js/scri.js"></script>
   <script src="<?php echo base_url();?>/public/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url();?>/public/js/bootstrap.min.js"></script>

</head>
<body>
<div class="padre_barra">
    <div class="p_b_redes_s_otros">
      <div class="pb_redes_sociales">
        <a href="#"><span class="icon-whatsapp"></span></a>
        <a href="#"><span class="icon-facebook"></span></a>
        <p>   <span class="icon-tablet_android"></span> (+51) (042) 52 5540 | bomberos@gmail.com</p>
      </div>
      <div class="pb_otros" id="pb_otros">
          <a href="<?php echo base_url();?>/LoginAdmin"><p>Control Interno</p></a>
          <a href="#"><p>Tienda</p></a>
          <a href="<?php echo base_url();?>/Intranet"><p>Intranet</p></a>
      </div>
    </div>
</div>  
<div class="padre_cabesera" id="padre_cabesera">
  <div class="div_p_c">
    <div class="padre_logo" id="padre_logo">
      <img  id="padre_logo_img" src="<?php echo base_url();?>/public/inicio/img/logo_2.png">
    </div>
    <div class="padre_menu" id="padre_menu">
      <a href="<?php echo base_url();?>/Inicio" id="inicio_in" >Inicio</a>
      <a href="<?php echo base_url();?>/Nosotros" id="nosotros_in" >Nosotros</a>
      <a href="<?php echo base_url();?>/Noticias" id="noticias_in">noticias</a>
      <a href="<?php echo base_url();?>/Convocatoria">convocatorias</a>
      <a href="#">patronato</a>
      <a href="#">contacto</a>
    </div>
    <div class="padre_llamar" id="padre_llamar">
          <div>
        
          </div>
      </div>
    </div>
    <div class="padre_responsive">
    <div class="padre_menu_r" id="padre_menu_r">
      <a href="#" id="a_padre_menu_r" onclick="mostrar_menu_responsive();"><span class="icon-dehaze"></span></a>
    </div>
    <div class="padre_llamar_r" id="padre_llamar_r">
          <div>
            <a href="#" class="a_wspp_r"><p>Llamar</p><span class="icon-whatsapp"></span></a>
          </div>
      </div>
      
    </div>
</div>
<div class="padre_menu_cabe_responsive" id="padre_menu_cabe_responsive">
    <div class="menu_cabe_responsive" id="menu_cabe_responsive">
      <div class="menu_a_responsive">
        <a href="<?php echo base_url();?>/Inicio" id="inicio_in" ><div>Inicio</div></a>
        <a href="<?php echo base_url();?>/Nosotros" id="nosotros_in" ><div>Nosotros</div></a>
        <a href="<?php echo base_url();?>/Noticias" id="noticias_in"><div>noticias</div></a>
        <a href="#"><div>convocatorias</div></a>
        <a href="#"><div>patronato</div></a>
        <a href="#"><div>contacto</div></a>
      </div> 
    </div>
    <div class="menu_salir_responsive" id="menu_salir_responsive" onclick="salir_responsive();"></div>
</div>