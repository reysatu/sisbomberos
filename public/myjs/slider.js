function reFresh() {
   window.history.back();
}
$(window).load(function(){

 $(function() {
  $('#upload_d').change(function(e) {
      addImage(e); 
     });

     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;
    
      if (!file.type.match(imageType))
       return;
  
      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }
  
     function fileOnload(e) {
      var result=e.target.result;
      $('#imgSalida').attr("src",result);
     }
    });
});
function guardar_slider(){
	var id = $('#id').val();
	var titulo = $('#titulo').val();
	var descripcion = $('#descripcion').val();
	var files_doc = $('#upload_d')[0].files;

	if ( titulo=="" | descripcion=="") {
		$.notify("Datos en blanco", "error");
		if (descripcion=="") {document.getElementById('descripcion').focus();}
		if (titulo=="") {document.getElementById('titulo').focus();}
	 	return false;
	}
	/*if (files_doc.length==0 ) {
		$.notify("Ninguna imagen seleccionada", "error");
		return false;
	}*/
	var form_data = new FormData();
	form_data.append('files_documento',files_doc[0]);
    form_data.append('id',id);
    form_data.append('titulo',titulo);
    form_data.append('descripcion',descripcion);

	$.ajax({ 
	      type:'POST',
	      data: form_data, 
          url:"registrar",
          crossOrigin : false,
          contentType : false,
          processData : false,
	      success: function(e){
	      	data=eval(e);
	      	if (data==1) {
		      	swal("Slider Insertado con éxito ", {
	                icon: "success",
	                buttons: false,
	                timer: 1000,
	            });
	      	}
	      	if (data==2) {
	      		swal("Slider Editado con éxito ", {
	                icon: "success",
	                buttons: false,
	                timer: 1000,
	            });
	      	}
	      	if (data==3) {
	      		alertify.error("Slider ya registrado !");
	      		return false;
	      	}
            window.setInterval('reFresh()',1000);
	     	
	      }
	});
}
function e_a_slider(opcion,id) {

		swal({
            title: "Confirmar",
            text: "¿ Desea "+opcion+" el slider ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
               $.ajax({ 
			      type:'POST',
			      url: "SliderA/activar_eliminar",
			      data:{id:id,op:opcion},
			      success: function(e){
			      		data=eval(e);
			      		swal("Slider  "+data+" con excito!", {
                                  icon: "success",
                                  buttons: false,
                                  timer: 1500,
                                });
                        window.setInterval('reFresh()',1200);
			      }
				});

            }
        });
}
