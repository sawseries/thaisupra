   $(document).ready(function() {

   });
   
   function clickfile(uploadid){      
       $("#"+uploadid).click();
   }
   
   function preview(input,preview_id){
       
   if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
        $('#'+preview_id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
   }else{
        alert('select a file to see preview');
        }        
   }
   
      