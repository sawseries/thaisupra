<html>
       <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url({{public_path('fonts\THSarabunNew.ttf')}})format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-weight: bold;
            font-style: normal;
            src: url({{public_path('fonts\THSarabunNewBold.ttf')}})format('truetype');
        }    
   
        
        .img_container{
             width:20%;
             font-size:16pt;
        }
        
        .image{
            border:0; 
            margin:0 auto;
            width:150px;
            height:150px;
            object-fit:contain;
        }
        
        .page {
  width: 21cm;
  min-height: 29.7cm;
}

.subpage {
  height: 270mm;
    font-family:"THSarabunNew";
         background-image:url({{public_path("/storage/template/template02/firstpage.gif")}});
             font-size: 1vw;         
        background-size:cover;
        background-position:left; 
        background-repeat:no-repeat;
        text-align:left;
       

}

@page {
  size: A4;
  margin: 0;
}

@media print {
  .page {
    margin: 0;
    border: initial;
    border-radius: initial;
    width: initial;
    min-height: initial;
    box-shadow: initial;
    background: initial;
    page-break-after: always;
  }
}
 
       .col_top{
             width:100%; text-align:right;
            padding-right:1em;
            
        }
        .col-bottom{
         width:100%;text-align:left;padding-left:1em;   
        }
        
         .pic{
            border:0;
        }
        
        .title_header{
            width:100%;background-color:white;text-align:right;padding:0.2em;
            color:#FFD700;font-size:45pt;font-weight:bold;padding-right:0.5em;
        }

    </style>
    <div class="page">
    <div class="subpage">
   
        <div style="padding-top:10%;width:100%;">
            
            <div class="title_header">
           ข้อตกลงในการพัฒนางาน
             </div>
            <div class="col_top">
               
            <font style="font-size:30pt;color:white;">สำหรับครู</font>
            <br><b><font style="font-size:20pt;color:black;">(Performance Agreement)</font></b>
            <font style="font-size:18pt;color:black;">
            <br><b>{{$Profile->prename}}{{$Profile->firstname}} {{$Profile->lastname}}</b>
            <br>ตำแหน่ง{{$Profile->position}} {{$Profile->academic}}
            <br>สังกัด{{find_department_str($Profile->department_big)}}
            <br>{{$Profile->department_small}}
            </font>
            </div>
            <div class="col-bottom">
             
                    <img src="{{public_path('/storage/template/template02/photo.png')}}" style="width:250px;" title="เลือกรูปภาพ">
             
            </div>
        </div>
        
    </div>
        </div>

</html>