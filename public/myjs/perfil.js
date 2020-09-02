
function eliminar(id){

alertify.confirm('Eliminar','Seguro que quiere eliminar este registro', 
				function(){ 
				$.ajax({
                  type:'POST',
                  data:'id='+id,
                  url:BASE_URL+"/Perfil/delete",
                  success:function(res){
                  	alertify.success('Ok');
                  	window.location.href=BASE_URL+"/Perfil";
                                  }
                          })
					 }
                , function(){ alertify.error('Cancelado')});
}