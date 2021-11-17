<!DOCTYPE html>
<html lang="en">

    <body>

        @include('layouts.navbar')     
        <div class="container-fluid" style="background-color: #333;padding:0;">
            <div class="container">
                <div class="row">
                    <div class="topnav">
                        <a href="#news">หน้าแรก</a>
                        <a style="padding:0;color:white;margin-top:15px;">>></a>
                        <a href="#contact">ร่วมโครงการ</a>
                        <a style="padding:0;color:white;margin-top:15px;">>></a>
                        <a href="#about">โครงการศึกษานิเทศก์ดีของแผ่นดิน</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">

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



    
    </body>
</html>