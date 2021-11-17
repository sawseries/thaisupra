<html>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  
    <link href="{{asset('/storage/template/template01/css/template1.css')}}" rel="stylesheet">
    <script src="{{asset('/storage/template/script.js')}}"></script>
    <link href="{{asset('/storage/template/template.css')}}" rel="stylesheet">
   <style>
       
       .panel_cover{    
             font-family: 'Niramit', sans-serif;
             background-image:url({{url("storage/template/template01/firstpage.gif")}});
        background-repeat:no-repeat;
            background-size:cover;
            width: 100%;
            height:100%;
        }
        
        .img_container{
             width:20%;
             font-size:16pt;
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
                    <img src="{{asset('/storage/template/template01/photo.png')}}" id="Photo_1" class="image" title="เลือกรูปภาพ">
                </button> 
                    <br><span id="error" style="font-size:12pt;color:red;"></span>
                <div class="wrapper">      
                    
                    <input type="file" id="Uplodfile_1" onchange="preview(this,1);" />
                   
                </div> 
                </div>
            </div>
            <div class="img_container">
                <img src="{{asset('storage/template/template01/circle.png')}}" style="width:160px;border:0;">
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