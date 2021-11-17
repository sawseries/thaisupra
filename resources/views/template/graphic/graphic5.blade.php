<html>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <link href="{{asset('/storage/template/template.css')}}" rel="stylesheet">
    <style>
               .panel_graphic{
                
                 font-family: 'Niramit', sans-serif;
            background-image:url({{url("/storage/template/template05/graphic.gif")}});
          font-size:10pt;
               padding:0em;
            background-repeat:no-repeat;
            background-size:cover;
            width: 100%;
            height:100%;

            }

        .topic{

            font-size:14pt;
          
             background-image:url({{url("/storage/template/template03/head.png")}});
            color:white;
        background-size:cover;
        background-position:center;  
        color: black;

        text-align:left;
        padding:0.5vw;
        padding-left:1vw;
        

        }
   

   
p{
    margin-top: 0;
     margin-bottom: 0rem;
    
}
        .topic2{

        
        color: orange;
        text-align:left;
        font-size:19pt;
  
        padding-left:0.5vw;
        }
        .topic3{

background-image:url({{url("/storage/template/template05/head.png")}});
background-size:cover;
background-position:left; 
color: orange;
text-align:left;
font-size:16pt;
padding:0.5vw; 
padding-left:1vw;
}



        .col_left{
            height:100%;width:40%;float: left;padding-top:0.5vw;color:white;

        

        }

        .col_right{
            height:100%;width:54%;float: left;padding-top:0.5vw;  
   
        }

        .text_white{
            color:white;
            font-size: 8pt;
            
        }
        
         .text_orange{
            color:orange;
            font-size: 1vw;
         }
       
        .text_black{
            color: black;
        }

        .image{
            border:0; 
        
            width: 10vw;
            height:10vw;
        }

        .box{
            
       
            text-align:left;
          
            padding:0.5em;
            margin-left:0.55vw;
            margin-right:0.6vw;
        
        }
        .box-img{
            
            background-color: white;
        
            text-align:left;
            width:15vw;
            padding:1em;
            margin:0 auto;
      
        
        }
        .detail td,th{
            color:black;
        }

        .detail{

            padding-left: 10px;

        }

        .tbl_tem01{
            width:100%;text-align:left;
            border:0;font-size:10pt;
        }


        .tbl_tem01 td{
            text-align:left;
            padding-left : 1vw;
        }

        .tbl_tem01 th{
            text-align:left; 
            padding-left : 1vw;
        }
        .name-text{
            background-image:url({{url("/storage/template/template05/head2.png")}});
            background-size:cover;
            background-position:left; 
            margin-bottom:5%;
            text-align:left;
            height: 10%;
            padding:10px
        }
    </style>
    <div class="panel_graphic">

        <div class="col_left">
            <!--leftcol-->
            <div class="box-img" style="  text-align:center;">
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
            
            </div>
           

            <div class="topic2">
                <b  style="padding-left: 10px;">ข้อมูลทั่วไป</b>
            </div>

            <div class="box" >   
                <p><span class="text_orange">ชื่อ</span> {{$Profile->firstname}} {{$Profile->lastname}}</p>   
                <p><span class="text_orange">ตำแหน่ง </span> {{$Profile->position}}</p>  
                <p><span class="text_orange">สัญชาติ</span> {{$Profile->national}} <span class="text_orange">เชื้อชาติ</span> {{$Profile->race}} <span class="text_orange">ศาสนา</span> {{$Profile->religion}}</p>            
                <p><span class="text_orange">กลุ่มสาระ </span> {{$Profile->major}}</p>           
                <p><span class="text_orange">ที่อยู่</span> {{$Profile->address}}</p>
            </div>   
            <div class="topic2">
                <b  style="padding-left: 10px;">ประวัติการศึกษา</b>
            </div>
            <div class="box" >   
                <table class="tbl_tem01">
                    <tr>
                        <td style="width:15%;"><b>วุฒิ</b></td>
                        <td style="width:15%;"><b>คณะ</b></td>
                        <td style="width:15%;"><b>สาขา</b></td>
                        <td style="width:25%;"><b>สถานศึกษา</b></td>
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
            <div class="topic2">
                <b  style="padding-left: 10px;">ประวัติการทำงาน</b>
            </div>
            <div class="box" >   

                <p><span class="text_orange">วิทยฐานะ</span> {{$Profile->academic}}</p>
                <p><span class="text_orange">วันที่ดำรงค์ตำแหน่ง</span> {{datethai($Profile->dateacademic)}}</p>
                <p><span class="text_orange">สังกัด</span> {{$Profile->department_big}}</p>
                <p><span class="text_orange">โรงเรียน</span> {{$Profile->school}}</p>
                <p><span class="text_orange">อายุราชการ</span> {{calage($Profile->dateacademic)}}</p>
                <p><span class="text_orange" >ประเภทห้องเรียนที่จัดการเรียนรู้</span>
                <ul>                    
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
            <div class="name-text" >
                <span class="text_white" style="font-size:2vw;"><b>{{$Profile->firstname}} {{$Profile->lastname}}</b></span>
                <br><span class="text_white" style="font-size:1vw;">ตำแหน่ง {{$Profile->position}} {{$Profile->academic}}</span>
            </div>
            <div class="topic3">
                <b  style="padding-left: 10px; color:white">การปฏิบัติหน้าที่ปีการศึกษา {{PA_year()}}</b>
            </div>
            <div class="detail">
                <div class="box">   
                    <span class="text_orange">วิชาที่ทำการสอน</span>
                    <?php $sch_hour = 0; ?>
                    <p><table class="tbl_tem01">
                        <tr>
                            <th>กลุ่มสาระ</th>
                            <th>วิชา</th>
                            <th>ระดับชั้น</th>
                            <th>ชั่วโมงที่ทำการสอน</th>
                        </tr>
                        @foreach($schedule_hour as $schedule_hour)
                        <tr>
                            <td>{{$schedule_hour->group_learn}}</td>
                            <td>{{$schedule_hour->subject}}</td>
                            <td>{{$schedule_hour->grade}}</td>
                            <td>{{$schedule_hour->sch_hour}}</td>
                        </tr>
                        <?php $sch_hour += $schedule_hour->sch_hour; ?>
                        @endforeach
                        <tr>
                            <td colspan="3" style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                            <td><b>{{$sch_hour}}</b></td>

                        </tr>
                    </table></p>
                </div>

                <div class="box">   
                    <span class="text_orange">งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</span>                
                    <?php $sp_hour = 0; ?>
                    <p><table class="tbl_tem01">
                        <tr>
                            <th>งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</th>
                            <th>ชั่วโมง/สับดาห์</th>
                        </tr>
                        @foreach($support_hour as $support_hour)
                        <tr>
                            <td>{{$support_hour->support_detail}}</td>
                            <td>{{$support_hour->sp_hour}}</td>
                        </tr>
                        <?php $sp_hour += $support_hour->sp_hour; ?>
                        @endforeach
                        <tr>
                            <td style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                            <td><b>{{$sp_hour}}</b></td>
                        </tr>
                    </table></p>
                </div>
                <div class="box" style="color:black">   
                    <span class="text_orange">งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</span>
                    <p><table class="tbl_tem01">
                        <tr>
                            <th>งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</th>
                            <th>ชั่วโมง/สับดาห์</th>
                        </tr>
                        <?php $dev_hour = 0; ?>        
                        @foreach($develop_hour as $develop_hour)
                        <tr>
                            <td>{{$develop_hour->develops}}</td>
                            <td>{{$develop_hour->dev_hour}}</td>
                        </tr>
                        <?php $dev_hour += $develop_hour->dev_hour; ?>
                        @endforeach
                        <tr>
                            <td><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                            <td><b>{{$dev_hour}}</b></td>
                        </tr>
                    </table></p>
                </div>

                <div class="box" style="color:black">   
                    <span class="text_orange">งานตอบสนองนโยบายและจุดเน้น</span>                
                    <?php $res_hour = 0; ?>
                    <p><table class="tbl_tem01">
                        <tr>
                            <td><b>งานตอบสนองนโยบายและจุดเน้น</b></td>
                            <td><b>ชั่วโมง/สับดาห์</b></td>
                        </tr>
                        @foreach($response_hour as $response_hour)
                        <tr>
                            <td>{{$response_hour->response}}</td>
                            <td>{{$response_hour->res_hour}}</td>
                        </tr>

                        <?php $res_hour += $response_hour->res_hour; ?>
                        @endforeach
                        <tr>
                            <td><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                            <td><b>{{$res_hour}}</b></td>
                        </tr>
                    </table>                
                </div>  
                <div class="box">
            <div class="line">
                
                </div>
            </div>
            </div>
          
        
            <div class="topic2">
                <b style="padding-left: 10px;">การอบรม/พัฒนาตนเอง</b>
            </div>
            <div class="detail">
                <div class="box" style="color:black">   
                    <p>
                    <table class="tbl_tem01">
                        <tr>
                            <th style="width:30%;">หัวข้อ</th>
                            <th style="width:20%;">เริ่มต้น</th>
                            <th style="width:20%;">สิ้นสุด</th>
                            <th style="width:10%;">ชั่วโมง</th>
                            <th style="width:20%;">หน่วยงาน</th>
                        </tr>
                        @foreach ($train as $train)
                        <tr>
                            <td>{{$train->train}}</td>
                            <td>{{datebref($train->start_date)}}</td>
                            <td>{{datebref($train->end_date)}}</td>
                            <td>{{$train->train_hour}}</td>
                            <td>{{$train->agency}}</td>
                        </tr>
                        @endforeach
                    </table>
                    </p>
                </div>
                <div class="box">
            <div class="line">
                
                </div>
            </div>
            </div>
            <div class="topic2">
                <b style="padding-left: 10px;">สื่อการเรียนรู้และนวัตกรรม</b>
            </div>
            <div class="detail">
                <div class="box" style="color:black">   
                    <span class="text_orange">สื่อการเรียนรู้และนวัตกรรม</span>
                    <p>
                    <ul>
                        @foreach ($inno as $inno)
                        <li>{{$inno->innovation}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="box">
            <div class="line">
                
                </div>
            </div>
            </div>  
        </div>


    </div>
</div>

</html>