@extends('layouts.app')    
@section('content')
<!-- Page content-->



       <div class="container-fluid" id="container-fluid" style="padding-bottom:100px;">
    <div class="child">
        <div class="page_header">
            <table class="tb_header">
                <tr class="border_bottom">
                    <td colspan="3">
                        <span class="text_blue"><b><u>ส่วนที่ 3</u> การวิเคราะห์ประเด็นท้าทายในการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียน</b></span>
                    </td>
                    <td colspan="2" style="text-align:right;">
                        <span class="text_blue"><b>แบบประเมิน</b></span>
                    </td>
                </tr>

            </table>
            
             <div class="col-md-10 col-lg-10 col-sm-12" style="padding:1em;margin: 0 auto;color:#1050A2;font-size:14pt;">
                 ผลการประเมินการวิเคราะห์ประเด็นท้าทายในการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียนตามสมรรถนะ
                 สำหรับการศึกษาขั้นพื้นฐาน หลังจากประชุมครูประชุมตกลงแลกเปลี่ยนข้อคิดเห็นถึงปัญหาของ
                ผู้เรียนเพื่อกำหนดประเด็นท้าทายร่วมกับผู้เรียน ได้ผลสมรรถนะสำหรับการศึกษาขั้นพื้นฐานแต่ละด้าน 
                ดังนี้
             </div>      
        </div>


        
         <div class="row">
            

                <div class="col-md-7 col-lg-7 col-sm-12" style="border: 1px solid green;padding:1em;margin: 0 auto;">

                 
                   
                     <table class="table_evaluation_doc"  border='0' style="color:#1050A2;">
                       
                        <tr style="text-align:center;height:70px;">
                           
                            <th>หัวข้อ</th>
                            <th>ระดับคุณภาพ</th>
                        </tr>
                         @foreach($topic as $topic0)
                        <tr style="height:50px;">
                            <th style="width:40%;padding-left:20px;text-align:left;"><b>{{$topic0->detail}}</b></th>
                            <th style="width:20%;text-align:center;">{!! App\Models\pa_evaluation::find_avg_answer($topic0->no,uId(),PA_year(),$topic0->eva_id) !!}</th>
                        </tr>
                     
                       
                       @endforeach
                   
                      
                    </table>
          
                </div>        

            </div>
        
        
        
        
        <div class="row">  
          
        </div>
        
        <div class="row" style="padding-bottom: 60px;">
             
            <div style="width:100%;">
            <br><span class="text_blue"><b>เลขที่แบบประเมิน : WE7845415215</b></span> 
           <br><a class="btn_blue" href="{{url('PA3_evaluation/WE7845415215')}}" style='width:200px;'>
                <li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> 
                เริ่มทำแบบประเมิน
               </a> 
            </div>
           
                <div class="col-md-12 col-lg-12 col-sm-12" style="margin-top:30px;margin-bottom:50px;">
                    <input type="hidden" id="hdneva_id" name="hdneva_id" value="{{$eva_id}}">
                    <div class="table-responsive">
                        <table class="table_evaluation_doc"  border='1' style="width:90%;">
                        <tr style="height:70px;text-align:center;">
                            <th rowspan="2">สมรรถนะสำหรับการศึกษาขั้นพื้นฐาน</th>
                            <th colspan="2">ระดับสมรรถนะผู้เรียน</th>
                            
                        </tr>
                        <tr style="text-align:center;height:70px;">
                           
                            <th>ครูประเมิณ</th>
                            <th>นักเรียนประเมิณ</th>
                        </tr>
                         @foreach($topic as $topic1)
                        <tr class="tr_header_green" style="height:50px;">
                           <th style="width:60%;padding-left:20px;">{{$topic1->detail}}</th>
                           <th style="width:20%;">{!! App\Models\pa_evaluation::find_avg_answer($topic1->no,uId(),PA_year(),$topic1->eva_id) !!}</th>
                           <th style="width:20%;"></th>
                        </tr>
                     
                        <?php $question = App\Models\pa_evaluation::find_question($topic1->no); ?>
                        @foreach($question as $question)
                        <tr class="tr_header_tranparent" style="height:50px;text-align:left;">
                            <td style="vertical-align: top;text-align:left;padding-left:20px;">{{$question->no}}.{{$question->detail}}</td>
                            <td>{!! App\Models\pa_evaluation::find_answer($question->root,$question->no,uId(),PA_year(),$question->eva_id) !!}</td>
                            <td>ไม่มีคะแนน</td>
                        </tr>
                       @endforeach
                   
                        @endforeach  
                    </table>
                    </div>
                </div>
            
                
            
            
                <div class="col-md-9 col-lg-9 col-sm-12" style="margin:0 auto;">
                    <input type="hidden" id="hdneva_id" name="hdneva_id" value="{{$eva_id}}">
                    <div style="width:100%;text-align:left;margin-bottom:10px;">
                        <a class="btn btn-success" href="{{url('PA3')}}" style="width:200px;height:45px;">
                         <li style="margin-right:10px;font-size: 18pt;" class="fa fa-file-code-o "></li> 
                         ข้อสรุปฉันทามติ
                        </a> 
                    </div>
                    <div class="table-responsive">
                        <table class="table_evaluation_doc"  border='1' style="color:#1050A2;">
                        <tr style="height:70px;text-align:center;">
                            <th rowspan="2">สมรรถนะสำหรับการศึกษาขั้นพื้นฐาน</th>
                            <th colspan="2">อันดับความท้าทาย</th>
                            <th>ฉันทามติ</th>
                        </tr>
                        <tr style="text-align:center;height:70px;">
                           
                            <th>ครูประเมิณ</th>
                            <th>นักเรียนประเมิณ</th>
                        </tr>
                        <?php $i=0; ?>
                        
                        @if(count($agree)>0)
                         @foreach($agree as $agree)
                        <tr style="height:50px;">
                            <td style="width:40%;padding-left:20px;text-align:left;"><b>{{$agree->detail}}</b></td>
                           <td style="width:20%;text-align:center;">{{$agree->teacher}}</td>
                           <td style="width:20%;text-align:center;">{{$agree->student}}</td>
                           <td style="width:20%;text-align:center;" class="agree_hover">
                               
                          <div id="ele_agree_{{$i}}" class="display_none" style="width:100%;text-align:center;">
                              <input type="number" class="form-control" id="txtagree" name="txtagree[{{$i}}]" style="text-align:center;width:90%;" value="{{$agree->agree}}" onchange="update_agree_field({{$agree->id}}, {{$i}}, 'agree');">
                          </div>
                          <div id="text_agree_{{$i}}" style="width:100%;text-align: center;" onclick="show_ele('agree_{{$i}}');">
                            {{$agree->agree}}
                           </div>     
                          </td>
                        </tr>
                         <?php $i++; ?>
                         @endforeach
                        @else
                          @foreach($topic as $topic2)
                        <tr style="height:50px;">
                            <td style="width:40%;padding-left:20px;text-align:left;"><b>{{$topic2->detail}}</b></td>
                           <td style="width:20%;text-align:center;">0</td>
                           <td style="width:20%;text-align:center;">0</td>
                           <td style="width:20%;text-align:center;">0</td>
                        </tr>
                           @endforeach
                        @endif
                       
                      
                   
                      
                    </table>
                    </div>
                </div>
                
                
         
            
        </div>
        
    <div class="row">
         
                  <div  style="width:50%;height:500px;position: relative;margin:0 auto;">
                      <div id='polygon1' class="polygon"></div>
                  </div>   
            
                  
            
            <div  style="margin:0 auto;width:70%;margin-top:70px;">
                <div  id="bar1" class="bar"></div> 
            </div>            
    </div>
    </div>



           <br><br><br>
    <center>
        <a class="btn_blue" href="{{url('/PA4')}}"><li style="margin-right:10px;font-size: 18pt;" class="fa fa-arrow-circle-right "></li> 
            <u>ส่วนที่ 4</u> แนวทางการพัฒนาและผลการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียนตามประเด็นท้าทาย</a> 
    </center>

</div>

@endsection