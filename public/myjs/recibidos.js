 function eliminarReci(idarchivo,descripcion){
    alertify.confirm('Eliminar','Seguro que quiere eliminar este registro', 
        function(){ 
        $.ajax({
                  type:'POST',
                  data:  { id: idarchivo,descripcion: descripcion} ,
                  url:BASE_URL+"/Archivo/delete",
                  success:function(res){
                    alertify.success('Ok');
                    window.location.href=BASE_URL+"/Archivo";
                                  }
                          })
           }
                , function(){ alertify.error('Cancelado')});
}