

       function bar(){
           
           var htmls = "<div class='avg'>"; 
            htmls+="<div class='bar_avg'>";
           htmls+="คะแนนเฉลี่ย";
           htmls+="</div>";
           htmls+="<div  class='line' style='height:5%;'>";                       
           htmls+="</div>";
           htmls+="<div class='bar_line' style=''>5.00</div>";
           htmls+="<div class='bar_line' style=''>4.00</div>";
           htmls+="<div class='bar_line' style=''>3.00</div>";
           htmls+="<div class='bar_line' style=''>2.00</div>";
           htmls+="<div class='bar_line' style=''><b>1.00</b></div>";
           htmls+="<div class='line' style='height:5%;'>.</div>";
           htmls+="</div>";                                
           htmls+="<div class='bar_block'>";
           htmls+="<div class='bar_grow'>";
           htmls+="<div class='teacher' id='a1'></div>";
           htmls+="<div class='student' id='b1'></div>";
           htmls+="</div>";
           htmls+="<div class='bar_title' id='bar_title1'>";
           htmls+="</div>";                 
           htmls+="</div>";
           htmls+="<div class='bar_block'>";
           htmls+="<div class='bar_grow'>";
           htmls+="<div class='teacher' id='a2'></div>";
           htmls+="<div class='student' id='b2'></div>";
           htmls+="</div>";
           htmls+="<div class='bar_title' id='bar_title2'>";
           htmls+="</div>";
           htmls+="</div>";
           htmls+="<div class='bar_block'>";
           htmls+="<div class='bar_grow'>";
           htmls+="<div class='teacher' id='a3'></div>";
           htmls+="<div class='student' id='b3'></div>";
           htmls+="</div>";
           htmls+="<div class='bar_title' id='bar_title3'>";
           htmls+="</div>";                    
           htmls+="</div>";
           htmls+="<div class='bar_block'>";
           htmls+="<div class='bar_grow'>";
           htmls+="<div class='teacher' id='a4'></div>";
           htmls+="<div class='student' id='b4'></div>";
           htmls+="</div>";
            htmls+="<div class='bar_title' id='bar_title4'></div>";                     
           htmls+="</div>";
           htmls+="<div class='bar_block'>";
           htmls+="<div class='bar_grow'>";
           htmls+="<div class='teacher' id='a5'></div>";
           htmls+="<div class='student' id='b5'></div>";
           htmls+="</div>";
           htmls+="<div class='bar_title' id='bar_title5'></div>"; 
           htmls+="</div>";
          
           return htmls;
       }


        
        function setbar(t1,t2,t3,t4,t5,s1,s2,s3,s4,s5){
       
            bara1(t1);
            bara2(t2);
            bara3(t3);
            bara4(t4);
            bara5(t5);
            
            barb1(s1);
            barb2(s2);
            barb3(s3);
            barb4(s4);
            barb5(s5);
            
            
        }
        
         //การจัดการตนเอง
           function bara1(num)
        {
             var percent = barpercent(num);
             $("#a1").css("height",percent+"%");
             $("#a1").attr('data-before',num);
        }
        
        //การสื่อสาร
             function bara2(num)
        {
             var percent = barpercent(num);
             $("#a2").css("height",percent+"%");
             $("#a2").attr('data-before',num);
        }
        
        //การรวมพลังทำงานเป็นทีม
             function bara3(num)
        {
             var percent = barpercent(num);
             $("#a3").css("height",percent+"%");
             $("#a3").attr('data-before',num);
        }
        
        //การคิดขั้นสูง
             function bara4(num)
        {
             var percent = barpercent(num);
             $("#a4").css("height",percent+"%");
             $("#a4").attr('data-before',num);
        }
        
        //การเป็นพลเมืองที่เข้มแข็ง
             function bara5(num)
        {
             var percent = barpercent(num);
             $("#a5").css("height",percent+"%");
             $("#a5").attr('data-before',num);
        }
        
        
        //การจัดการตนเอง
        
         function barb1(num)
        {
             var percent = barpercent(num);
             $("#b1").css("height",percent+"%");
              $("#b1").attr('data-before',num);
        }
        
        //การสื่อสาร
           function barb2(num)
        {
             var percent = barpercent(num);
             $("#b2").css("height",percent+"%");
             $("#b2").attr('data-before',num);
        }
        
        //การรวมพลังทำงานเป็นทีม
           function barb3(num)
        {
             var percent = barpercent(num);
             $("#b3").css("height",percent+"%");
             $("#b3").attr('data-before',num);
        }
        
        //การคิดขั้นสูง
           function barb4(num)
        {
             var percent = barpercent(num);
             $("#b4").css("height",percent+"%");
             $("#b4").attr('data-before',num);
        }
        
        //การเป็นพลเมืองที่เข้มแข็ง
           function barb5(num)
        {
             var percent = barpercent(num);
             $("#b5").css("height",percent+"%");
             $("#b5").attr('data-before',num);
        }
        
        
        




   function barpercent(num){
       
       
       if(num==0){
           return 2;
       }else if(num>2){
            return (num*20)-8;   
       }else if(num>4){
            return (num*20)-10;  
       }else{
            return num*20;
       }

  }