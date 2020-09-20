<style type="text/css">
    #contacto_in{
     color:#fdc236;
    } 
</style>
<section class="padre_intro">
	<h1>CONTACTO</h1>
	<h3>Bomberos voluntarios del Perú <br> Tarapoto - Perú</h3>
	<img  src="<?php echo base_url();?>/public/img/fondo.jpg">
</section>
<br><br><br>
<div class="auto_container">
        <ul class="breadcrumb"><li><a href="#">Home</a></li><li>Contacto</li></ul>
</div>
<br><br>
	<?php if(!empty($_SESSION['alertCorreo'])){
                   echo($_SESSION['alertCorreo']);

                  }?>
	<div class="padre_contacto_contenido">
		<div class="contenido_form_contacto">
			<form action="<?php echo base_url();?>/Contacto/enviar_correo" method="post">
				<div>
					<label>Nombre</label>
					<input type="text" name="nombre" required>
				</div>
				<div>
					<label>Correo</label>
					<input type="email" name="correo" required>
				</div>
				<div>
					<label>Asunto</label>
					<input type="text" name="asunto" required>
				</div>
				<div>
					<label>Mensaje</label>
					<textarea type="text" name="mensaje" id="textarea_mensaje_contacto" required></textarea>
				</div>
				<input type="submit" name="enviar_contacto" id="enviar_contacto">
			</form>
		</div>
		<div class="contenido_base_contacto">
			<p>Institución pública sin fines de lucro al servicio de la sociedad con más de 37 años al servicio de Tarapoto - Perú</p>
		</div>
	</div>
	<br><br><br>
	<div style="width: 100%; padding: 0px;"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.3139882215473!2d-76.37710868522954!3d-6.481860295311008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ba0bfcb60c0a6f%3A0xff281628d80fc9c2!2sCuerpo%20de%20Bomberos%20Tarapoto!5e0!3m2!1ses!2spe!4v1600541829679!5m2!1ses!2spe" width="100%" height="550" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	</div>
<br><br><br><br><br>
