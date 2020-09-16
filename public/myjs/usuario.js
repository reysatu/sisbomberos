  
function eliminar(id){

alertify.confirm('Eliminar','Seguro que quiere eliminar este registro', 
				function(){ 
				$.ajax({
                  type:'POST',
                  data:'id='+id,
                  url:BASE_URL+"/Usuario/delete",
                  success:function(res){
                  	alertify.success('Ok');
                  	window.location.href=BASE_URL+"/Usuario";
                                  }
                          })
					 }
                , function(){ alertify.error('Cancelado')});
}
function CancelarUsuario(){
   alertify.error('Cancelado');
   window.location.href=BASE_URL+"/Usuario";
}
