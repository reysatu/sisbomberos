<style type="text/css">
    #inicio_in{
     color:#fdc236; 
    }  
</style>
<div class="padre_slider" id="padre_slider">
     <div id="slider" class="slider">
        <li class="slider__section">
            <img src="<?php echo base_url();?>/public/inicio/img/slider/1.jpg">
            <div class="s_fraces">
                <h1>VIVE UNA EXPERIENCIA ÚNICA</h1>
                <h6>APUNTATE DE UNA VEZ Y SE PARTE DE NOSOTROS</h6>
                <br><br>
                <a href="#">Registrarse</a>
            </div>
            
        </li>
        <li class="slider__section">
            <img src="<?php echo base_url();?>/public/inicio/img/slider/2.jpg">
            <div class="s_fraces">
                <h1>VIVE UNA EXPERIENCIA ÚNICA</h1>
                <h6>APUNTATE DE UNA VEZ Y SE PARTE DE NOSOTROS</h6>
                <br><br>
                <a href="#">Registrarse</a>
            </div>
           
        </li>
        <li class="slider__section">
            <div class="s_fraces">
                <h1>VIVE UNA EXPERIENCIA ÚNICA</h1>
                <h6>APUNTATE DE UNA VEZ Y SE PARTE DE NOSOTROS</h6>
                <br><br>
                <a href="#">Registrarse</a>
            </div>
             <img src="<?php echo base_url();?>/public/inicio/img/slider/3.jpg">
        </li>
        <li class="slider__section">
            <div class="s_fraces">
                <h1>VIVE UNA EXPERIENCIA ÚNICA</h1>
                <h6>APUNTATE DE UNA VEZ Y SE PARTE DE NOSOTROS</h6>
                <br><br>
                <a href="#">Registrarse</a>
            </div>
             <img src="<?php echo base_url();?>/public/inicio/img/slider/4.jpg">
        </li>
      </div>
      <span id="btn-prev" class="btn-prev"><</span>
      <span id="btn-next" class="btn-next">></span>
    
</div>
<br><br><br><br><br>
<div class="padre_noticias_in">
    <h2>NOTICIAS <span class="theme_color">ACTUALES</span></h2>
    <p>Mantente Siempre Informado - Bomberos voluntarios del Perú</p>
    <br><br><br>
    <div class="padre_contenido_n_i">
        <?php foreach ($ultimas_not as $fila):?>
        <div>
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
</div>
<div class="padre_acesos_r">
    <br>
    <h2>Accesos <span class="theme_color">Rápidos</span></h2>
    <br><br><br>
    <div class="div_acesos_r">
        <a href="#">
            <span class="icon-device_hub"></span>
            <label>Intranet</label>
        </a>
        <a href="#">
            <span class="icon-group_add"></span>
            <label>Convocatoria</label>
        </a>
        <a href="#">   
            <span class="icon-laptop"></span>
            <label>Control Interno</label>
        </a>
        <a href="#">
            <span class="icon-shopping_cart"></span>
            <label>Tienda</label>
        </a>
    </div>
</div>
<br><br><br>
<div class="padre_patronato_in">
    <h2>Nuestros <span class="theme_color">Patrocinadores</span></h2>
   
</div>
<br><br><br><br><br><br><br><br>