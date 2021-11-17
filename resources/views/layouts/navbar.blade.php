<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Thaisupra - PA</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/input.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Niramit&display=swap" rel="stylesheet">

    <!--        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Niramit&display=swap" rel="stylesheet">-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    

        
        
    <script src="{{asset('/storage/controller/controller.js')}}"></script>
    <script src="{{asset('/storage/controller/pa_1_2.js')}}"></script>
    <script src="{{asset('/storage/controller/pa_1_1.js')}}"></script>
    <script src="{{asset('/storage/controller/pa_1_4.js')}}"></script>
    <script src="{{asset('/storage/controller/pa_1_3.js')}}"></script>
    <script src="{{asset('/storage/controller/pa_4.js')}}"></script>
    <script src="{{asset('/storage/controller/pa_1_5.js')}}"></script> 
    <script src="{{asset('/storage/controller/pa_2_2.js')}}"></script> 
    <script src="{{asset('/storage/controller/pa3.js')}}"></script> 
  
    <script src="{{asset('/storage/controller/templates.js')}}"></script> 
 <link href="{{asset('/assets/bar/bar.css')}}" rel="stylesheet">
 <script src="{{asset('/assets/bar/bar.js')}}"></script> 
   
    <link href="{{ asset('assets/css/evaluation.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/template.css') }}" rel="stylesheet">
    <script src="{{asset('/storage/controller/element.js')}}"></script> 
    <script src="{{asset('assets/polygon/polygon.js')}}"></script>
    <link href="{{ asset('assets/polygon/polygon.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>




    <style>
        .nav_menu{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        .nav_menu li{
            float: left;
        }
        .nav_menu li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .nav_menu li a:hover {
            background-color: #111;
        }
        .dropdown_menu{
            display: inline-block;
        }
        .dropdown_menu_content{
            display:none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1; 
            margin-top:60px;
        }
/*        .dropdown_menu:hover .dropdown_menu_content{
            display: block;
        }*/
        .dropdown_menu ul{
            list-style-type: none;
            text-decoration:none;
            text-align: left;
            margin:0;
            width:280px;
            display: block;
        }
        .dropdown_menu ul li a{
            color:black;                
        }
        .topnav {
            overflow: hidden;
        }
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 14px;
        }
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
    </style>

    <script type="text/javascript">
$(document).ready(function() {
  $("#dropdown_menu").hover(function(){
    $("#dropdown_menu_content").show();
  });
  
  
  $("#dropdown_menu_content").hover(function(){
  },
  function(){
    $(this).fadeOut();
  }); 
  
});
</script>
</head>


<nav class="navbar navbar-expand-lg fixed-top" id="TopNav" style="background-color: #00061B;">
    <div class="container px-4">
        <div class="navbar-brand">
            <span  class="btn_nav"><a class="nav-link"  href="https://www.facebook.com/thaisuprateacher"><span class="fab fa-facebook "></span></a></span>
            <span  class="btn_nav"><a class="nav-link"  href="https://line.me/ti/p/%40Thaisuprateacher"><span class="fab fa-line"></span></a></span>
            <span  class="btn_nav"><a class="nav-link"  href="https://www.youtube.com/channel/UC1kI7ZF9mEqdo0kacYrt57g"><span class="fab fa-youtube"></span></a></span>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span style="color:white;" class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                @if(session('uAuth'))                        
                <li  class="btn_nav"><a class="nav-link">ภาษาไทย</a></li>
                <li  class="btn_nav"><a class="nav-link" href="https://www.thaisuprateacher.org/RegisStatus">ตรวจสอบสถานะการสมัคร</a></li>
                <li  class="btn_nav"><a class="nav-link" href="{{url('logout')}}">ออกจากระบบ</a></li>
                @else
                <li  class="btn_nav"><a class="nav-link" href="https://www.thaisuprateacher.org/signup.php">สมัครสมาชิก</a></li>
                <li  class="btn_nav"><a class="nav-link" href="{{url('/')}}">เข้าสู่ระบบ</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid" id="SecoundNav" style="padding-top:50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="d-sm-none d-md-block" style="float: left;padding-top:15px;">
                    <img src="{{ asset('logo/logo.png') }}" style="width:60px;border:0;">
                </div>
                <div style="float:left;color:white;margin-top:4%;">
                     <b><span style="font-size: 14pt;">มูลนิธิครูดีของแผ่นดิน</span></b>    
                    <br>Foundation of Thai Suprateacher
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top:20px;">
                <div class="d-none d-md-block">
                <ul class="nav_menu">
                    <li><a class="active" href="https://www.thaisuprateacher.org">หน้าแรก</a></li>
                    <li><a href="https://www.thaisuprateacher.org/เกี่ยวกับเรา.php">เกี่ยวกับเรา</a></li>
                    <li class="dropdown_menu" id="dropdown_menu"><a>ร่วมโครงการ</a>
                        <div class="dropdown_menu_content" id="dropdown_menu_content">
                            <ul style="color:black;">
                                <li><a href="https://www.thaisuprateacher.org/all_project.php" style="text-align:left;color:black;">โครงการทั้งหมดของมูลนิธิ</a></li>
                                <li><a href="https://www.thaisuprateacher.org/project_db.php?id=21" style="text-align:left;color:black;">โครงการเครือข่ายครูดีของแผ่นดิน</a></li>
                                <li><a href="https://www.thaisuprateacher.org/project_db.php?id=19" style="text-align:left;color:black;">โครงการเด็กดีของแผ่นดิน</a></li>
                                <li><a href="https://www.thaisuprateacher.org/project_db.php?id=22" style="text-align:left;color:black;">โครงการศึกษานิเทศก์ดีของแผ่นดิน</a></li>
                                <li><a href="https://www.thaisuprateacher.org/project_db.php?id=23" style="text-align:left;color:black;">โครงการอบรม/สัมนา</a></li> 
                                <li><a href="https://www.thaisuprateacher.org/project_db.php?id=29" style="text-align:left;color:black;">โครงการBEINTERNETAWARESOME</a></li> 
                                <li><a href="https://www.thaisuprateacher.org/project_db.php?id=27" style="text-align:left;color:black;">โครงการอาสาของแผ่นดิน</a></li>
                                <li><a href="https://www.thaisuprateacher.org/project_db.php?id=69" style="text-align:left;color:black;">โครงการผู้บริหารสถานศึกษาดีของแผ่นดิน</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="https://www.thaisuprateacher.org/คลังสื่อนวัตกรรมรวมlatest.php">คลังสื่อนวัตกรรม</a></li>
                    <li><a href="https://www.thaisuprateacher.org/ติดต่อเรา.php">ติดต่อเรา</a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</div>