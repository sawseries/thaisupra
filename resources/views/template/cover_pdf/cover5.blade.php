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
            background-image:url({{public_path("/storage/template/template05/firstpage.gif")}});
        font-size: 1vw;         
        background-size:cover;
        background-position:left; 
        background-repeat:no-repeat;
        text-align:left;
        padding:2em;
        color:black;

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
                color:black;
            }
        }

        .pic{
            border:0;
        }

        .col_top{
            width:100%;text-align:left;padding-left:2em;color:white;
        }
        .col-bottom{
            width:100%;text-align:right;padding-right:2em;   
        }


    </style>
    <div class="page">
        <div class="subpage">
            <div class="panel_cover">
                <div style="padding-top:10%;width:100%;">


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

                            <img src="{{public_path('/storage/template/template05/photo.png')}}" style="width:50%;" title="เลือกรูปภาพ">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>