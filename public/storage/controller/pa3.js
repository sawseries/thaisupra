          $(document).ready(function() {
       
           $("#bar1").append(bar());   

           $("#bar_title1").text("การจัดการตนเอง");
           $("#bar_title2").text("การสื่อสาร");
           $("#bar_title3").text("การทำงานเป็นทีม");
           $("#bar_title4").text("การคิดขั้นสูง");
           $("#bar_title5").text("การเป็นพลเมืองเข้มแข็ง");

           var _token = $('meta[name="csrf-token"]').attr('content');   
           $.ajax({
               url: "PA_3_agree",
               type: "POST",
               dataType: 'JSON',
               data: {
                _token: _token
               },
               success: function (data) {
              
                 //skill = การจัดการตนเอง
                 //skil2 = การสื่อสาร
                 //skil3 = การทำงานเป็นทีม
                 //skil4 = การคิดขั้นสูง
                 //skil5 = การเป็นพลเมืองเข้มแข็ง
                 
               var skill1 = 0;
               var skill2 = 0;
               var skill3 = 0;
               var skill4 = 0;
               var skill5 = 0;
               
               for(let i=0;i<=(data.length)-1;i++){
                   
                   if((data[i]['sub'])=='1'){
                      skill1 = data[i]['teacher'];  
                   }else if((data[i]['sub'])=='2'){
                      skill2 = data[i]['teacher']; 
                   }else if((data[i]['sub'])=='3'){
                       skill3 = data[i]['teacher'];
                   }else if((data[i]['sub'])=='4'){
                      skill4 = data[i]['teacher']; 
                   }else if((data[i]['sub'])=='5'){
                      skill5 = data[i]['teacher']; 
                   }
               }
                     polygongraph("polygon1",1);  
                     //no,tops,toplefts,toprights,bottomlefts,bottomrights
                     //no,การคิดขั้นสูง,การจัดการตนเอง,การสื่อสาร,การเป็นพลเมืองที่เข้มแข็ง,การรวมพลังทำงานเป็นทีม
                     setnumber(1,skill4,skill1,skill2,skill5,skill3);
                     
                     //การจัดการตนเอง,การสื่อสาร,การรวมพลังทำงานเป็นทีม,การคิดขั้นสูง,การเป็นพลเมืองที่เข้มแข็ง
                     
                     setbar(skill1,skill2,skill3,skill4,skill5,0,0,0,0,0);
               }
            });
       
       //#######################################################################
                  
           });


function check(i, j, k){

            for (z = 1; z <= 5; z++){
            //$("#chk_"+i+"_"+j+"_"+z).attr('checked', false);
            $("#ele_" + i + "_" + j + "_" + z).empty();
            }

            if ($("#chk_" + i + "_" + j + "_" + k).is(':checked')){
            $("#chk_" + i + "_" + j + "_" + k).attr('checked', false);
            $("#ele_" + i + "_" + j + "_" + k).empty();
            } else{
            $("#ele_" + i + "_" + j + "_" + k).append("&#10003;");
            $("#chk_" + i + "_" + j + "_" + k).attr('checked', true);
            }
            }
            
            
            
           function update_agree_field(id,row,fields) {


    var _token = $('meta[name="csrf-token"]').attr('content');
    var values = $("[name='txt" + fields + "[" + row + "]'").val();



    
    if ((!(values))) {
         return false; 
    }else{
     
        $.ajax({
            url: "/PA_3_agree_update_field",
            type: "POST",
            data: {
                field: fields,
                value: values,
                id: id,
                _token: _token
            },
            success: function (data) {
            
                 window.location.reload();
            }
        });
    }
}