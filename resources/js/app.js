import Dropzone from "dropzone";
import { drop } from "lodash";

Dropzone.autoDiscover = false;


    const dropzone = new Dropzone('#dropzone', {dictDefaultMessage:'Sube aqui tu imagen',
    acceptedFiles:".png,.jpg,.jpeg,.gif",
    addRemoveLinks: true,
    dictRemoveFile:'Borrar archivo',
    maxFiles: 1, 
    uploadMultiple: false,

    init:function(){
        if(document.querySelector('[name="imagen"]').value.trin()){
          const imagenPublicada ={}
          imagenPublicada.size=1234;
          imagenPublicada.name= document.querySelector('[name="imagen"]').value;
        
        this.options.addedfile.call(this,imagenPublicada);
        this.options.thumbnail.call(this,imagenPublicada,'/uploads/${imagenPublicada.name}')

        imagenPublicada.previewElement.classList.add('dz-success','dz-complete');
        
        }
    }
    
    });



dropzone.on('success',function(file,response){

    document.querySelector('[name="imagen"]').value = response.imagen;
});


dropzone.on('removedfile',function(){
    console.log('archivo eliminado');
});

dropzone.on('removedfile',function(){
    document.querySelector('[name="imagen"]').value = "";
})
