function eliminar(descripcion){

alertify.confirm('Eliminar','Seguro que quiere eliminar este registro', 
        function(){ 
        $.ajax({
                  type:'POST',
                  data:'descripcion='+descripcion,
                  url:BASE_URL+"/Intranet/delete",
                  success:function(res){
                    alertify.success('Ok');
                   window.location.href=BASE_URL+"/Intranet/subir";
                                  }
                          })
           }
                , function(){ alertify.error('Cancelado')});
}

Dropzone.autoDiscover = false;
$("#dropzonewidget").dropzone({
	addRemoveLinks: true,
   dictRemoveFile:"Eliminar",
    dictDefaultMessage: "Arrastrar o subir Archivo",
    renameFile:function (file) {
    let newName = new Date().getTime() + '_' + file.name;
    return newName},
    

 	removedfile: function(file) {
  		 var name = file.upload.filename; 
  		 $.ajax({
    		 type: 'POST',
     		url:BASE_URL+"/Intranet/add",
     		data: {name: name,rd: 2},
    		 sucess: function(data){
       			 console.log('success: ' + data);
     			}
   				});
   			var _ref;
    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
 }
});
