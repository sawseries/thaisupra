<?php

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\PA;
use App\Models\PA_year;
use App\Models\user_edu_type;
use App\Models\User_Profile;
use App\Models\user_education;
use App\Models\pa_schedule_hour;
use App\Models\pa_support_hour;
use App\Models\pa_develop_hour;
use App\Models\pa_response_hour;
use App\Models\pa_standard;
use App\Models\pa_train_hour;
use App\Models\pa_innovation;
use App\Models\pa_learn_class;
use App\Models\group_member;
use App\Models\group_learn;
use App\Models\teacher_academic;
use App\Models\group_department;

function PA_year() {

    $year = DB::table('pa_year')->where('active', 1)->first();
    return $year->year;
}

function uId() {
    return session('uID');
}

function uAuth() {
    return session('uAuth');
}

function uFname() {
    return session('uFname');
}

function uLname() {
    return session('uLname');
}

function uLevel() {
    return session('uLevel');
}

function uPreNm() {
    return session('uPreNm');
}

function uAddress() {
    return session('uAddress');
}


function prenm($id) {
    $prenm = "";
    switch ($id) {
        case 'A' : $prenm = "นาย";
            break;
        case 'B' : $prenm = "นาง";
            break;
        case 'C' : $prenm = "นางสาว";
            break;
        case 'D' : $prenm = "ด.ช.";
            break;
        case 'E' : $prenm = "ด.ญ.";
            break;
        case 'O' : $prenm = "อื่นๆ";
            break;
    }
    return $prenm;
}

function edu_nm($id) {

    $edu_nm = user_edu_type::find($id);
    return $edu_nm->name;
}

function group_department($id) {

    $department;
    if ($id == 'all') {
        $department = group_department::all();
    } else {
        $department = group_department::find($id);
    }
    return $department;
}


function find_department_str($bref) {
    $department = group_department::where("department_bref",$bref)->first();
    
    return $department->department_nm;
}

function standard($id) {
    $standard;
    if ($id == 'all') {
        $standard = pa_standard::where('root', 0)
                        ->orderBy('no', 'asc')->get();
    } else {
        $standard = pa_standard::where('root', 0)
                        ->where('id', $id)->first();
    }
    return $standard;
}

function group_learn($id) {
    $learn;
    if ($id == 'all') {
        $learn = group_learn::all();
    } else {
        $learn = group_learn::find($id);
    }
    return $learn;
}

function group_member($id) {
    $member;
    if ($id == 'all') {
        $member = group_member::all();
    } else {
        $member = group_member::find($id);
    }


    return $member;
}

function teacher_academic($id) {
    $academic;
    if ($id == 'all') {
        $academic = teacher_academic::all();
    } else {
        $academic = teacher_academic::find($id);
    }


    return $academic;
}

function datethai($date) {

    $date = explode("-", $date);

    $day = $date[2];
    $month = $date[1];
    $year = $date[0] + 543;

    return $day."  ". month($month)."  ".$year;
}


function datebref($date) {

    $date = explode("-", $date);

    $day = $date[2];
    $month =$date[1];
    $year = substr($date[0],2,2);

    return $day."/".$month."/".$year;
}



function month($months) {
    $month = "";
    switch ($months) {
        case '01' : $month = "มกราคม";
            break;
        case '02' : $month = "กุมภาพันธ์";
            break;
        case '03' : $month = "มีนาคม";
            break;
        case '04' : $month = "เมษายน";
            break;
        case '05' : $month = "พฤษภาคม";
            break;
        case '06' : $month = "มิถุนายน";
            break;
        case '07' : $month = "กรกฎาคม";
            break;
        case '08' : $month = "สิงหาคม";
            break;
        case '09' : $month = "กันยายน";
            break;
        case '10' : $month = "ตุลาคม";
            break;
        case '11' : $month = "พฤศจิกายน";
            break;
        case '12' : $month = "ธันวาคม";
            break;
    }
    return $month;
}

function calage($date){
  $today = date('d-m-Y');
  
  
  $datestr = "";
  
  $day =  round(abs(strtotime($today) - strtotime($date))/60/60/24);
  
  $y =floor(abs($day/365));
  
  if($y>0){
      $datestr.=$y." "."ปี ";
  }
  
  $m = floor(abs($day%365)/30);
  
  if($m>0){
       $datestr.=$m." "."เดือน "; 
  }
  
  $d = floor(abs($day%365)%30);
  
   if($d>0){
       $datestr.=$d." "."วัน "; 
   }
      return $datestr;
}
    
    
 function degree($score){
     
     if(($score>=1)&&($score<=1.5)){
         return "ควรปรับปรุง";
     }else if(($score>=1.51)&&($score<=2.5)){
         return "พอใช้";
     }else if(($score>=2.51)&&($score<=3.5)){
         return "ปานกลาง";
     }else if(($score>=3.51)&&($score<=4.5)){
         return "ดี";
     }else if(($score>=4.5)&&($score<=5)){
         return "ดีมาก";
     }
     
 } 
