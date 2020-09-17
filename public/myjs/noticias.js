function CancelarNoticias(){
   alertify.error('Cancelado');
   window.location.href=BASE_URL+"/AdminNoticia";
}



function eliminarNoticia(id,descripcion) {

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
            url:BASE_URL+"/AdminNoticia/delete",
            data:{id:id,descripcion:descripcion},
            success: function(e){
              if(e!="1"){
                swal("Registro  eliminado con excito!", {
                                  icon: "success",
                                  buttons: false,
                                  timer: 1500,
                                });
                        window.location.href=BASE_URL+"/AdminNoticia";;
              }else{
                alertify.error('No se puede eliminar Más Archivos');
              }
            }
        });

            }
        });
}

$(window).load(function(){

 $(function() {
  $('#imagen').change(function(e) {
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
      $('#imgSalidaNoticia').attr("src",result);
     }
    });
});