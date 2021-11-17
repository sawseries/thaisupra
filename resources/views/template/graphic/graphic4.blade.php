    <html>

    <script src="{{asset('/storage/template/script.js')}}"></script>
    <link href="{{asset('/storage/template/template.css')}}" rel="stylesheet">

        <style>
                .panel_graphic{
                
                 font-family: 'Niramit', sans-serif;
            background-image:url({{url("/storage/template/template04/graphic.gif")}});
          font-size:10pt;
               padding:0em;
            background-repeat:no-repeat;
            background-size:cover;
            width: 100%;
            height:100%;

            }

            .topic{

                font-size: 1vw;
                display:block;
            color: black;

            text-align:left;
            padding:0.5vw;


            }
   
            .topic2{

                margin-left: 32px;
            color: black;
            text-align:left;
            font-size: 1.0vw;
            padding:0.5vw; 
            }

   .col_left{
            height:100%;width:50%;float: left;padding-top:0.5vw;  

        }

        .col_right{
            height:100%;width:50%;float: left;padding-top:0.5vw; 
            padding-left:20px;
            /* white-space: nowrap; */
        }


            .text_blue{
                color:#e8640c;
               
            }
            
            .text_white{
                color:white;
            }

       
            .text_black{
                color: black;
                
            }

        
            .image{
                border:0; 
             
                width: 10vw;
                height: 10vw;
            }

        
            .box{

   font-size:10pt;
            text-align:left;

            }
            .detail{

                

            }
            
         

           
            .name-text{
                text-align:center;
                height: 10%;
                padding:1em;
            }
            hr.new1 {
  border-top: 1px solid orange;margin:0.5em;
}
p{
    margin-top: 0;
     margin-bottom: 0em;
    
}
  

        </style>
        <div class="panel_graphic">

            <div class="col_left">
                <!--leftcol-->

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
                <div class="topic">

   
                    <b style="padding-left: 10px;">ข้อมูลทั่วไป</b> 

                 
                </div>

                <div class="box">   
                    <p><span class="text_blue">ชื่อ</span> {{$Profile->firstname}} {{$Profile->lastname}}</p>   
                    <p><span class="text_blue">ตำแหน่ง </span> {{$Profile->position}}</p>  
                    <p><span class="text_blue">สัญชาติ</span> {{$Profile->national}} <span class="text_blue">เชื้อชาติ</span> {{$Profile->race}} <span class="text_blue">ศาสนา</span> {{$Profile->religion}}</p>            
                    <p><span class="text_blue">กลุ่มสาระ </span> {{$Profile->major}}</p>           
                    <p><span class="text_blue">ที่อยู่</span> {{$Profile->address}}</p>
                </div>   
                <div class="topic">
                <hr class="new1">
                 <b style="padding-left: 10px;">ประวัติการศึกษา</b>
                </div>
                
                <div class="box">   
                     
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
            

                <div class="topic">
                <hr class="new1">
                    <b style="padding-left: 10px;">ประวัติการทำงาน</b>
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
                <div class="name-text">
                    <span class="text_black" style="font-size:20pt;"><b>{{$Profile->firstname}} {{$Profile->lastname}}</b></span>
                    <br><span class="text_white">ตำแหน่ง {{$Profile->position}}
                        <br>{{$Profile->academic}}</span>
                </div>
                <div class="topic">
                    <b style="padding-left:5px;">การปฏิบัติหน้าที่ปีการศึกษา {{PA_year()}}</b>
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
                        <br>
                    </div><br>

                    <div class="box">   
                        <span class="text_blue">งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</span>                
                        <?php $sp_hour = 0; ?>
                        <p><table class="tbl_tem">
                            <tr>
                                <th style="width:80%;">งานส่งเสริมและสนับสนุนฯ</th>
                                <th style="width:20%;">ชั่วโมง/สับดาห์</th>
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
                    <div class="box">   
                        <span class="text_blue">งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</span>
                        <p><table class="tbl_tem">
                            <tr>
                                <th style="width:80%;">งานพัฒนาคุณภาพ ฯ</th>
                                <th style="width:20%;">ช.ม./สับดาห์</th>
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

                    <div class="box">   
                        <span class="text_blue">งานตอบสนองนโยบายและจุดเน้น</span>                
                        <?php $res_hour = 0; ?>
                        <p><table class="tbl_tem">
                            <tr>
                                <td><b>งานตอบสนองนโยบายและจุดเน้น</b></td>
                                <td><b>ช.ม./สับดาห์</b></td>
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
                    </div><br>  
                    <hr class="new1">
                </div>

               
                <div class="topic2">
                    <b style="padding-left: 10px;">การอบรม/พัฒนาตนเอง</b>
                </div>
                <div class="detail">
                    <div class="box">   
                        <p>
                        <table class="tbl_tem">
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
                    <hr class="new1">

                </div>
                <div class="topic2">
                    <b style="padding-left: 10px;">สื่อการเรียนรู้และนวัตกรรม</b>
                </div>
                <div class="detail">
                    <div class="box">   
                        <span class="text_blue">สื่อการเรียนรู้และนวัตกรรม</span>
                        <p>
                        <ul>
                            @foreach ($inno as $inno)
                            <li>{{$inno->innovation}}</li>
                            @endforeach
                        </ul>
                    </div>  
                </div>  
            </div>


        </div>
    </div>

    </html>