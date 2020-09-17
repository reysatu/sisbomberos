	
//Dropzone.options.myAwesomeDropzone = {
 // addRemoveLinks:true;
//};
total=$("#checkArchivo").val();
tkn=$("#tken").val();
trabajador=$("#trabajador").val();

Dropzone.autoDiscover = false;
$(".dropzone").dropzone({
	addRemoveLinks: true,
  dictRemoveFile:"Eliminar",
   maxFilesize: 4,
    dictDefaultMessage: "Arrastrar o subir Archivo",
    renameFile:function (file) {
    let newName = new Date().getTime() + '_' + file.name;
    return newName},
    sending: function(file, xhr, formData){ 
     formData.append('tken', tkn); 
      formData.append('trabajador', trabajador); 
       formData.append('total', total); 
    } ,

 	removedfile: function(file) {
  		 var name = file.upload.filename; 
  		 $.ajax({
    		 type: 'POST',
     		url:BASE_URL+"/IntranetA/add",
     		data: {name: name,rd: 2},
    		 sucess: function(data){
       			 console.log('success: ' + data);
     			}
   				});
   			var _ref;
    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
 }
});

function verGrupSubi(inde){
  
 $("#tablaGroup tbody").empty();
    $.ajax({
                  type:'POST',
                  data:'inde='+inde,
                  url:BASE_URL+"/IntranetA/verGroup",
                  success:function(data){
                      datos=eval(data);

                     for(var i=0; i < datos.length; i++){
                        html="<tr><th scope='row'>"+datos[i]["idarchivo"]+"</th><td>"+  datos[i]["descripcion"]+"</td><td><a href='"+BASE_URL+"/public/archivos/"+datos[i]["descripcion"]+"' type='button' target='_blank' role='button' class='btn btn-success btn-sm'><i class='fas fa-eye'></i></a></td></tr>";
                         $("#tablaGroup tbody").append(html);
                          $("#verArchivos").modal("show");
                     }

                
                      
                                  }
                          })
}



function eliminarGroup(identificador) {

    swal({
            title: "Confirmar",
            text: "¿ Desea Eliminar este registro ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
               $.ajax({ 
            type:'POST',
             data:'identificador='+identificador,
              url:BASE_URL+"/IntranetA/deleteGroup",
            success: function(e){
  
                swal("Registro  eliminado con excito!", {
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



function EnviarArchivosAd(){
  trabajador=$(".trabajador").val();
  $("#dropzonewidget").on('submit', function(evt){
    if (trabajador=="" && $('#checkArchivo').prop('checked')==false && $('#checkConvo').prop('checked')==false ){
         alertify.error('Escoger Usuario')
        evt.preventDefault();}
    else{
      return true;
        }
      });
}

function Cancelar(){
  $("#dropzonewidget").on('submit', function(evt){
        evt.preventDefault()
    
      });
   alertify.error('Cancelado');
   window.location.href=BASE_URL+"/IntranetA";
}
