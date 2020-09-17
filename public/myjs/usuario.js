
function CancelarUsuario(){
   alertify.error('Cancelado');
   window.location.href=BASE_URL+"/Usuario";
}



function eliminar(id) {

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
            url:BASE_URL+"/Usuario/delete",
             data:'id='+id,
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