function CancelarNoticias(){
   alertify.error('Cancelado');
   window.location.href=BASE_URL+"/AdminNoticia";
}
function eliminarNoticia(id,descripcion){

alertify.confirm('Eliminar','Seguro que quiere eliminar este registro', 
				function(){ 
				$.ajax({
                  type:'POST',
                  data:{ id: id,descripcion: descripcion} ,
                  url:BASE_URL+"/AdminNoticia/delete",
                  success:function(res){
                  	alertify.success('Ok');
                  	window.location.href=BASE_URL+"/AdminNoticia";
                                  }
                          })
					 }
                , function(){ alertify.error('Cancelado')});
}