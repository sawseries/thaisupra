
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">




<div class="limiter" >
    <div class="container-login100" >
        <div class="wrap-login100" style="height:750px;">
            <!-- ################################################################################################ -->
            <div class="textlink3 PreMenu_fl_left">
                <a href="https://www.thaisuprateacher.org"><i class="fas fa-arrow-left"></i> กลับไปหน้าหลัก</a>
            </div>
            <!-- ################################################################################################ -->
            <div class="textlink3 PreMenu_fl_right">
                <a href="https://www.thaisuprateacher.org/oldsystem/signup.php">สมัครสมาชิก</a>
            </div>
            <!-- ################################################################################################ -->
            <div style="width:100%;text-align: center;">
                <img  src="{{ asset('logo/logo.png') }}" style="width:100px;border:0;">
            </div>
            <!-- ################################################################################################ -->
            <!-- <form class="login100-form validate-form" name="formlogin" action="checklogin.php" method="POST" id="login"> -->
            <form action="{{url('authentication')}}" class="login100-form validate-form" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- ################################################################################################ -->
                <!-- URL value which need to send to checklogin.php -->
                <!-- ################################################################################################ -->
                
              @if(Session::has('errors'))
              <div  style="color:red;width:100%;border:1px solid red;background-color:#ff9999;padding:1em;">
              {{session('errors')->first('fail')}}
              </div>
              @endif
                
                
                <span style="text-align:center;">
                    <h2>ระบบรายงานผลมาตรฐาน</h2>
                </span><br>
                <!-- ################################################################################################ -->
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="email" id="email" name="email" class="form-control" placeholder="อีเมล" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" title="Please enter a valid email address" required />
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-user" aria-hidden="true"></i>
                    </span>
                </div>
                <!-- ################################################################################################ -->
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password"id="password" name="password" class="form-control" placeholder="รหัสผ่าน" pattern=".{8,}" title="Please enter at least 8 characters" required />
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <!-- ################################################################################################ -->
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit" id="btn">
                        เข้าสู่ระบบ
                    </button>
                </div>
                <!-- ################################################################################################ -->
<!--                <div class="text-center p-t-12">
                    <span class="txt1">
                        ลืม
                    </span>
                    <a class="txt2" href="forgetpassword.php">
                        อีเมล / รหัสผ่าน?
                    </a>
                </div>-->


            </form>
            <!-- ################################################################################################ -->
        </div>
    </div>
</div>




