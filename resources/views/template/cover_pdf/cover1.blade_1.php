<html>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  

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
             background-image:url({{public_path("storage/template/template01/firstpage.gif")}});
             font-size: 1vw;         
        background-size:cover;
        background-position:left; 
        background-repeat:no-repeat;
        color:black;
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
  

   .img_container{
  position: relative;
  text-align:center;
  color: white;
 
}


.img_container img{
    border:0;
}

.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

.centered {
  position: absolute;
  top:40px;
  left:60px;
  font-size:16pt;
}

    </style>
    
    <div class="page">
    <div class="subpage">
        <div class="panel_cover" >
        
        
        <div style="padding-top:10%;width:100%;">
            <div style="width:100%;text-align:center;">
                <center>
                <img src="{{public_path('/storage/template/template01/photo.png')}}" style="width:160px;border:0;">
                </center>
            </div>
            <div class="img_container">
                <img src="{{public_path('/storage/template/template01/circle.png')}}" style="width:160px;border:0;">
                <div class="centered">
                    <b>  พ.ศ.
                        <br>{{PA_year()}}</b>
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
    
    </div>
  </div>

   
</html>