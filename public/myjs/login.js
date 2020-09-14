function enviar(){
	c1=$("#password1").val();
	c2=$("#password2").val();
	if(c1=="" || c2==""){
		alertify.error('Error');
		return false;
	}
	if(c1==c2){
		$.ajax({
                  type:'POST',
                  data:$("#formContra").serialize(),
                  url:BASE_URL+"/Convocatoria/activarPass",
                  success:function(res){
                  	alertify.success('Ok');

                  	window.location.href=BASE_URL+"/Convocatoria";
                  		
                                  }
                          });
	}else{
		alertify.error('las Contraseñas no coinciden');
	}
}