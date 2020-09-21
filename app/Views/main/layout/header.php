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
  <link rel="stylesheet" href="<?php echo base_url();?>/public/mycss/galeria.css">
  <link rel="stylesheet"  href="<?php echo base_url();?>/public/font_awesome/css/all.min.css">

    <script src="<?php echo base_url();?>/public/js/AJAS/funciones.js"></script> 
    <script src="<?php echo base_url();?>/public/alertifyJS/alertify.min.js"></script>
   <script src="<?php echo base_url();?>/public/js/jquery.js"></script>
   <script src="<?php echo base_url();?>/public/js/scri.js"></script>
   <script src="<?php echo base_url();?>/public/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url();?>/public/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <script type="text/javascript">
      $(window).load(function() {
          $(".loader").fadeOut("slow");
      }); 
  </script>
</head>
<div class="loader"></div>
<body>
<div class="padre_barra">
    <div class="p_b_redes_s_otros">
      <div class="pb_redes_sociales" id="pb_redes_sociales">
        <a href="https://www.instagram.com/bomberostarapoto71/?igshid=4esl86ypvzb9" target="_blank" ><span class="icon-instagram"></span></a>
        <a href="https://www.facebook.com/BomberosTarapoto71/" target="_blank"><span class="icon-facebook"></span></a>
        <p id="pb_redes_sociales_p">¿Necesitas ayuda? Llámanos +51 953631138</p>
      </div>
      <div class="pb_otros" id="pb_otros">
          <a href="<?php echo base_url();?>/LoginAdmin"><p>Control Interno</p></a>
          <a href="<?php echo base_url();?>/Convocatoria"><p>Convocatoria</p></a>
          <a href="<?php echo base_url();?>/Intranet"><p>Intranet</p></a>
      </div>
    </div>
</div>
<div class="padre_logo_responsive" id="padre_logo_responsive">
      <div>
        <section><img  src="<?php echo base_url();?>/public/inicio/img/logo_2.png"></section>
        <h2>CUERPO DE BOMBEROS <br><span class="theme_color">JUAN ROBERTO ACEVEDO</span></h2>
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
      <a href="<?php echo base_url();?>/Galeria" id="galeria_in" >Galeria</a>
      <a href="<?php echo base_url();?>/Noticias" id="noticias_in">Noticias</a>
      <a href="<?php echo base_url();?>/Convocatoria">convocatorias</a>
      <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LBZ25J44P7K8W">Donar</a>
      <a href="<?php echo base_url();?>/Contacto" id="contacto_in">contacto</a>
    </div>
    <div class="padre_llamar" id="padre_llamar">
          <div>
            <a href="https://api.whatsapp.com/send?phone=953631138&text= Hola!%20necesito%20sus%20servicios!" class="a_wspp" target="_blank" ><p>Llamar</p><span class="icon-whatsapp"></span></a>
          </div>
    </div>
    </div>
    <div class="padre_responsive" id="padre_responsive">
      <div class="padre_menu_r" id="padre_menu_r">
        <a href="#" id="a_padre_menu_r" onclick="mostrar_menu_responsive();"><span class="icon-dehaze"></span></a>
      </div>
      <div class="padre_llamar_r" id="padre_llamar_r">
            <div>
              <a href="https://api.whatsapp.com/send?phone=953631138&text= Hola!%20necesito%20sus%20servicios!" class="a_wspp_r" target="_blank" ><p>Llamar</p><span class="icon-whatsapp"></span></a>
            </div>
        </div>
    </div>
</div>
<div class="padre_menu_cabe_responsive" id="padre_menu_cabe_responsive">
    <div class="menu_cabe_responsive" id="menu_cabe_responsive">
      <div class="menu_a_responsive">
        <a href="<?php echo base_url();?>/Inicio" id="inicio_in" ><div>Inicio</div></a>
        <a href="<?php echo base_url();?>/Nosotros" id="nosotros_in" ><div>Nosotros</div></a>
        <a href="<?php echo base_url();?>/Galeria" id="galeria_in" ><div>Galeria</div></a>
        <a href="<?php echo base_url();?>/Noticias" id="noticias_in"><div>noticias</div></a>
        <a href="<?php echo base_url();?>/Convocatoria"><div>convocatorias</div></a>
       <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LBZ25J44P7K8W"><div>Donar</div></a>
        <a href="<?php echo base_url();?>/Contacto" id="contacto_in"><div>contacto</div></a>
      </div> 
    </div>
    <div class="menu_salir_responsive" id="menu_salir_responsive" onclick="salir_responsive();"></div>
</div>