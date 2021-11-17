<html>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <script src="{{asset('/storage/template/script.js')}}"></script>
   <link href="{{asset('/storage/template/template.css')}}" rel="stylesheet">


   <style>
              .panel_graphic{
          font-family: 'Niramit', sans-serif;
            background-image:url({{url("/storage/template/template03/graphic.png")}});
          font-size:10pt;
               padding:0em;
            background-repeat:no-repeat;
            background-size:cover;
            width: 100%;
            height:100%;
        }


        .topic{

            font-size: 1.5vw;
          
             background-image:url({{url("/storage/template/template03/head.png")}});
            color:white;
        background-size:cover;
        background-position:center;  
        color: black;

        text-align:left;
        padding:0.5vw;
        padding-left:1vw;
        

        }
        .topic3{

font-size: 1.5vw;

 background-image:url({{url("/storage/template/template03/head2.png")}});
color:white;
background-size:cover;
background-position:center;  
color: black;

text-align:left;
padding:0.5vw;
padding-left:1vw;


}
.topic4{

font-size: 1.5vw;

 background-image:url({{url("/storage/template/template03/head3.png")}});
color:white;
background-size:cover;
background-position:center;  
color: black;

text-align:left;
padding:0.5vw;
padding-left:1vw;


}
p{
   margin:0.2em;  
}
  
        .topic2{

            /* background-image:url({{url("/storage/template/template03/head.png")}});
        background-size:cover;
        background-position:left;  */
        color: black;
        text-align:left;
        font-size: 1.5vw;
        padding:1vw; 
        padding-left:1vw;
        }
       


        .col_left{
            height:100%;width:50%;float: left;padding-top:0.5vw;  

        }

        .col_right{
            height:100%;width:50%;float: left;padding-top:0.5vw;  
            /* white-space: nowrap; */
        }

        .text_blue{
            color:#2FB7EA;
            font-size: 1.2vw;
        }
        .text_darkblue{
            color:#2480C3;
            font-size: 1.2vw;
        }
        
         .text_white{
            color:white;
         }

        /* p{
            font-size:1vw;
        } */

         
        .text_black{
            color: black;
            
        }

        .image{
            border:0; 
            margin-bottom: 30px;
            width: 12vw;
            height: 12vw;
        }

        .box{
            
            text-align:left;
            padding:0.5em;
            
        
        }
        .line{
        background-image:url({{url("/storage/template/template03/line.png")}});
        background-size:cover;
        padding:0; 
        margin:0;
        
        }

        .detail{

            padding-left:0;

        }

      
        .name-text{
            text-align:center;
            height: 7%;
        }
        hr.new1 {
            margin:0.5em;
  border-top: 1px solid ;
}

/* Dashed red border */
hr.new2 {
    margin:0.5em;
  border-top: 1px dashed red;
}
        
    </style>
    <div class="panel_graphic">

        <div class="col_left">
            <!--leftcol-->
            <div class="box" style="background-color: #1F64B0;">
                <center>
                     <div class="upload_image">
                <div id="gProgress_1" class="Progress">
                    <div id="gBar_1" class="Bar"></div>
                </div>
                <button id="gImage_1" class="btn" onclick="gclickfile(1);">  
                    <img src="{{asset('/storage/template/template01/photo.png')}}" id="gPhoto_1" class="image" title="เลือกรูปภาพ">
                </button>
                         <br><span id="gerror" style="font-size:12pt;color:red;"></span>
                <div class="wrapper">                    
                    <input type="file" id="gUplodfile_1" onchange="preview_graphic(this,1);" />
                </div> 
                </div>
                
            <div class="name-text" >
                <span class="text_white"><b>{{$Profile->firstname}} {{$Profile->lastname}}</b></span>
                <br><span class="text_blue">ตำแหน่ง {{$Profile->position}}<br>{{$Profile->academic}}</span>
            </div>
                </center>
            </div>
           

            <div class="topic3">
                <b style="padding-left: 10px;">ข้อมูลทั่วไป</b>
            </div>

            <div class="box" style="background-color: #2480C3;">   
                <p><span class="text_blue_small">ชื่อ</span>{{$Profile->firstname}} {{$Profile->lastname}}</p>   
                <p><span class="text_blue_small">ตำแหน่ง </span> {{$Profile->position}}</p>  
                <p><span class="text_blue_small">สัญชาติ</span> {{$Profile->national}} <span class="text_blue_small">เชื้อชาติ</span> {{$Profile->race}} <span class="text_blue_small">ศาสนา</span> {{$Profile->religion}}</p>            
                <p><span class="text_blue_small">กลุ่มสาระ </span> {{$Profile->major}}</p>           
                <p><span class="text_blue_small">ที่อยู่</span> {{$Profile->address}}</p>
            </div>   
            <div class="topic3">
                <b style="padding-left: 10px;">ประวัติการศึกษา</b>
            </div>
            <div class="box" style="background-color:#2D9DD7;">   
                <table class="tbl_tem">
                    <tr>
                        <td style="width:20%;"><b>วุฒิ</b></td>
                        <td style="width:25%;"><b>คณะ</b></td>
                        <td style="width:25%;"><b>สาขา</b></td>
                        <td style="width:30%;"><b>สถานศึกษา</b></td>
                    </tr>

                    @foreach($uEducation as $uEducation)
                    <tr>
                        <td>{{$uEducation->edu_type}}</td>
                        <td>{{$uEducation->faculty}}</td>
                        <td>{{$uEducation->major}}</td>
                        <td>{{$uEducation->school}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="topic3">
                <b style="padding-left: 10px;">ประวัติการทำงาน</b>
            </div>
            <div class="box" style="background-color:#2FB7EA; ">   

                <p><span class="text_darkblue">วิทยฐานะ</span> {{$Profile->academic}}</p>
                <p><span class="text_darkblue">วันที่ดำรงค์ตำแหน่ง</span> {{datethai($Profile->dateacademic)}}</p>
                <p><span class="text_darkblue">สังกัด</span> {{$Profile->department_big}}</p>
                <p><span class="text_darkblue">โรงเรียน</span> {{$Profile->school}}</p>
                <p><span class="text_darkblue">อายุราชการ</span> {{calage($Profile->dateacademic)}}</p>
                <p><span class="text_darkblue" >ประเภทห้องเรียนที่จัดการเรียนรู้</span>
                <ul >                    
                        @foreach($pa_learn_class as $pa_learn_class) 
                        @if(!empty($arr_learn_class))
                            @if(in_array($pa_learn_class->id,$arr_learn_class))
                            <li>&#x2611; {{$pa_learn_class->value}}</li>
                            @else   
                            <li>&#9634; {{$pa_learn_class->value}}</li>
                            @endif
                        @else   
                        <li>&#9634; {{$pa_learn_class->value}}</li>
                        @endif                        
                        @endforeach
                </ul>       
                </p>
            </div>
        </div>

        <div class="col_right">
            <!--rightcol-->

            <div class="topic" style="font-size:16pt;width:100%;">
                <b>การปฏิบัติหน้าที่ปีการศึกษา {{PA_year()}}</b>
            </div>
            
            <div class="detail">
                <div class="box" >   
                    <span class="text_darkblue" style="font-size:14pt;"><b>วิชาที่ทำการสอน</b></span>
                    <?php $sch_hour = 0; ?>
                    <p><table class="tbl_tem" style="color:white;">
                        <tr>
                            <th>กลุ่มสาระ</th>
                            <th>วิชา</th>
                            <th>ระดับชั้น</th>
                            <th>ชั่วโมง</th>
                        </tr>
                        @foreach($schedule_hour as $schedule_hour)
                        <tr>
                            <td>{{$schedule_hour->group_learn}}</td>
                            <td>{{$schedule_hour->subject}}</td>
                            <td style="text-align:center;">{{$schedule_hour->grade}}</td>
                            <td style="text-align:center;">{{$schedule_hour->sch_hour}}</td>
                        </tr>
                        <?php $sch_hour += $schedule_hour->sch_hour; ?>
                        @endforeach
                        <tr>
                            <td colspan="3" style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                            <td style="text-align:center;"><b>{{$sch_hour}}</b></td>

                        </tr>
                    </table></p>
                </div>
                <hr class="line">
                <div class="box">   
                    <span class="text_blue">งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</span>                
                    <?php $sp_hour = 0; ?>
                    <p><table class="tbl_tem" style="color:white;">
                        <tr>
                            <th>งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</th>
                            <th>ชม./สัปดาห์</th>
                        </tr>
                        @foreach($support_hour as $support_hour)
                        <tr>
                            <td>{{$support_hour->support_detail}}</td>
                            <td style="text-align:center;">{{$support_hour->sp_hour}}</td>
                        </tr>
                        <?php $sp_hour += $support_hour->sp_hour; ?>
                        @endforeach
                        <tr>
                            <td style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                            <td style="text-align:center;"><b>{{$sp_hour}}</b></td>
                        </tr>
                    </table></p>
                </div>
                <hr class="line">
                <div class="box" style="color:black;">   
                    <span class="text_blue">งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</span>
                    <table class="tbl_tem">
                        <tr>
                            <th style="width:80%;">งานพัฒนาคุณภาพฯ</th>
                            <th style="width:20%;">ชม./สัปดาห์</th>
                        </tr>
                        <?php $dev_hour = 0; ?>        
                        @foreach($develop_hour as $develop_hour)
                        <tr>
                            <td>{{$develop_hour->develops}}</td>
                            <td style="text-align:center;">{{$develop_hour->dev_hour}}</td>
                        </tr>
                        <?php $dev_hour += $develop_hour->dev_hour; ?>
                        @endforeach
                        <tr>
                            <td><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                            <td style="text-align:center;"><b>{{$dev_hour}}</b></td>
                        </tr>
                    </table>
                </div>
                <hr class="line">
                <div class="box" style="color:black;">   
                    <span class="text_blue">งานตอบสนองนโยบายและจุดเน้น</span>                
                    <?php $res_hour = 0; ?>
                    <p><table class="tbl_tem">
                        <tr>
                            <td><b>งานตอบสนองนโยบายและจุดเน้น</b></td>
                            <td><b>ชม./สัปดาห์</b></td>
                        </tr>
                        @foreach($response_hour as $response_hour)
                        <tr>
                            <td>{{$response_hour->response}}</td>
                            <td style="text-align:center;">{{$response_hour->res_hour}}</td>
                        </tr>

                        <?php $res_hour += $response_hour->res_hour; ?>
                        @endforeach
                        <tr>
                            <td><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                            <td style="text-align:center;"><b>{{$res_hour}}</b></td>
                        </tr>
                    </table>                
                </div>
                <hr class="line">
            </div>
              <div class="topic">
                  <span class="text_blue"><b >การอบรม/พัฒนาตนเอง</b></span>
            </div>
              <div class="detail">
                <div class="box" style="color:black;">   
                    <p>
                    <table class="tbl_tem">
                        <tr>
                            <th style="width:30%;">หัวข้อ</th>
                            <th style="width:20%;">เวลา</th>
                            <th style="width:20%;text-align:center;">ชั่วโมง</th>
                            <th style="width:30%;">หน่วยงาน</th>
                        </tr>
                        @foreach ($train as $train)
                        <tr>
                            <td>{{$train->train}}</td>
                            <td>{{datebref($train->start_date)}}-{{datebref($train->end_date)}}</td>
                            <td style="text-align:center;">{{$train->train_hour}}</td>
                            <td>{{$train->agency}}</td>
                        </tr>
                        @endforeach
                    </table>
                    </p>
                </div>
            </div>
            <hr class="line">
               <div class="topic">
                   <span class="text_blue"><b>สื่อการเรียนรู้และนวัตกรรม</b></span>
            </div>
            <div class="detail">
                <div class="box" style="color:black;">   
                    @foreach ($inno as $inno)
                    <span class="text_blue">{{$inno->title}}</span>
                    <p>
                    <ul>                        
                        <li>{{$inno->innovation}}</li>
                    </ul>
                    @endforeach
                </div>
            </div>
            <hr class="line">
       
           


    </div>
</div>

</html>