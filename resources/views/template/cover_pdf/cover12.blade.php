<html>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  
 

   
    <style>
       

          .Progress {
  width:100%;
  background-color:transparent;
  display:none;
  height:200px;
  padding-top:30%;
  padding-left:2em;
  
}

.Bar{
  width: 1%;
  height:20px;
  background-color: #04AA6D;
}

.upload_image{
    margin:0 auto;
}

  .image{
            border:0; 
            margin:0 auto;
           
            object-fit:contain;
        }
        
        
           .btn {
    text-align:left;
    color:black;
    text-align:left;
    padding:10px;
}

.wrapper {
    display:none;
}

  
        
       .panel_cover{    
             font-family: 'Niramit', sans-serif;
             background-image:url({{public_path("/storage/template/template01/firstpage.gif")}});
        }
        
        .img_container{
             width:20%;
             font-size:16pt;
        }
  
        
        .topic{

        font-size: 1vw;         
        width:300px;
        height:40px;
        background-size:cover;
        background-position:left; 
        background-repeat:no-repeat;
        color: white;
        text-align:left;
        padding:0.5vw; 
        margin-left:5px;
        }
        
        
        .panel_cover{
            font-size:14pt;
        }
        
        
         .col_left{
            height:100%;width:50%;float: left;padding-top:0.5vw;  

        }

        .col_right{
            height:100%;width:50%;float: left;padding-top:1vw;  
        }
        
        
        

        .text_blue{
            color: #47B6B8;
        
            margin-right:10px;
        }

      
        p{
          
            margin:0;
        }

        .text_orange{
            color: #FAA846;
        }

        .image{
            border:0; 
            margin:0 auto;
            width:15vw;
            height:15vw;
            object-fit:contain;
        }

        .box{
            width: 100%;    
            text-align:left;
            padding:0.5em;
        }

        .detail{

            padding-left: 15px;

        }

        .tbl_tem{
            width:100%;
            text-align:left;
        }


        .tbl_tem td{
            text-align:left;
            vertical-align:top;
            padding:0.5;

        }

        .tbl_tem th{
        
             text-align:left;
            vertical-align:top;
            padding:0;
        }
        
     

        
    </style>
    
    
    <div class="panel_cover" >
        
        
        <div style="padding-top:10%;width:100%;">
            <div style="width:100%;text-align:center;">
                <div class="upload_image" style="width:40%;">
                <div id="Progress_1" class="Progress">
                    <div id="Bar_1" class="Bar"></div>
                </div>
                <button id="Image_1" class="btn" onclick="clickfile(1);">  
                    <img src="{{public_path('/storage/template/template01/photo.png')}}" id="Photo_1" class="image" title="เลือกรูปภาพ">
                </button>                    
                <div class="wrapper">                    
                    <input type="file" id="Uplodfile_1" onchange="preview(this,1);" />
                </div> 
                </div>
            </div>
            <div class="img_container">
                <img src="{{public_path('/storage/template/template01/circle.png')}}" style="width:160px;border:0;">
                <div class="centered">
                    พ.ศ.
                    <br>{{PA_year()}}
                </div>
            </div>
            <div style="width:100%;text-align:right;padding-right:2em;">
            <font style="color:#e8a144;font-size:40pt;"><b>ข้อตกลงในการพัฒนางาน</b></font>
            <br><font style="font-size:30pt;">สำหรับครู</font>
            <br><b><font style="font-size:20pt;">(Performance Agreement)</font></b>
            <font style="font-size:18pt;">
            <br><b>{{$Profile->prename}}{{$Profile->firstname}} {{$Profile->lastname}}</b>
            </font>
            <font style="font-size:16pt;">
            <br><br>ตำแหน่ง{{$Profile->position}} {{$Profile->academic}}
            <br>สังกัด {{find_department_str($Profile->department_big)}} 
            @if(!empty($Profile->department_small))
            <br>{{$Profile->department_small}} 
            @endif
            </font>
            </div>
        </div>
       
    </div>
   
</html>