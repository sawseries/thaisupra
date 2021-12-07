  $(document).ready(function(){
        loadcover(1);
     
        
        for(i=1;i<=16;i++){
            $('.textstyle_'+i).css('font-size',"12pt");
            $('.textstyle_'+i).css('font-family',('Sarabun','sans-serif'));
            $('.textstyle_'+i+" table").css('font-family',('Sarabun','sans-serif'));
            $('.textstyle_'+i+" table").css('font-size',"10pt");      
        }
        
        
        
        $("#template-left-side").scroll(function (event) {
          $('.panel').mouseover(function() {
                $("#page_number").val(this.id);
           });
        });
        
        
//          $("#template-left-side").scroll(function (event) {
//              
//              var div_id = $(this).closest('div').find('div.panel').attr('id'); 
//               $("#page_number").val(div_id);
//        });
        
        var percent = 100;
        var font = parseInt(14); 
        var left = 10;
        
        
          $('#ZoomIn').click(function() {
             
             percent = parseInt($("#percent").text());
             left-=1;
              
               if((percent<=100)){
                   
                 if((percent<=95)){
                    percent+=5;
                    
                    if(font<=14){
                      font+=0.2;
                    }
                     left=parseInt(left)-5;
                     $('#template-left-side').css('padding-left', left + 'mm');
                     for(i=1;i<=16;i++){
                    $('#subpage_'+i).css('width',percent+'%');
                   
                     $('.textstyle_'+i).css('font-size',(font)+"px" );
                     $('.textstyle_'+i+" table").css('font-size',(font)+"px" );
                     $('.textstyle_'+i+" h2").css('font-size',font+"px");
                     
                     $('.textstyle_'+i).css('font-family',('Sarabun','sans-serif'));
                     $('.textstyle_'+i+" table").css('font-family',('Sarabun','sans-serif'));
                     $('.textstyle_'+i+" h2").css('font-family',('Sarabun','sans-serif'));
                     
                      
                     
                    }
               
                   
                  }
                  $("#percent").text(percent);
                   
                }
           
             });
             
               var left = 10; 
        $('#ZoomOut').click(function() {
            
              
               percent = parseInt($("#percent").text());
               
               if(percent>50){
                percent = percent-5;
                left=parseInt(left)+5;

                $('#template-left-side').css('padding-left', left + 'mm');

                    for(i=1;i<=16;i++){ 
                        $('#subpage_'+i).css('width',percent+'%');
                       
                        $('.textstyle_'+i).css('font-size',(parseInt($('.textstyle_'+i).css('font-size'))-2) + "px" );
                        $('.textstyle_'+i+" table").css('font-size',(parseInt($('.textstyle_'+i).css('font-size'))-2)+"px" );
                        $('.textstyle_'+i+" h2").css('font-size',(parseInt($('.textstyle_'+i).css('font-size'))-2)+"px" );
                    }
               
                    $("#percent").text(percent);
                }
          
             });

//         $('#ZoomReset').click(function() {
//           
//               
//           
//         });



        
       });


function ZoomIn (event) {
  alert("e");
    $("#mainpage").width(
        $("#mainpage").width() * 1.2
    );

    $("#mainpage").height(
        $("#mainpage").height() * 1.2
    );
}

function  ZoomOut (event) {

    $("#mainpage").width(
        $("#mainpage").width() * 0.5
    );

    $("#mainpage").height(
        $("#mainpage").height() * 0.5
    );
}
    
    
function print()
    {
    var node = document.getElementById('output');
    domtoimage.toPng(node).then(function(dataUrl) {


    var link = document.createElement('a');
    link.href = dataUrl;
    link.download = 'pa_graphic.jpg';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    }).catch(function(error) {
    console.error('oops, something went wrong!', error);
    });
    }
    
    
       function print_graphic()
    {
    var node = document.getElementById('output_preview');
    domtoimage.toPng(node).then(function(dataUrl) {


    var link = document.createElement('a');
    link.href = dataUrl;
    link.download = 'pa_graphic.jpg';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    }).catch(function(error) {
    console.error('oops, something went wrong!', error);
    });
    }
    
var page = 1;
var allpage = 15;

function previous(){
      
    if(page>1){ 
      page--;    
    }
    
    if(page==1){ 
      var coverpage = $("#cover_number").val();
      loadcover(coverpage);  
    }
     
   $("#page_number").val(page);
   
  var newmsg_top = parseInt($('#'+page)[0].scrollHeight);
      $('#template-left-side').scrollTop(newmsg_top);
   //loadpage(page)
   
}

function nexts(){

    if(page<15){ 
    page++;
    }
    alert(page);
    $("#page_number").val(page);
     var newmsg_top = parseInt($('#'+page)[0].scrollHeight);
      $('#template-left-side').scrollTop(newmsg_top);

}


function loadpdf(){
  
     var pages = $("#cover_number").val();  
 
     $(window).load('pdf/'+pages);
}

function loadpage(pages){

     $('#output').fadeOut('slow');   
     $('#output').load('Template1/page'+pages);
     $('#output').fadeIn('slow'); 
}


function loadcover(pages){
    
 
    var newmsg_top = parseInt($('#top')[0].scrollHeight);
    $('#template-left-side').scrollTop(newmsg_top);

    $('#output').load('coverpage/cover'+pages);
     page=1;
    $('#output').fadeIn('slow');  
    $("#cover_number").val(pages);
    $("#page_number").val(1);   
}



function loadgraphic(){
    
  
    
    var pages = $("#cover_number").val();
    $('#output_preview').load('graphic/graphic'+pages);
     page=1;
    $('#output_preview').fadeIn('slow');  
    $("#cover_number").val(pages);

    $("#page_number").val(1); 
     $("#graphic_preview").css("display", "block");
}


