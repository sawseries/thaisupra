

               function tops_style(no){  
         
                  
            $(".top_"+no).css("position","absolute");
            $(".top_"+no).css("z-index","1");
            $(".top_"+no).css("margin-left","23%");
            
            $(".top_"+no).css("width","50%");
            $(".top_"+no).css("height","50%");
            $(".top_"+no).css("float","left");
            $(".top_"+no).css("background-repeat","no-repeat");
            $(".top_"+no).css("-webkit-background-size","cover");
            $(".top_"+no).css("-moz-background-size","cover");
           
            $(".top_"+no).css("-o-background-size","cover");
            $(".top_"+no).css("background-size","cover");
            $(".top_"+no).css("background-position"," center center");
                        
            $(".top_"+no).css("clip-path","polygon(100% 100%,50% 0%,0% 100%)");            
            $(".top_"+no).css("-webkit-clip-path"," polygon(100% 100%,50% 0%,0% 100%)");
            //https://www.i-pic.info/i/06PS73231.png'
            $(".top_"+no).css("background-image","url('assets/polygon/graph/tops.png')"); 
            
            tops_cover(no);
               
    }
    
    
       
        function tops_cover(no){             
      
          
            $(".top_cover_"+no).css("clip-path","polygon(100% 100%,50% 0%,0% 100%)");            
            $(".top_cover_"+no).css("-webkit-clip-path","polygon(100% 100%,50% 0%,0% 100%)");
            $(".top_cover_"+no).css("float","left");
            $(".top_cover_"+no).css("opacity",".6"); 
            $(".top_cover_"+no).css("background-color","#FF0000"); 
        }
        
        function tops_cover_style(no,num) 
        {
            
            var percent = polygonpercent(num);
          
             $(".top_cover_"+no).css("width","100%");
             $(".top_cover_"+no).css("height",percent+"%");
        }
    
    
     /////////////////////////////////////////////////
        
       
        
          function topleft_style(no){  

            $(".topleft_"+no).css("width","50%");
            $(".topleft_"+no).css("height","100%");
            $(".topleft_"+no).css("float","left");
            $(".topleft_"+no).css("background-repeat","no-repeat");
            $(".topleft_"+no).css("-webkit-background-size","cover");
            $(".topleft_"+no).css("-moz-background-size","cover");
            $(".topleft_"+no).css("-o-background-size","cover");
            $(".topleft_"+no).css("background-size","cover");
           
            $(".topleft_"+no).css("background-position","center");
                           
            $(".topleft_"+no).css("clip-path","polygon(100% 100%,100% 0%,0% 100%)");            
            $(".topleft_"+no).css("-webkit-clip-path"," polygon(100% 100%,100% 0%,0% 100%)");// https://www.i-pic.info/i/Tvs573229.png
            $(".topleft_"+no).css("background-image","url('assets/polygon/graph/topleft.png')"); 
            $(".topleft_"+no).css("position","relative"); 
            
            topleft_cover(no);
            
        }
        
        
                function topleft_cover(no){  
           
            $(".topleft_cover_"+no).css("clip-path","polygon(100% 100%,100% 0%,0% 100%)");            
            $(".topleft_cover_"+no).css("-webkit-clip-path","polygon(100% 100%,100% 0%,0% 100%)");
            $(".topleft_cover_"+no).css("float","right");
            $(".topleft_cover_"+no).css("opacity",".6"); 
            $(".topleft_cover_"+no).css("background-color","#A7E376");
            $(".topleft_cover_"+no).css("bottom","0");
            $(".topleft_cover_"+no).css("right","0");
            $(".topleft_cover_"+no).css("position","absolute");

        }
        
        
           function topleft_cover_style(no,num)
        {
            var percent = polygonpercent(num);
             $(".topleft_cover_"+no).css("width",percent+"%");
             $(".topleft_cover_"+no).css("height",percent+"%");
        }
        
        /////////////////////////////////////////////
        
               function topright_style(no){  

            $(".topright_"+no).css("width","50%");
            $(".topright_"+no).css("height","100%");
            $(".topright_"+no).css("float","left");
            $(".topright_"+no).css("background-repeat","no-repeat");
            $(".topright_"+no).css("-webkit-background-size","cover");
            $(".topright_"+no).css("-moz-background-size","cover");
            $(".topright_"+no).css("-o-background-size","cover");
            $(".topright_"+no).css("background-size","cover");
            $(".topright_"+no).css("background-position","center");
                           
          
                           
            $(".topright_"+no).css("clip-path","polygon(0% 100%,100% 100%,0% 0%)");            
            $(".topright_"+no).css("-webkit-clip-path","polygon(0% 100%,100% 100%,0% 0%)");//https://www.i-pic.info/i/nE1373230.png
            $(".topright_"+no).css("background-image","url('assets/polygon/graph/topright.png')"); 
            $(".topright_"+no).css("position","relative"); 
            
        topright_cover(no);
        }
        
        
         function topright_cover(no){
 
           
            $(".topright_cover_"+no).css("clip-path","polygon(0% 100%,100% 100%,0% 0%)");            
            $(".topright_cover_"+no).css("-webkit-clip-path","polygon(0% 100%,100% 100%,0% 0%)");
            $(".topright_cover_"+no).css("float","left");
            $(".topright_cover_"+no).css("opacity",".6"); 
            $(".topright_cover_"+no).css("background-color","#76E3C9");
            $(".topright_cover_"+no).css("bottom","0");
            $(".topright_cover_"+no).css("position","absolute");

        }
        
        
           function topright_cover_style(no,num)
        {
             var percent = polygonpercent(num);
             $(".topright_cover_"+no).css("width",percent+"%");
             $(".topright_cover_"+no).css("height",percent+"%");
        }
        
        /////////////////////////////////////////////////////
        
                
         function bottomleft_style(no){  
             
            $(".bottomleft_"+no).css("width","50%");
            $(".bottomleft_"+no).css("height","100%");
            $(".bottomleft_"+no).css("float","left");
            $(".bottomleft_"+no).css("background-repeat","no-repeat");
            $(".bottomleft_"+no).css("-webkit-background-size","cover");
            $(".bottomleft_"+no).css("-moz-background-size","cover");
            $(".bottomleft_"+no).css("-o-background-size","cover");
            $(".bottomleft_"+no).css("background-size","cover");
            $(".bottomleft_"+no).css("background-position","center");
                           
            $(".bottomleft_"+no).css("clip-path","polygon(100% 0%,1% 0%,50% 100%)");            
            $(".bottomleft_"+no).css("-webkit-clip-path","polygon(100% 0%,1% 0%,50% 100%)");//https://www.i-pic.info/i/FxdE73226.png
            $(".bottomleft_"+no).css("background-image","url('assets/polygon/graph/bottomleft.png')"); 
            bottomleft_cover(no);
        }
        
        
         function bottomleft_cover(no){
 
             
            $(".bottomleft_cover_"+no).css("clip-path","polygon(100% 0%,1% 0%,50% 100%)");            
            $(".bottomleft_cover_"+no).css("-webkit-clip-path","polygon(100% 0%,1% 0%,50% 100%)");
            $(".bottomleft_cover_"+no).css("float","right");
            $(".bottomleft_cover_"+no).css("opacity",".6"); 
            $(".bottomleft_cover_"+no).css("background-color","#1050A2");
     

        }
        
        
           function bottomleft_cover_style(no,num)
        {
            var percent = polygonpercent(num);
             $(".bottomleft_cover_"+no).css("width",percent+"%");
             $(".bottomleft_cover_"+no).css("height",percent+"%");
        } 
        
        /////////////////////////////////////////////////////////
              function bottomright_style(no){  
             
            $(".bottomright_"+no).css("width","50%");
            $(".bottomright_"+no).css("height","100%");
            $(".bottomright_"+no).css("float","left");
            $(".bottomright_"+no).css("background-repeat","no-repeat");
            $(".bottomright_"+no).css("-webkit-background-size","cover");
            $(".bottomright_"+no).css("-moz-background-size","cover");
            $(".bottomright_"+no).css("-o-background-size","cover");
            $(".bottomright_"+no).css("background-size","cover");
            $(".bottomright_"+no).css("background-position","center");
                       
                           
            $(".bottomright_"+no).css("clip-path","polygon(0% 0%,100% 0%,50% 100%)");            
            $(".bottomright_"+no).css("-webkit-clip-path","polygon(0% 0%,100% 0%,50% 100%)");//https://www.i-pic.info/i/Lmcz73228.png
             $(".bottomright_"+no).css("background-image","url('assets/polygon/graph/bottomright.png')");                    
             
             bottomright_cover(no);

        } 
        
        
        
                  function bottomright_cover(no){

             
            $(".bottomright_cover_"+no).css("clip-path","polygon(100% 0%,1% 0%,50% 100%)");            
            $(".bottomright_cover_"+no).css("-webkit-clip-path","polygon(100% 0%,1% 0%,50% 100%)");
            $(".bottomright_cover_"+no).css("float","left");
            $(".bottomright_cover_"+no).css("opacity",".6"); 
            $(".bottomright_cover_"+no).css("background-color","#FDE726");
     

        }
//        
//        
           function bottomright_cover_style(no,num)
        {
            var percent = polygonpercent(num);
             $(".bottomright_cover_"+no).css("width",percent+"%");
             $(".bottomright_cover_"+no).css("height",percent+"%");
        } 
//       
        
            function setnumber(no,tops,toplefts,toprights,bottomlefts,bottomrights){
                 //alert(top);
             tops_cover_style(no,tops);
             topleft_cover_style(no,toplefts);
             topright_cover_style(no,toprights);
             bottomleft_cover_style(no,bottomlefts);
             bottomright_cover_style(no,bottomrights);
           }
        
        
         function polygonpercent(num){
             
              if((num>=1)&&(num<=1.5)){
         return 40;
     }else if((num>=1.51)&&(num<=2.5)){
         return 55;
     }else if((num>=2.51)&&(num<=3.5)){
         return 70;
     }else if((num>=3.51)&&(num<=4.5)){
         return 85;
     }else if((num>=4.5)&&(num<=5)){
         return 100;
     }

        }
        
                       function polygongraph(id,no){
            

        var htmls="<div class='top_polygon'>";
           htmls+="<div class='topleft_"+no+"'><div class='topleft_cover_"+no+"' onmouseover='settoplefthover_in("+no+");' onmouseout='settoplefthover_out("+no+");'></div></div>";
           htmls+="<div class='topright_"+no+"'><div class='topright_cover_"+no+"' onmouseover='settoprighthover_in("+no+");' onmouseout='settoprighthover_out("+no+");'></div></div>";
           htmls+="</div>";
           htmls+="<div class='bottom_polygon'>";
           htmls+="<div class='bottomleft_"+no+"'><div class='bottomleft_cover_"+no+"' onmouseover='setbottomlefthover_in("+no+");' onmouseout='setbottomlefthover_out("+no+");'></div></div>";        
           htmls+="<div class='top_"+no+"'><div class='top_cover_"+no+"' onmouseover='settophover_in("+no+");'></div></div>";
           htmls+="<div class='bottomright_"+no+"'><div class='bottomright_cover_"+no+"' onmouseover='setbottomrighthover_in("+no+");' onmouseout='setbottomrighthover_out("+no+");'></div></div>";
           htmls+="<center><font style='font-size:15pt;'><b>การคิดขั้นสูง</b></font></center>";
           htmls+="</div>";
 
             
           $("#"+id).html(htmls);   
      
           setstyles(no);                
        }
        
          function settophover_in(no){
           
              $(".top_cover_"+no).css("background-color","#FF0000");
          }
          
           function settophover_out(no){
              alert(no);
              $(".top_cover_"+no).css("background-color","#FF0000");
          }
          
          function setbottomrighthover_in(no){
              
              $(".bottomright_cover_"+no).css("background-color","green");
          }
          
          function setbottomrighthover_out(no){
              
              $(".bottomright_cover_"+no).css("background-color","#FDE726");
          }
          
          
          function setbottomlefthover_in(no){
              
              $(".bottomleft_cover_"+no).css("background-color","green");
          }
          
          function setbottomlefthover_out(no){
              
              $(".bottomleft_cover_"+no).css("background-color","#1050A2");
          }
          
          
           function settoplefthover_in(no){
              
              $(".topleft_cover_"+no).css("background-color","#EFEFEF");
          }
          
          function settoplefthover_out(no){
              
              $(".topleft_cover_"+no).css("background-color","#A7E376");
          }
          
          
          function settoprighthover_in(no){
              
              $(".topright_cover_"+no).css("background-color","yellowgreen");
          }
          
          function settoprighthover_out(no){
              
              $(".topright_cover_"+no).css("background-color","#76E3C9");
          }
        
          function setstyles(no){
   
           
           tops_style(no);
           topleft_style(no);
           topright_style(no);
           bottomleft_style(no);
           bottomright_style(no);
        }
        