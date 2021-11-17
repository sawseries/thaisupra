<html>
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
   
   
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link href="{{asset('/storage/template/template02/css/template2.css')}}" rel="stylesheet">
    
    <script src="{{asset('/storage/template/script.js')}}"></script>
    <link href="{{asset('/storage/template/template.css')}}" rel="stylesheet">

    <style>
            .panel_graphic{
          font-family: 'Niramit', sans-serif;
            background-image:url({{url("/storage/template/template02/graphic.gif")}});
          font-size:10pt;
               padding:0em;
            background-repeat:no-repeat;
            background-size:cover;
            width: 100%;
            height:100%;
        }

       
    </style>
    
    
           

    <div class="panel_graphic">

        <div class="col_left" >
            
            <!--leftcol-->
            <div style="width:90%;text-align:center;">
                
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
         
                <div class="topic">
                <b>ข้อมูลทั่วไป</b>
                </div>
         

            <div class="box">   
                <p><span class="text_blue">ชื่อ</span> {{$Profile->prename}}{{$Profile->firstname}} {{$Profile->lastname}}</p>   
                <p><span class="text_blue">ตำแหน่ง </span> {{$Profile->position}}</p>  
                <p><span class="text_blue">สัญชาติ</span> {{$Profile->national}} <span class="text_blue">เชื้อชาติ</span> {{$Profile->race}} <span class="text_blue">ศาสนา</span> {{$Profile->religion}}</p>            
                <p><span class="text_blue">กลุ่มสาระ </span> {{$Profile->major}}</p>           
                <p><span class="text_blue">ที่อยู่</span> {{$Profile->address}}</p>
            </div>   
            <div class="topic">
                <b>ประวัติการศึกษา</b>
            </div>
            <div class="box">   
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
            <div class="topic">
                <b>ประวัติการทำงาน</b>
            </div>
            <div class="box">   

                <p><span class="text_blue">วิทยฐานะ</span> {{$Profile->academic}}</p>
                <p><span class="text_blue">วันที่ดำรงค์ตำแหน่ง</span> {{datethai($Profile->dateacademic)}}</p>
                <p><span class="text_blue">สังกัด</span> {{$Profile->department_big}}</p>
                <p><span class="text_blue">โรงเรียน</span> {{$Profile->school}}</p>
                <p><span class="text_blue">อายุราชการ</span> {{calage($Profile->dateacademic)}}</p>
                
                <p><span class="text_blue" >ประเภทห้องเรียนที่จัดการเรียนรู้</span>
                <ul class="class_learning">                    
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
            <br><br>
            <header class="name-text" style="margin-bottom:3vh;text-align:center;">
                <span class="text_blue" style="font-size:1.5vw;"><b>{{$Profile->prename}}{{$Profile->firstname}} {{$Profile->lastname}}</b></span>
                <br><span class="text_orange" style="font-size:1vw;">ตำแหน่ง {{$Profile->position}} <br>{{$Profile->academic}}</span>
            </header>
             <div class="topic">
                <b>การปฏิบัติหน้าที่ปีการศึกษา {{PA_year()}}</b>
            </div>
            <div class="detail">
                <div class="box">   
                    <span class="text_blue">วิชาที่ทำการสอน</span>
                    <?php $sch_hour = 0; ?>
                    <p><table class="tbl_tem">
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

                <div class="box">   
                    <span class="text_blue">งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</span>                
                    <?php $sp_hour = 0; ?>
                    <p><table class="tbl_tem">
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
                <div class="box">   
                    <span class="text_blue">งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</span>
                    <p><table class="tbl_tem">
                        <tr>
                            <th>งานพัฒนาคุณภาพฯ</th>
                            <th>ชม./สัปดาห์</th>
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
                    </table></p>
                </div>

                <div class="box">   
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
            </div>
              <div class="topic">
                <b >การอบรม/พัฒนาตนเอง</b>
            </div>
              <div class="detail">
                <div class="box">   
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
               <div class="topic">
                <b>สื่อการเรียนรู้และนวัตกรรม</b>
            </div>
            <div class="detail">
                <div class="box">   
                    @foreach ($inno as $inno)
                    <span class="text_blue">{{$inno->title}}</span>
                    <p>
                    <ul>                        
                        <li>{{$inno->innovation}}</li>
                    </ul>
                    @endforeach
                </div>
            </div>

        </div>


    </div>


    



</body>
</html>
