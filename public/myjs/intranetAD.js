	
//Dropzone.options.myAwesomeDropzone = {
 // addRemoveLinks:true;
//};
total=$("#checkArchivo").val();
tkn=$("#tken").val();
trabajador=$("#trabajador").val();

Dropzone.autoDiscover = false;
$(".dropzone").dropzone({
	addRemoveLinks: true,
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
