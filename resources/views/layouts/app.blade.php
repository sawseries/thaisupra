<!DOCTYPE html>
<html lang="en">
   
    <body>
         @include('layouts.navbar')    
 

        <div class="d-flex" id="wrapper">

            @if(session('uAuth'))
            <div class="border-end bg-white" id="sidebar-wrapper" >
                <div class="btn_sidebar_active">
                    <table border='0'>
                        <tr>
                            <td style="width:80px;">
                                <img  src="{{ asset('logo/logo.png') }}" style="width:70px;margin: 0.2em;border:0;">
                            </td>
                            <td style="padding:0em;">
                                ข้อตกลงในการพัฒนางานสำหรับครู <span style="font-size: 10pt;">(Performance Agreement){{PA_year()}}</span>
                            </td>
                        </tr>
                    </table>

                </div>
                <div class="list-group list-group-flush" style="width:250px;">
                    <div class="btn_sidebar"><a href="{{url('PA1')}}"><u>ส่วนที่ 1</u> ข้อมูลผู้จัดทำข้อตกลงในการพัฒนางาน</a></div>
<!--                    <ul id="dropdown_1" class="dropdown" style="display: none;">
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA1_1')}}">ข้อมูลทั่วไป</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA1_2')}}">ภาระงานตามที่ กคศ.กำหนด</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA1_3')}}">ประเภทห้องเรียนที่จัดการเรียนรู้</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA1_4')}}">การอบรมและพัฒนาตนเอง</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA1_5')}}">สื่อการเรียนรู้และนวัตกรรม</a></li>
                    </ul>-->
                    <div class="btn_sidebar" onclick="menu_toggle('dropdown_2');"><a><u>ส่วนที่ 2</u> ผลการประเมินงานตามมาตรฐานตำแหน่งและภาระงานตามที่ ก.ค.ศ.กำหนด <i class="fa fa-caret-down" aria-hidden="true"></i></a></div>
                    <ul id="dropdown_2" class="dropdown" style="display: none;">
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA2_1')}}">ผลการประเมิน</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA2_2')}}">แผนการพัฒนาตนเอง</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="{{url('PA2_3')}}">งานที่ปฏิบัติตามมาตรฐานตำแหน่ง</a></li>
                    </ul>
                    <div class="btn_sidebar"><a href="{{url('PA3')}}"><u>ส่วนที่ 3</u> การวิเคราะห์ประเด็นท้าทายในการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียน</a></div>
                    <div class="btn_sidebar"><a href="{{url('PA4')}}"><u>ส่วนที่ 4</u> แนวทางการพัฒนาและผลการพัฒนาผลลัพธ์การเรียนรู้ของผู้เรียนตามประเด็นท้าทาย</a></div>
                    <a class="btn_sidebar" href="{{url('PA5')}}" style="text-align:center;">ภาคผนวก</a>

                </div>
            </div>
            @endif

            <div id="page-content-wrapper">
                @if(session('uAuth'))
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" >
                    <div class="container">
                        
<!--                        -->


                        <div class="row" style="width:100%;">
                        <div style="width:100%;text-align:left;">
                        <button class="btn btn-primary" id="sidebarToggle"><li class="fa fa-bars" title="toggle"></li></button>
                        </div>
                        <div style="width:100%;padding-bottom:5em;">    
                        <center>
                            <span class="blue_big" style="font-size:22pt;"><b>ข้อตกลงในการพัฒนางานสำหรับครู</b></span>
                            <br> <span class="blue_small"><b>( Performance Agreement )</b></span>
                        </center>
                        </div>
                        </div>
                    </div>
                </nav>
                @endif


                @yield('content')

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">!มีบางอย่างไม่ถูกต้อง</h4>
                            </div>
                            <div class="modal-body">
                                <span id="span_modal"></span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="close" class="btn btn-primary" data-dismiss="modal" onclick="close_modal();" aria-label="Close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    </body>
</html>