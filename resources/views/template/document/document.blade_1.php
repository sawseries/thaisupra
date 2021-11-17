<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


    <style>

        @font-face{
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src:url({{public_path('fonts\THSarabunNew.ttf')}})format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-weight: bold;
            font-style: normal;
            src:url({{public_path('fonts\THSarabunNewBold.ttf')}})format('truetype');
        }    


        .panel{
            font-size:14pt;
           
        }


        .containner{
            padding-left:4em;
            padding-right:4em;
            padding-bottom:1em;
            padding-top:2em;
             font-family:"THSarabunNew";
        }

        .table{
            width:100%;
            border-collapse: collapse;
        }

        .table td{
            padding:0;
        }

        .table th{
            padding:0;
        }

        .paginate{
            width:100%;height:40px;text-align:right;font-size:14pt;
        }
        
        .text_blue{
            font-size:16pt;
           
        }

    </style>


    <body>
        <script type="text/php">

            if (isset($pdf)){
            $x = 500;
            $y = 10;
            $text = "Page {PAGE_NUM} of {PAGE_COUNT}";
            $font = null;
            $size = 14;
            $color = array(0,0,0);
            $word_space = 0.0;  //  default
            $char_space = 0.0;  //  default
            $angle = 0.0;   //  default
            $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
            }
            
        </script>
        <div class="containner">




            <div class="panel">

                <center><h2>คำนำ</h2></center>
                <br><br>
                <center>
                    สำนักงาน ก.ค.ศ. ได้ออกหลักเกณฑ์และวิธีการให้ข้าราชการครูและบุคลากรทางการศึกษา ตำแหน่งครู มีวิทยฐานะและเลื่อนวิทยฐานะ ว 9/2560 หลักเกณฑ์ 
                    และวิธีการพัฒนาข้าราชการครูและบุคลากรทางการศึกษา  สายการสอน ว 3/2564 เมื่อวันที่ 26 มกราคม 2564 และการใช้งานระบบประเมินวิทยฐานะดิจิทัล 
                    (Digital Performance Appraisal) เมื่อวันที่ 20 พฤษภาคม 2564 ครูจะต้องประเมินตนเอง จัดทำข้อตกลงในการพัฒนางาน (Performance Agreement) 
                    ร่วมกับผู้บริหารสถานศึกษาทางผู้จัดทำข้อตกลงในการพัฒนางาน(Performance Agreement) จึงได้จัดทำเอกสารดังกล่าวเพื่อให้เป็นไปตามนโยบายกระทรวงศึกษาธิการ
                    ในการปฏิรูประบบการพัฒนาครู เพื่อตอบสนองต่อการพัฒนาทรัพยากรบุคคลอย่างมีระบบ และมีประสิทธิภาพสูงสุด สอดคล้องกับยุทธศาสตร์ชาติระยะ 20 ปี 
                </center>
            </div>

            <div style='page-break-before: always;'></div>
            <br style="page-break-before: always">

            <div class="panel">

                <center><h2>สารบัญ</h2></center>

               <table border="0" style="width:100%;">
                                <tr>
                                    <th colspan="2" style="text-align:left;"><b>ส่วนที่ 1 ข้อมูลผู้จัดทำข้อตกลงในการพัฒนางาน</b></th>
                                </tr>
                                <tr>
                                    <td style="width:80%;">1.1 ข้อมูลทั่วไป</td>
                                    <td style="text-align:center;">1</td>
                                </tr>
                                 <tr>
                                    <td>1.2 ประวัติการทำงาน</td>
                                    <td style="text-align:center;">1</td>
                                </tr>
                                <tr>
                                    <td>1.3 ประวัติการศึกษา</td>
                                    <td style="text-align:center;">1</td>
                                </tr>
                                <tr>
                                    <td>1.4 วิชาที่ทำการสอน </td>
                                    <td style="text-align:center;">2</td>
                                </tr>
                                 <tr>
                                    <td>1.5 ชั่วโมงการปฏิบัติหน้าที่ในปีการศึกษา {{PA_year()}}</td>
                                    <td style="text-align:center;">2</td>
                                </tr>
                                 <tr>
                                    <td>1.6 การอบรม/พัฒนาตนเองในปีการศึกษาที่ผ่านมา	</td>
                                    <td style="text-align:center;">2</td>
                                </tr>
                                <tr>
                                    <td>1.7 สื่อการเรียนรู้/นวัตกรรม</td>
                                    <td style="text-align:center;">3</td>
                                </tr>
                                <tr>
                                    <td>1.8 ประเภทห้องเรียนที่จัดการเรียนรู้</td>
                                    <td style="text-align:center;">3</td>
                                </tr>
                                <tr>
                                    <th colspan="2" style="text-align:left;"><b>ส่วนที่ 2 ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด</b></th>
                                </tr>
                                <tr>
                                    <td>2.1 ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด</td>
                                    <td style="text-align:center;">4</td>
                                </tr>
                                <tr>
                                    <td>2.2 ความต้องการในการพัฒนาตนเองและวิชาชีพ  	</td>
                                    <td style="text-align:center;">6</td>
                                </tr>
                                <tr>
                                    <td>2.3 งานที่ปฏิบัติตามมาตรฐานตำแหน่ง</td>
                                    <td style="text-align:center;">6</td>
                                </tr>
                                <tr>
                                    <th colspan="2" style="text-align:left;"><b>ส่วนที่ 3 การวิเคราะห์ประเด็นท้าทายในการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียน</b></th>
                                </tr>
                                <tr>
                                    <td>ผลการประเมินการวิเคราะห์ประเด็นท้าทายในการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียนตามสมรรถนะ</td>
                                    <td style="text-align:center;">7</td>
                                </tr>
                                <tr>
                                    <th colspan="2" style="text-align:left;"><b>ส่วนที่ 4 แนวทางการการพัฒนาและผลการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียนตามประเด็นท้าทาย</b></th>
                                </tr>
                                <tr>
                                    <td>4.1 ประเด็นท้าทายเรื่อง</td>
                                    <td style="text-align:center;">12</td>
                                </tr>
                                <tr>
                                    <td>4.2 สภาพปัญหาของผู้เรียนและการจัดการเรียนรู้</td>
                                    <td style="text-align:center;">12</td>
                                </tr>
                                <tr>
                                    <td>4.2 วิธีการดำเนินการให้บรรลุผล</td>
                                    <td style="text-align:center;">12</td>
                                </tr>
                                <tr>
                                    <td>4.3 ผลลัพธ์การพัฒนาที่คาดหวัง</td>
                                    <td style="text-align:center;">12</td>
                                </tr>
                                <tr>
                                    <td style="padding-left:50px;">- เชิงปริมาณ</td>
                                    <td style="text-align:center;">12</td>
                                </tr>
                                 <tr>
                                    <td style="padding-left:50px;">- เชิงคุณภาพ</td>
                                    <td style="text-align:center;">12</td>
                                </tr>
                                <tr>
                                    <th colspan="2" style="text-align:left;"><b>ส่วนที่ 5 ภาคผนวก</b></th>
                                </tr>
                            </table>

            </div>


            <div style='page-break-before: always;'></div>
            <br style="page-break-before: always">

            <div class="panel">

                <center><h2>ข้อตกลงในการพัฒนางานสำหรับครู
                        <br>(Performance Agreement)</h2></center>

                <br><span class="text_blue"><b>ส่วนที่  1  ข้อมูลผู้จัดทำข้อตกลงในการพัฒนางาน</b></span>
                <br><u><b>ข้อมูลทั่วไป</b></u>
                <br><table style="width:90%;" border="0"> 


                    <?php foreach ($uProfile as $uProfile) { ?>
                        <tr><td style="width:30%;">ชื่อ-สกุล</td>
                            <td><?= $uProfile->firstname; ?> <?= $uProfile->lastname; ?></td>
                        </tr>
                        <tr><td>ตำแหน่ง</td>
                            <td><?= $uProfile->position; ?></td>
                        </tr>
                        <tr><td>กลุ่มสาระการเรียนรู้</td>
                            <td><?= $uProfile->major; ?></td>
                        </tr>
                        <tr><td>สัญชาติ </td>
                            <td><?= $uProfile->national; ?></td>
                        </tr>
                        <tr><td>เชื้อชาติ </td>
                            <td><?= $uProfile->race; ?></td>
                        </tr>
                        <tr><td>ศาสนา </td>
                            <td><?= $uProfile->religion; ?></td>
                        </tr>
                        <tr><td>ที่อยู่ </td>
                            <td><?= $uProfile->address; ?></td>
                        </tr></table>
                


                    <b><u>ประวัติการทำงาน</u></b>
                    <table style="width:90%;" border="0">
                        <tr>
                            <td style="width:30%">วันที่เริ่มรับราชการ</td>
                            <td><?= datethai($uProfile->datestart); ?></td>
                        </tr>
                        <tr>
                            <td style="width:30%">วันที่บรรจุ</td>
                            <td><?= datethai($uProfile->datebegin); ?></td>
                        </tr>
                        <tr>
                            <td style="width:30%">วิทยฐานะ</td>
                            <td><?= $uProfile->academic; ?></td>
                        </tr>
                        <tr>
                            <td>วันที่ดำรงค์ตำแหน่ง</td>
                            <td><?= $uProfile->dateacademic; ?></td>
                        </tr>
                        <tr>
                            <td>เงินเดือน</td>
                            <td><?= $uProfile->salary; ?></td>
                        </tr>
                        <tr>
                            <td>สังกัด</td>
                            <td><?= $uProfile->department_big; ?></td>
                        </tr>
                        <tr>
                            <td>โรงเรียน</td>
                            <td><?= $uProfile->school; ?>/</td>
                        </tr>
                    </table>


                <?php } ?>


                <b><u>ประวัติการศึกษา</u></b>
                <table style="width:100%;" border="0">
                    <tr>
                        <td><b>วุฒิ</b></td>
                        <td><b>คณะ</b></td>
                        <td><b>สาขา</b></td>
                        <td><b>สถานศึกษา</b></td>
                    </tr>

                    <?php foreach ($uEducation as $uEducation) { ?>    

                        <tr>
                            <td><?php echo $uEducation->edu_type; ?></td>
                            <td><?php echo $uEducation->faculty; ?></td>
                            <td><?php echo $uEducation->major; ?></td>
                            <td><?php echo $uEducation->school; ?></td>
                        </tr>
                    <?php } ?> 
                </table> <br>




            </div>

            <div style='page-break-before: always;'></div>
            <br style="page-break-before: always">
            <div class="panel">

                <?php $sch_hour = 0; ?>

                <b>วิชาที่ทำการสอน</b><br>

                <table class="table" border="1">
                    <tr>
                        <th style="text-align:center;">กลุ่มสาระ</th>
                        <th style="text-align:center;">วิชา</th>
                        <th style="text-align:center;">ระดับชั้น</th>
                        <th style="text-align:center;">ชั่วโมงที่ทำการสอน</th>
                    </tr>
                    <?php foreach ($schedule_hour as $schedule_hour) { ?>       

                        <tr>
                            <td><?= $schedule_hour->group_learn; ?></td>
                            <td><?= $schedule_hour->subject; ?></td>
                            <td style="text-align:center;"><?= $schedule_hour->grade; ?></td>
                            <td style="text-align:center;"><?= $schedule_hour->sch_hour; ?></td>
                        </tr>

                        <?php
                        $sch_hour += $schedule_hour->sch_hour;
                    }
                    ?>

                    <tr>
                        <td colspan="3" style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                        <td ><b><?= $sch_hour; ?></b></td>
                    </tr>

                </table>


                <?php $sp_hour = 0; ?>

                <br><b>งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</b><br>
                <table class="table" border="1">
                    <tr>
                        <td><b>งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</b></td>
                        <td style="text-align:center;"><b>ชั่วโมง/สับดาห์</b></td>
                    </tr>
                    <?php foreach ($support_hour as $support_hour) { ?>

                        <tr>
                            <td><?= $support_hour->support_detail; ?></td>
                            <td style="text-align:center;"><?= $support_hour->sp_hour; ?></td>
                        </tr>

                        <?php
                        $sp_hour += $support_hour->sp_hour;
                    }
                    ?>

                    <tr>
                        <td style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                        <td style="text-align:center;"><b><?= $sp_hour; ?></b></td>
                    </tr>

                </table>


                <?php $dev_hour = 0; ?>

                <br><b>งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</b><br>
                <table class="table" border="1">
                    <tr>
                        <td><b>งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</b></td>
                        <td style="text-align:center;"><b>ชั่วโมง/สับดาห์</b></td>
                    </tr>                    
                    <?php foreach ($develop_hour as $develop_hour) { ?>
                        <tr>
                            <td><?= $develop_hour->develops; ?></td>
                            <td style="text-align:center;"><?= $develop_hour->dev_hour; ?></td>
                        </tr>
                        <?php
                        $dev_hour += $develop_hour->dev_hour;
                    }
                    ?>
                    <tr>
                        <td style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                        <td style="text-align:center;"><b><?= $dev_hour; ?></b></td>
                    </tr>
                </table>


                <?php $res_hour = 0; ?>

                <br><b>งานตอบสนองนโยบายและจุดเน้น</b><br>
                <table class="table" border="1">
                    <tr>
                        <td><b>งานตอบสนองนโยบายและจุดเน้น</b></td>
                        <td style="text-align:center;"><b>ชั่วโมง/สับดาห์</b></td>
                    </tr>
                    <?php foreach ($response_hour as $response_hour) { ?>

                        <tr>
                            <td><?= $response_hour->response; ?></td>
                            <td style="text-align:center;"><?= $response_hour->res_hour; ?></td>
                        </tr>
                        <?php
                        $res_hour += $response_hour->res_hour;
                    }
                    ?>
                    <tr>
                        <td style="text-align:center;"><b>รวมชั่วโมงในการปฏิบัติหน้าที่</b></td>
                        <td style="text-align:center;"><b><?= $res_hour; ?></b></td>
                    </tr>
                </table>




                <div style='page-break-before: always;'></div>
                <br style="page-break-before: always">

                <br><b>การอบรมและพัฒนาตัวเอง</b><br>
                <table class="table" border="1">
                    <tr>
                        <td><b>หัวข้อในการอบรม</b></td>
                        <td><b>วันเริ่มต้น</b></td>
                        <td><b>วันสิ้นสุด</b></td>
                        <td style="text-align:center;"><b>จำนวนชั่วโมง</b></td>
                        <td style="text-align:center;"><b>หน่วยงานที่จัด</b></td>
                    </tr>
                    <?php foreach ($train as $train) { ?>

                        <tr>
                            <td><?= $train->train; ?></td>
                            <td><?= $train->train_hour; ?></td>
                            <td><?= $train->start_date; ?></td>
                            <td style="text-align:center;"><?= $train->end_date; ?></td>
                            <td style="text-align:center;"><?= $train->agency; ?></td>
                        </tr>
                    <?php } ?>

                </table>


                <br><b>สื่อการเรียนรู้และนวัตกรรม</b><br>
                <br>
                <ul style="list-style:none;padding:0;">

                    @foreach($inno as $inno)
                    <li style="margin:0;"><b>{{$inno->title}}</b></li>
                    <li style="margin:0;">{{$inno->innovation}}</li>
                    @endforeach

                </ul>

                <br><b>ประเภทห้องเรียนที่จัดการเรียนรู้</b><br>

                <ul style="list-style:none;">                    
                    @foreach($pa_learn_class as $pa_learn_class) 
                    @if(!empty($arr_learn_class))
                    @if(in_array($pa_learn_class->id,$arr_learn_class))
                    <li style="margin:0;">&#x2611; {{$pa_learn_class->value}}</li>
                    @else   
                    <li style="margin:0;">&#9634; {{$pa_learn_class->value}}</li>
                    @endif
                    @else   
                    <li style="margin:0;">&#9634; {{$pa_learn_class->value}}</li>
                    @endif                        
                    @endforeach
                </ul> 

            </div>


            <div style='page-break-before: always;'></div>
            <br style="page-break-before: always">
            <div class="panel">

                <span class="text_blue"><b>ส่วนที่ 2 ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด</b></span>

                <br><b>ตาราง ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด ได้ผลงานตามมาตรฐานตำแหน่ง ดังนี้</b>

                <?php
                $degree5 = 0;
                $degree4 = 0;
                $degree3 = 0;
                $degree2 = 0;
                $degree1 = 0;



                foreach ($standard as $standards) {

                    $item = $model->find_standard($standards->no);

                    foreach ($item as $items) {

                        $score = App\Models\pa_standard::get_score_standard(uId(), PA_year(), $standards->no, $items->no, $items->owner);
                        $degree = degree($score);

                        if ($degree == "ดีมาก") {
                            $degree5 += 1;
                        } else if ($degree == "ดี") {
                            $degree4 += 1;
                        } else if ($degree == "ปานกลาง") {
                            $degree3 += 1;
                        } else if ($degree == "พอใช้") {
                            $degree2 += 1;
                        } else if ($degree == "ควรปรับปรุง") {
                            $degree1 += 1;
                        }
                    }
                }
                ?>       
                <table class="table" border="1" style="width:80%;margin:0 auto;">
                    <tr>
                        <td style="width:50%;text-align: left;">งานตามมาตรฐานตำแหน่งระดับคุณภาพดีมาก</td>
                        <td style="text-align: right;width: 10%;text-align:center;">{{$degree5}}</td>
                        <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับคุณภาพดี</td>
                        <td style="text-align: right;text-align:center;">{{$degree4}}</td>
                        <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับปานกลาง</td>
                        <td style="text-align: right;text-align:center;">{{$degree3}}</td>
                        <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับพอใช้</td>
                        <td style="text-align: right;text-align:center;">{{$degree2}}</td>
                        <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับปรับปรุง</td>
                        <td style="text-align: right;text-align:center;">{{$degree1}}</td>
                        <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                    </tr>                
                </table>           
                <br>
                <div style="margin-top:20px;">
                    <div class="table-responsive">
                        <table class="table" border="1">
                            <tr style="height:70px;">
                                <td style="width:70%;text-align: center;">งานตามมาตรฐานตำแหน่ง</td>
                                <td style="width:15%;text-align: center;">คะแนนเฉลี่ย</td>
                                <td style="width:15%;text-align: center;">ระดับคุณภาพ</td>
                            </tr>

                            @foreach($standard->where('no',1) as $standards) 
                            <tr class="tr_header">
                                <th style="padding:0;">{{$standards->detail}}</th>
                                <th style="padding:0;">{!!$sum_score=App\Models\pa_standard::get_result_score_standard(uId(),PA_year(),'0',$standards->no,'owner')!!}</th>
                                <th style="padding:0;">{{degree($sum_score)}}</th>
                            </tr>

                            <?php $item = $model->find_standard($standards->no); ?>
                            @foreach($item as $items)
                            <tr>
                                <td style="padding:0;padding-left: 30px;text-align: left;">{{$items->no}}.{{$items->detail}}</td>
                                <td style="padding:0;text-align:center;">
                                    {!!$scores=App\Models\pa_standard::get_score_standard(uId(),PA_year(),$standards->no,$items->no,$items->owner)!!}

                                </td>
                                <td style="text-align:center;padding:0;">
                                    {{degree($scores)}}
                                </td>
                            </tr>
                            @endforeach
                            @endforeach

                        </table>

                        <div style='page-break-before: always;'></div>
                        <br style="page-break-before: always">
                        <table class="table" border="1" >
                            <tr style="height:70px;">
                                <td style="width:70%;text-align: center;">งานตามมาตรฐานตำแหน่ง</td>
                                <td style="width:15%;text-align: center;">คะแนนเฉลี่ย</td>
                                <td style="width:15%;text-align: center;">ระดับคุณภาพ</td>
                            </tr>

                            @foreach($standard->where('no',">=",2) as $standards) 
                            <tr class="tr_header">
                                <th style="padding:0;">{{$standards->detail}}</th>
                                <th style="padding:0;">{!!$sum_score=App\Models\pa_standard::get_result_score_standard(uId(),PA_year(),'0',$standards->no,'owner')!!}</th>
                                <th style="padding:0;">{{degree($sum_score)}}</th>
                            </tr>

                            <?php $item = $model->find_standard($standards->no); ?>
                            @foreach($item as $items)
                            <tr>
                                <td style="padding:0;padding-left: 30px;text-align: left;">{{$items->no}}.{{$items->detail}}</td>
                                <td style="padding:0;text-align:center;">
                                    {!!$scores=App\Models\pa_standard::get_score_standard(uId(),PA_year(),$standards->no,$items->no,$items->owner)!!}

                                </td>
                                <td style="text-align:center;padding:0;">
                                    {{degree($scores)}}
                                </td>
                            </tr>
                            @endforeach
                            @endforeach

                        </table>



                    </div>
                </div>



                <div style='page-break-before: always;'></div>
                <br style="page-break-before: always">
                <br><b>หมายเหตุ</b> ข้อมูลจากผลการประเมินของมูลนิธิครูดีของแผ่นดิน ซึ่งประเมินครอบคลุมคุณลักษณะด้านครองตน ครองคน และครองงาน ด้วยข้อคำถามที่ผ่านการตรวจสอบคุณภาพแล้วจำนวน 83 ข้อ
                <br><b>เกณฑ์การให้คะแนน</b>

                <br>1.00 - 1.50 คะแนน มาตรฐานนั้นในระดับควรปรับปรุง
                <br>1.51 - 2.50 คะแนน มาตรฐานนั้นในระดับพอใช้
                <br>2.51 - 3.50 คะแนน มาตรฐานนั้นในระดับปานกลาง
                <br>3.51 - 4.50 คะแนน มาตรฐานนั้นในระดับดี
                <br>4.51 - 5.00 คะแนน มาตรฐานนั้นในระดับดีมาก
            </div>

            <div style='page-break-before: always;'></div>
            <br style="page-break-before: always">

            <div class="panel" style="margin-top:60px;">

                <b>ความต้องการและคำรับรองในการพัฒนาตนเองและวิชาชีพของผู้จัดทำแผนพัฒนาตนเอง หลักสูตรที่ควรจะได้รับการพัฒนาตนเองและวิชาชีพ</b>

                <br>
                <table border="1" class="table" style="margin: 0 auto;">
                    <tr>
                        <th style="width:5%;vertical-align: top;">ลำดับ</th>
                        <th style="width:25%;text-align: center;vertical-align: top;">มาตรฐานตำแหน่งที่จะพัฒนา</th>
                        <th style="text-align: center;width:10%;vertical-align: top;">เริ่มต้น</th>
                        <th style="text-align: center;width:10%;vertical-align: top;">สิ้นสุด</th>
                        <th style="text-align: center;width:15%;vertical-align: top;">การของบประมาณ</th>
                        <th style="text-align: center;width:30%;vertical-align: top;">ประโยชน์ที่คาดว่าจะได้รับ</th>

                    </tr>  
                    <?php $i = 1; ?>
                    @if(count($development)>0)
                    @foreach($development as $development)
                    <tr>
                        <td style="text-align:center;">{{$i++}}</td>  
                        <td>{{standard($development->standard_id)->detail}}</td>   
                        <td>{{$development->start_date}}</td>  
                        <td>{{$development->end_date}}</td>  
                        <td class="text_center">{{$development->budget}}</td>  
                        <td>{{$development->benefit}}</td> 

                    </tr>
                    @endforeach 
                    @else 
                    <tr style="height:40px;">
                        <td colspan="7" style="text-align:center;">ไม่มีข้อมูล</td>  
                    </tr>
                    @endif
                </table>


                <br>
                <label><b>งานที่ปฏิบัติตามมาตรฐานตำแหน่ง</b></label>
                <br>

                @if(count($task)>0)
                @foreach($task as $tasks)

                <b>งาน : {{$tasks->standard}}</b>                     
                <table border="1" class="table" style="margin: 0 auto;">
                    <tr>
                        <th style="width:25%;vertical-align: top;">งาน (Tasks) </th>
                        <th style="width:25%;vertical-align: top;">ผลลัพธ์ (Outcomes) </th>
                        <th style="width:25%;vertical-align: top;">ตัวชี้วัด (Indicators) </th>
                    </tr>  
                    <tr>
                        <td style="vertical-align: top;">{{$tasks->task}}</td>
                        <td style="vertical-align: top;">{{$tasks->outcome}}</td>
                        <td style="vertical-align: top;">{{$tasks->indicator}}</td>
                    </tr>                               
                </table>
                @endforeach

                @endif
            </div>

            <div style='page-break-before: always;'></div>
            <br style="page-break-before: always">
            <div class="panel" style="margin-top:60px;">


                <span class="text_blue"><b><u>ส่วนที่ 3</u> การวิเคราะห์ประเด็นท้าทายในการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียน</b></span>

                <br>


                <table class="table" style="color:#1050A2;width:100%;margin:0 auto;">
                    <tr style="text-align:center;height:70px;">
                        <th style="width:70%;">หัวข้อ</th>
                        <th style="width:30%;">ระดับคุณภาพ</th>
                    </tr>
                    @foreach($topic as $topic0)
                    <tr style="height:50px;">
                        <th style="padding:0;padding-left:20px;text-align:left;"><b>{{$topic0->detail}}</b></th>
                        <th style="text-align:center;padding:0;">{!! App\Models\pa_evaluation::find_avg_answer($topic0->no,uId(),PA_year(),$topic0->eva_id) !!}</th>
                    </tr>
                    @endforeach
                </table>

                <br> <br>
                <table class="table"  border='1' >
                    <tr style="height:70px;text-align:center;">
                        <th rowspan="2">สมรรถนะสำหรับการศึกษาขั้นพื้นฐาน</th>
                        <th colspan="2">ระดับสมรรถนะผู้เรียน</th>

                    </tr>
                    <tr style="text-align:center;height:70px;">

                        <th>ครูประเมิณ</th>
                        <th>นักเรียนประเมิณ</th>
                    </tr>
                    @foreach($topic->where('root',0)->where('no','=',1) as $topic1)
                    <tr class="tr_header_green" style="height:50px;">
                        <th style="width:70%;padding-left:20px;">{{$topic1->detail}}</th>
                        <th style="width:15%;text-align:center;">{!! App\Models\pa_evaluation::find_avg_answer($topic1->no,uId(),PA_year(),$topic1->eva_id) !!}</th>
                        <th style="width:15%;"></th>
                    </tr>

                    <?php $question = App\Models\pa_evaluation::find_question($topic1->no); ?>
                    @foreach($question as $question)
                    <tr class="tr_header_tranparent" style="height:50px;text-align:left;">
                        <td style="vertical-align: top;text-align:left;padding-left:20px;">{{$question->no}}.{{$question->detail}}</td>
                        <td style="text-align:center;">{!! App\Models\pa_evaluation::find_answer($question->root,$question->no,uId(),PA_year(),$question->eva_id) !!}</td>
                        <td style="text-align:center;">ไม่มีคะแนน</td>
                    </tr>
                    @endforeach

                    @endforeach  
                </table>
                 <br>
                 <div style='page-break-before: always;'></div>
                 <br style="page-break-before: always">
                
                   <table class="table"  border='1' style="margin-top:60px;">
                    <tr style="height:70px;text-align:center;">
                        <th rowspan="2">สมรรถนะสำหรับการศึกษาขั้นพื้นฐาน</th>
                        <th colspan="2">ระดับสมรรถนะผู้เรียน</th>

                    </tr>
                    <tr style="text-align:center;height:70px;">

                        <th>ครูประเมิณ</th>
                        <th>นักเรียนประเมิณ</th>
                    </tr>
                    @foreach($topic->where('root',0)->where('no','>=',2)->where('no','<=',4) as $topic2)
                    <tr class="tr_header_green" style="height:50px;">
                        <th style="width:70%;padding-left:20px;">{{$topic2->detail}}</th>
                        <th style="width:15%;text-align:center;">{!! App\Models\pa_evaluation::find_avg_answer($topic2->no,uId(),PA_year(),$topic2->eva_id) !!}</th>
                        <th style="width:15%;"></th>
                    </tr>

                    <?php $question = App\Models\pa_evaluation::find_question($topic2->no); ?>
                    @foreach($question as $question)
                    <tr class="tr_header_tranparent" style="height:50px;text-align:left;">
                        <td style="vertical-align: top;text-align:left;padding-left:20px;">{{$question->no}}.{{$question->detail}}</td>
                        <td style="text-align:center;">{!! App\Models\pa_evaluation::find_answer($question->root,$question->no,uId(),PA_year(),$question->eva_id) !!}</td>
                        <td style="text-align:center;">ไม่มีคะแนน</td>
                    </tr>
                    @endforeach

                    @endforeach  
                </table>
        
                       <div style='page-break-before: always;'></div>
                 <br style="page-break-before: always">
                
                 <table class="table"  border='1' style="margin-top:60px;" >
                    <tr style="height:70px;text-align:center;">
                        <th rowspan="2">สมรรถนะสำหรับการศึกษาขั้นพื้นฐาน</th>
                        <th colspan="2">ระดับสมรรถนะผู้เรียน</th>

                    </tr>
                    <tr style="text-align:center;height:70px;">

                        <th>ครูประเมิณ</th>
                        <th>นักเรียนประเมิณ</th>
                    </tr>
                    @foreach($topic->where('root',0)->where('no','=',5) as $topic2)
                    <tr class="tr_header_green" style="height:50px;">
                        <th style="width:70%;padding-left:20px;">{{$topic2->detail}}</th>
                        <th style="width:15%;text-align:center;">{!! App\Models\pa_evaluation::find_avg_answer($topic2->no,uId(),PA_year(),$topic2->eva_id) !!}</th>
                        <th style="width:15%;"></th>
                    </tr>

                    <?php $question = App\Models\pa_evaluation::find_question($topic2->no); ?>
                    @foreach($question as $question)
                    <tr class="tr_header_tranparent" style="height:50px;text-align:left;">
                        <td style="vertical-align: top;text-align:left;padding-left:20px;">{{$question->no}}.{{$question->detail}}</td>
                        <td style="text-align:center;">{!! App\Models\pa_evaluation::find_answer($question->root,$question->no,uId(),PA_year(),$question->eva_id) !!}</td>
                        <td style="text-align:center;">ไม่มีคะแนน</td>
                    </tr>
                    @endforeach

                    @endforeach  
                </table>
                


            </div>



            <div style='page-break-before: always;'></div>
            <br style="page-break-before: always">

            <div class="panel">
                <span class="text_blue"><b>ส่วนที่ 4 แนวทางการการพัฒนาและผลการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียนตามประเด็นท้าทาย</b></span>


                <br><br><b>ประเด็นท้าทาย เรื่อง</b> 
                <br>{!!$issue->issue!!}
                <br><b>1.สภาพปัญหาของผู้เรียนและการจัดการเรียนรู้ </b>
                <br>{!!$issue->detail_1!!}
                <br><b>2.วิธีการดำเนินการให้บรรลุผล </b> 
                <br> {!!$issue->detail_2!!}
                <br><b>3.ผลลัพธ์การพัฒนาที่คาดหวัง </b> 
                <br><b>3.1 เชิงปริมาณ </b> 
                <br>{!!$issue->detail_3!!}   
                <br><b>3.2 เชิงคุณภาพ </b> 
                <br>{!!$issue->detail_4!!}





            </div>

        </div>
    </body>
</html>