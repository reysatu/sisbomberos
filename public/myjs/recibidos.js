

function eliminarReci(idarchivo,descripcion) {

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
            data:  { id: idarchivo,descripcion: descripcion} ,
            url:BASE_URL+"/Archivo/delete",
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