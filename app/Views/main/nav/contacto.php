<style type="text/css">
    #contacto_in{
     color:#fdc236; 
    }  
</style>
<section class="padre_intro">
	<h1>CONTÁCTENOS</h1>
	<h3>Bomberos voluntarios del Perú <br> Tarapoto - Perú</h3>
	<img  src="<?php echo base_url();?>/public/img/fondo.jpg">
</section> 
<br><br><br>
<div class="auto_container">
        <ul class="breadcrumb"><li><a href="#">Home</a></li><li>Contáctenos</li></ul>
</div>
<br><br>
	<?php if(!empty($_SESSION['alertCorreo'])){
                   echo($_SESSION['alertCorreo']);

                  }?>
	<div class="padre_contacto_contenido" id="padre_contacto_contenido">
		<div class="contenido_form_contacto" id="contenido_form_contacto">
			<form action="<?php echo base_url();?>/Contacto/enviar_correo" method="post">
				<div>
					<input type="text" name="nombre" required placeholder="Nombre Completo" >
				</div>
				<div>
					<input type="email" name="correo" required placeholder="Correo Electronico">
				</div>
				<div>
					<input type="text" name="asunto" required placeholder="Asunto">
				</div>
				<div>
					<textarea type="text" name="mensaje" id="textarea_mensaje_contacto" placeholder="Mensaje" required></textarea>
				</div>
				<input type="submit" name="enviar_contacto" id="enviar_contacto">
			</form>
		</div>
		<div class="contenido_base_contacto" id="contenido_base_contacto">
			<div>
				<section class="contenido_base_contacto_icono">
					<samp><span class="icon-call_end"></span></samp>
				</section>
				<section class="contenido_base_contacto_datos">
					<h4>Teléfono</h4>
					<p>(042) 52 3333</p>
				</section>
			</div>
			<div class="contenido_base_contacto_dirc_div" id="contenido_base_contacto_dirc_div" >
				<section class="contenido_base_contacto_icono">
					<samp><span class="icon-room"></span></samp>
				</section>
				<section class="contenido_base_contacto_datos">
					<h4>Dirección</h4>
					<p>Av. Salverry S/N -Tarapoto</p>
				</section>
			</div>
			<div>
				<section class="contenido_base_contacto_icono">
					<samp><span class="icon-markunread_mailbox"></span></samp>
				</section>
				<section class="contenido_base_contacto_datos">
					<h4>Correo</h4>
					<p>imagenbomberos71@gmail.com</p>
				</section>
			</div>
		</div>
	</div>
	<br><br><br><br><br>
	<div class="padre_contacto_mapa">
    <br>
    <h2>Ubícanos en <span class="theme_color"> el mapa</span></h2>
    <br>
		<div style="width: 100%; padding: 0px;"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.3139882215473!2d-76.37710868522954!3d-6.481860295311008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ba0bfcb60c0a6f%3A0xff281628d80fc9c2!2sCuerpo%20de%20Bomberos%20Tarapoto!5e0!3m2!1ses!2spe!4v1600541829679!5m2!1ses!2spe" width="100%" height="550" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
		</div>
	</div>
<br><br><br><br><br>
