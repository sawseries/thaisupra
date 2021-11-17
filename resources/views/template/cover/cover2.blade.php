<html>
       <script src="{{asset('/storage/template/script.js')}}"></script>
    <link href="{{asset('/storage/template/template.css')}}" rel="stylesheet">
    <style>
        .panel_cover{
            font-family: 'Niramit', sans-serif;
            background-image:url({{url("/storage/template/template02/firstpage.gif")}});
/*            background-color: red;*/
        }
     
        .col_top{
            text-align:right;
            padding-right:1.5em;
        }
        
        .header_topic{
            width:100%;height:100px;background-color:white;text-align:right;
            color:#FFD700;font-size:40pt;font-weight:bold;
        }
        
    </style>
    <div class="panel_cover" >
   <div style="padding-top:30%;width:100%;">
            
       <div class="header_topic">
           <b>ข้อตกลงในการพัฒนางาน</b>
       </div>
            <div class="col_top">
                
            <br><font style="font-size:30pt;color:white;">สำหรับครู</font>
            <br><b><font style="font-size:20pt;color:black;">(Performance Agreement)</font></b>
            <font style="font-size:18pt;color:black;">
            <br><b>{{$Profile->prename}}{{$Profile->firstname}} {{$Profile->lastname}}</b>
            <br>ตำแหน่ง{{$Profile->position}} {{$Profile->academic}}
            <br>สังกัด{{find_department_str($Profile->department_big)}}
            <br>{{$Profile->department_small}}
            </font>
            </div>
            <div class="col-bottom">
                <div style="width:100%;margin:0 auto;">
                <div id="Progress_1" class="Progress">
                    <div id="Bar_1" class="Bar"></div>
                </div>
                <button id="Image_1" class="btn" onclick="clickfile(1);">  
                    <img src="{{asset('/storage/template/template02/photo.png')}}" id="Photo_1" class="pic" title="เลือกรูปภาพ">
                </button>  
                     <br><span id="error" style="font-size:12pt;color:red;"></span>
                <div class="wrapper">                    
                    <input type="file" id="Uplodfile_1" onchange="preview(this,1);" />
                </div> 
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>