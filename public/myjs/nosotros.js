function guardar_nosotros() {
	var id = $('#id').val();
	var Historia = $('#Historia').val();
	var Mision = $('#Mision').val();
	var Vision = $('#Vision').val();
	var Valores = $('#Valores').val();
	var files_doc = $('#upload_d')[0].files;

	if ( Historia=="" | Mision=="" | Vision=="" | Valores=="") {
		$.notify("Datos en blanco", "error");
		if (Valores=="") {document.getElementById('Valores').focus();}
		if (Vision=="") {document.getElementById('Vision').focus();}
		if (Mision=="") {document.getElementById('Mision').focus();}
		if (Historia=="") {document.getElementById('Historia').focus();}
	 	return false;
	}
	/*if (files_doc.length==0 ) {
		$.notify("Ninguna imagen seleccionada", "error");
		return false;
	}*/
	var form_data = new FormData();
	form_data.append('files_documento',files_doc[0]);
    form_data.append('id',id);
    form_data.append('Historia',Historia);
    form_data.append('Mision',Mision);
    form_data.append('Vision',Vision);
    form_data.append('Valores',Valores);

	$.ajax({ 
	      type:'POST',
	      data: form_data, 
          url:"registrar",
          crossOrigin : false,
          contentType : false,
          processData : false,
	      success: function(e){
	      	data=eval(e);

	      	if (data==2) {
	      		swal("Se ha editado con éxito ", {
	                icon: "success",
	                buttons: false,
	                timer: 1000,
	            });
	      	}
            window.setInterval('reFresh()',1000);
	     	
	      }
	});
}