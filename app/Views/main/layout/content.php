<style type="text/css">
    #inicio_in{
     color:#fdc236;  
    }   
</style> 
<div class="padre_slider" id="padre_slider">
     <div id="slider" class="slider"> 
        <?php foreach ($slider as $fila):?>
        <li class="slider__section">
            <img src="<?php echo base_url();?>/public/inicio/img/slider/<?php echo $fila->Nombre_Foto;?>">
            <div class="s_fraces">
                <h1 id="s_fraces_h1"><?php echo $fila->Titulo;?></h1>
                <h6><?php echo $fila->Descripcion;?></h6>
                <br><br>
                <a href="<?php echo $fila->Ling;?>"><?php echo $fila->Boton;?></a>
            </div>
            
        </li>
        <?php endforeach?> 
      </div>
      <span id="btn-prev" class="btn-prev"><</span>
      <span id="btn-next" class="btn-next">></span>
    
</div>
<br><br><br><br><br>
<!-- VIDEO YOUTOBE
    <div class="padre_video" id="padre_video">
        <div class="cuadro_video" id="cuadro_video">
            <iframe src="https://www.youtube-nocookie.com/embed/Pzggh3QdMlI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
-->
<div class="padre_noticias_in" id="padre_noticias_in">
    <h2>NOTICIAS <span class="theme_color">ACTUALES</span></h2>
    <p>Mantente Siempre Informado - Bomberos voluntarios del Perú</p>
    <br><br><br>
    <div class="padre_contenido_n_i" id="padre_contenido_n_i">
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
    <div class="div_acesos_r" id="div_acesos_r">
        <a href="<?php echo base_url();?>/Intranet" id="div_acesos_r_a">
            <span id="div_acesos_r_span" class="icon-device_hub"></span>
            <label>Intranet</label>
        </a>
        <a href="<?php echo base_url();?>/Convocatoria" id="div_acesos_r_a">
            <span id="div_acesos_r_span" class="icon-group_add"></span>
            <label>Convocatoria</label>
        </a>
        <a href="<?php echo base_url();?>/LoginAdmin" id="div_acesos_r_a">   
            <span id="div_acesos_r_span" class="icon-laptop"></span>
            <label>Control Interno</label>
        </a>
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LBZ25J44P7K8W" id="div_acesos_r_a">
            <span id="div_acesos_r_span" class="icon-control_point"></span>
            <label>Donar</label>
        </a>
    </div>
</div>

<br><br><br><br><br><br>