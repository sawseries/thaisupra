<html>
      <link href="{{asset('/storage/template/template01/css/template1.css')}}" rel="stylesheet">
    <script src="{{asset('/storage/template/template01/js/script.js')}}"></script>
    <link href="{{asset('/storage/template/template.css')}}" rel="stylesheet">
    <style>
        .panel_cover{
            background-image:url({{url("/storage/template/template04/firstpage.gif")}});
/*            background-color: red;*/
        }
    </style>
    <div class="panel_cover" style="">
      <div style="padding-top:50%;width:100%;text-align:left;">
            <div style="width:100%;">
                <div style="width:100%;">
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
            
            <div style="width:100%;text-align:left;padding-left:2em;color:#566573;">
            <font style="color:#45B39D;font-size:40pt;"><b>ข้อตกลงในการพัฒนางาน</b></font>
            <br><font style="font-size:30pt;">สำหรับครู</font>
            <br><b><font style="font-size:20pt;">(Performance Agreement)</font></b>
            <font style="font-size:18pt;">
            <br><b>{{$Profile->prename}}{{$Profile->firstname}} {{$Profile->lastname}}</b>
            <br>ตำแหน่ง{{$Profile->position}} {{$Profile->academic}}
            </font>
            </div>
        </div>
    </div>
</body>
</html>