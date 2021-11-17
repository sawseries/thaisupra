<html>
 
    <script src="{{asset('/storage/template/script.js')}}"></script>
    <link href="{{asset('/storage/template/template.css')}}" rel="stylesheet">
    
    <style>
        .panel_cover{
            background-image:url({{url("/storage/template/template05/firstpage.gif")}});
        color:white;
         background-repeat:no-repeat;
            background-size:cover;
            width: 100%;
            height:100%;
        }
        
        .pic{
            border:0;
        }
        
        .col_top{
            width:100%;text-align:left;padding-left:2em;color:white;
        }
        .col-bottom{
         width:100%;text-align:right;padding-right:2em;color:white;   
        }
        
        
    </style>
    <div class="panel_cover" style="">
 <div style="padding-top:30%;width:100%;">
            
            
            <div class="col_top">
            <font style="color:#FFD700;font-size:40pt;"><b>ข้อตกลงในการพัฒนางาน</b></font>
            <br><font style="font-size:30pt;">สำหรับครู</font>
            <br><b><font style="font-size:20pt;">(Performance Agreement)</font></b>
            <font style="font-size:18pt;">
            <br><b>{{$Profile->prename}}{{$Profile->firstname}} {{$Profile->lastname}}</b>
            <br>ตำแหน่ง{{$Profile->position}} {{$Profile->academic}}
            </font>
            </div>
            <div class="col-bottom">
                <div style="width:100%;margin:0 auto;">
                <div id="Progress_1" class="Progress">
                    <div id="Bar_1" class="Bar"></div>
                </div>
                <button id="Image_1" class="btn" onclick="clickfile(1);">  
                    <img src="{{asset('/storage/template/template05/photo.png')}}" id="Photo_1" class="pic" title="เลือกรูปภาพ">
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