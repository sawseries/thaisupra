                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        @extends('layouts.app')    
@section('content')
<!-- Page content-->



    
<div class="container-fluid" style="padding-bottom:100px;">
    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="3">
                        <span class="blue_big"><b><u>ส่วนที่ 2</u> ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ.กำหนด</b></span>
                    </td>
                    <td colspan="2" style="text-align:right;">
                        <span class="text_blue"><b>ผลการประเมิน</b></span>
                    </td>
                </tr>
            </table>
            @include('layouts.main2')
        </div>

        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="3">
                        <span class="text_blue_small"> <b> ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด</b> </span>
                    </td>
                    <td colspan="2" style="text-align:right;">
                        
                    </td>
                </tr>
            </table>
           <div>
               
               <?php
$degree5=0;
$degree4=0;
$degree3=0;
$degree2=0;
$degree1=0;



foreach($standard as $standards) {
   
    $item = $model->find_standard($standards->no);
    
    foreach($item as $items){
    
   $score=App\Models\pa_standard::get_score_standard(uId(),PA_year(),$standards->no,$items->no,$items->owner);
   $degree = degree($score);
   
   if($degree=="ดีมาก"){
      $degree5+=1;   
   }else if($degree=="ดี"){
       $degree4+=1;
   }else if($degree=="ปานกลาง"){
       $degree3+=1;
   }else if($degree=="พอใช้"){
       $degree2+=1;
   }else if($degree=="ควรปรับปรุง"){
       $degree1+=1;
   }
    }
}   
?>
               
        <span class="text_blue_small">
            <br>
           <table style="width:60%;" border="0">
                <tr>
                    <td style="width:50%;text-align: left;">งานตามมาตรฐานตำแหน่งระดับคุณภาพดีมาก</td>
                    <td style="text-align: right;width: 10%;">{{$degree5}}</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>
                <tr>
                    <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับคุณภาพดี</td>
                    <td style="text-align: right;">{{$degree4}}</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>
                <tr>
                    <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับปานกลาง</td>
                    <td style="text-align: right;">{{$degree3}}</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>
                <tr>
                    <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับพอใช้</td>
                    <td style="text-align: right;">{{$degree2}}</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>
                <tr>
                    <td style="text-align: left;">งานตามมาตรฐานตำแหน่งระดับปรับปรุง</td>
                    <td style="text-align: right;">{{$degree1}}</td>
                    <td style="text-align: right;width: 10%;">มาตรฐาน</td>
                </tr>                
            </table>           
            
        </span>
        </div>
        </div>
        
        <center>
            <span class="text_blue_small"><br><b>ตาราง ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ. กำหนด ได้ผลงานตามมาตรฐานตำแหน่ง ดังนี้</b></span>
        </center>
        
        <div style="margin-top: 30px;">
            <div class="table-responsive">
            <table style="width:100%" border="1">
                <tr style="height:70px;">
                    <td style="width:60%;text-align: center;">งานตามมาตรฐานตำแหน่ง</td>
                    <td style="width:20%;text-align: center;">คะแนนเฉลี่ย</td>
                    <td style="width:20%;text-align: center;">ระดับคุณภาพ</td>
                </tr>
                @foreach($standard as $standards) 
                <tr class="tr_header">
                    <th>{{$standards->detail}}</th>
                    <th>{!!$sum_score=App\Models\pa_standard::get_result_score_standard(uId(),PA_year(),'0',$standards->no,'owner')!!}</th>
                    <th>{{degree($sum_score)}}</th>
                </tr>
                
                <?php $item = $model->find_standard($standards->no); ?>
                @foreach($item as $items)
                <tr>
                <td style="padding:1em;padding-left: 30px;text-align: left;">{{$items->no}}. {{$items->detail}}</td>
                <td style="text-align:center;">
                 {!!$scores=App\Models\pa_standard::get_score_standard(uId(),PA_year(),$standards->no,$items->no,$items->owner)!!}
       
                </td>
                <td style="text-align:center;">
                    {{degree($scores)}}
                </td>
               </tr>
                 @endforeach
                @endforeach
            </table>
            </div>
        </div>
        <br><br><b>หมายเหตุ</b> ข้อมูลจากผลการประเมินของมูลนิธิครูดีของแผ่นดิน ซึ่งประเมินครอบคลุมคุณลักษณะด้านครองตน ครองคน และครองงาน ด้วยข้อคำถามที่ผ่านการตรวจสอบคุณภาพแล้วจำนวน 83 ข้อ
        <br><br><b>เกณฑ์การให้คะแนน</b>
        
        <br>1.00 - 1.50 คะแนน มาตรฐานนั้นในระดับควรปรับปรุง
        <br>1.51 - 2.50 คะแนน มาตรฐานนั้นในระดับพอใช้
        <br>2.51 - 3.50 คะแนน มาตรฐานนั้นในระดับปานกลาง
        <br>3.51 - 4.50 คะแนน มาตรฐานนั้นในระดับดี
        <br>4.51 - 5.00 คะแนน มาตรฐานนั้นในระดับดีมาก
        
        
       
                    
          
        

        <div style="margin-top:80px;margin-bottom:40px;text-align: center;">
                <span class="text_blue_small">
                    งานตามมาตรฐานตำแหน่ง เรียงตามผลการประเมิน มาก - น้อย
                </span>
        </div>

            <table border="1" class="table_green" style="width:80%;margin:0 auto;">
                <tr class="tr_header">
                    <th style="width:5%;">ลำดับ</th>
                    <th style="width:60%;text-align: center;">งานตามมาตรฐานตำแหน่ง</th>
                    <th style="width:15%;text-align: center;">คะแนนเฉลี่ย</th>
                    <th style="width:20%;text-align: center;">ระดับคุณภาพ</th>
                </tr>  
                @foreach($standard as $standards) 
                <tr>
                    <td>{{$standards->no}}</td>
                    <td>{{$standards->detail}}</td>
                    <td style="text-align:center;">{!!$sum_score=App\Models\pa_standard::get_result_score_standard(uId(),PA_year(),'0',$standards->no,'owner')!!}</td>
                    <td style="text-align:center;">{{degree($sum_score)}}</td>
                </tr>
                @endforeach
            </table>
                    
</div>

    <div class="child" style="margin-top:60px;">
         <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="3">
                        <span class="text_blue_small"><b>ผลการประเมิณครองตน ครองคน ครองงาน</b></span>
                    </td>
                    <td colspan="2" style="text-align:right;">
                        
                    </td>
                </tr>
            </table>
          
        </div>
        
        <div style="width:70%;margin:0 auto;text-align:center;">
          <span class="blue_big">
           <br>ตารางแสดงคะแนนการประเมินครองตน ครองคน ครองงาน ตามแบบประเมินของมูลนิธิครูดีของแผ่นดิน
          </span>
           
           @if(!empty($uProfile))
         
        <span class="text_blue_small"> 
           <br><b>ของ {{$uProfile->prename}}{{$uProfile->firstname}} {{$uProfile->lastname}}</b>   
           <br>สังกัด <b>{{find_department_str($uProfile->department_big)}}
               @if(!empty($uProfile->department_small))
                {{$uProfile->department_small}}</b> 
               @endif
               ณ วันที่ {{ datethai(date('Y-m-d')) }}
        </span>  
           @endif
          
        </div>
        <br><br><br>
        
        <?php
         $sum_yokyong1=0;
         $avg_yokyong1=0;
         $sum_yokyong2=0;
         $avg_yokyong2=0;
         $sum_yokyong3=0;
         $avg_yokyong3=0;
        ?>
        <table border="1" class="table_green" style="width:80%;margin:0 auto;">
                <tr class="tr_header">
                    <th style="width:20%;">หมวด</th>
                    <th style="width:40%;">ตัวบ่งชี้</th>
                    <th style="width:20%;">คะแนนเต็ม</th>
                    <th style="width:20%;">คะแนนที่ได้</th>
                </tr>  
                <tr>
                    <td rowspan="{{count($yokyong->where('indicate_type','ครองตน'))+1}}"><b>ครองตน</b></td>
                </tr>
                @foreach($yokyong->where('indicate_type','ครองตน') as $yokyong1)
                <tr>
                    
                    <td>{{$yokyong1->indicate_code}}.{{$yokyong1->indicate_name}}</td>
                    <td style="text-align:center;">5</td>
                    <td style="text-align:center;">{!! $score_yokyong1=App\Models\pa_standard::getuser_yokyong_score(uId(),PA_year(),$yokyong1->indicate_code) !!} 
        
                    <?php if($score_yokyong1!="ไม่มีคะแนน"){
                    $sum_yokyong1+=$score_yokyong1; } ?></td>
                </tr>  
                @endforeach
                <tr>
                    <td colspan="3" style="text-align:center;"><b>สรุปหมวดครองตน</b></td>
                    <td style="text-align:center;">
                         <?php $avg_yokyong1=round($sum_yokyong1/count($yokyong->where('indicate_type','ครองตน')),2);?>
                        {{$avg_yokyong1}}
                        <br>(ผ่าน/ไม่ผ่าน)
                    </td>
                </tr>
                <tr>
                    <td rowspan="{{count($yokyong->where('indicate_type','ครองคน'))+1}}"><b>ครองคน</b></td>
                </tr>
                @foreach($yokyong->where('indicate_type','ครองคน') as $yokyong2)
                <tr>
                    
                    <td>{{$yokyong2->indicate_code}}.{{$yokyong2->indicate_name}}</td>
                    <td style="text-align:center;">5</td>
                    <td style="text-align:center;"><?php $score_yokyong2=App\Models\pa_standard::getuser_yokyong_score(uId(),PA_year(),$yokyong2->indicate_code); 
                    echo $score_yokyong2;
                    if($score_yokyong2!="ไม่มีคะแนน"){
                    $sum_yokyong2+=$score_yokyong2;} ?></td>
                </tr>  
                @endforeach
                <tr>
                    <td colspan="3" style="text-align:center;"><b>สรุปหมวดครองคน</b></td>
                    <td style="text-align:center;">
                        <?php $avg_yokyong2=round($sum_yokyong2/count($yokyong->where('indicate_type','ครองคน')),2);?>
                        {{$avg_yokyong2}}
                        <br>(ผ่าน/ไม่ผ่าน)
                    </td>
                </tr>
                <tr>
                    <td rowspan="{{count($yokyong->where('indicate_type','ครองงาน'))+1}}"><b>ครองงาน</b></td>
                </tr>
                @foreach($yokyong->where('indicate_type','ครองงาน') as $yokyong3)
                <tr>
                    
                    <td>{{$yokyong3->indicate_code}}.{{$yokyong3->indicate_name}}</td>
                    <td style="text-align:center;">5</td>
                    <td style="text-align:center;"><?php $score_yokyong3=App\Models\pa_standard::getuser_yokyong_score(uId(),PA_year(),$yokyong3->indicate_code); 
                    echo $score_yokyong3;
                      if($score_yokyong3!="ไม่มีคะแนน"){
                      $sum_yokyong3+=$score_yokyong3;} ?></td>
                </tr>  
                @endforeach
                <tr>
                    <td colspan="3" style="text-align:center;"><b>สรุปหมวดครองงาน</b></td>
                    <td style="text-align:center;">
                        
                        <?php $avg_yokyong3=round($sum_yokyong2/count($yokyong->where('indicate_type','ครองงาน')),2);?>
                        {{$avg_yokyong3}}
                      
                        <br>(ผ่าน/ไม่ผ่าน)
                    </td>
                </tr>
                
        </table>
        <br>
        <div style="width:80%;margin:0 auto;border:1px solid gray;background-color:#eee;padding:1em;padding-left:3em;">
            
            <b>สรุปคะแนนครองตน ครองคน ครองงาน</b>
            <br><br>
            <table style="width:60%;margin:0 auto;" border='1'>
                <tr>
                    <th style="padding-left:50px;">ครองตน  </th><td>{{$avg_yokyong1}}</td><td style="text-align:center;">ผ่าน/ไม่ผ่าน</td>
                </tr>
                <tr>
                    <th style="padding-left:50px;">ครองคน  </th><td>{{$avg_yokyong2}}</td><td style="text-align:center;">ผ่าน/ไม่ผ่าน</td>
                </tr>
                <tr>
                    <th style="padding-left:50px;">ครองงาน  </th><td>{{$avg_yokyong3}}</td><td style="text-align:center;">ผ่าน/ไม่ผ่าน</td>
                </tr>
            </table><br>
           
        </div>
        <br>
    </div>
    
         <br><br><br>
       <center>
        <a class="btn_blue" href="{{url('PA2_2')}}"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> แผนพัฒนาตนเอง</a> 
       </center>
    
</div>


@endsection