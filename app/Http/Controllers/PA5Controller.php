<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Models\PA;
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
use App\Models\group_learn;
use App\Models\pa_task;
use App\Models\pa_standard_development;
use App\Models\pa_evaluation;
use App\Models\pa_issue;
use App\Models\template;
use Illuminate\Support\Facades\DB;
use Session;
use Input;
use App\Models\pa_evaluation_answer;
use App\Models\pa_evaluation_agree;
use App;
use PDF;
use Illuminate\Support\Facades\Storage;

class PA5Controller extends Controller {

    public function PA5() {

        $template = DB::table('template')
                ->get();

        $check = self::validation();

        if ($check != "") {
            $fail = "<b>คุณยังไม่ได้ระบุข้อมูลดังต่อไปนี้</b><br><br>";
            $fail .= "<ul>";
            $fail .= $check;
            $fail .= "</ul>";
            return view("pa.pa5.pa5", ["template" => $template])->withErrors(['msg' => $fail]);
        } else {



            $schedule_hour = DB::table('pa_schedule_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();

            $support_hour = DB::table('pa_support_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();

            $develop_hour = DB::table('pa_develop_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();


            $response_hour = DB::table('pa_response_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();


            $train = DB::table('pa_train_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();

            $inno = DB::table('pa_innovation')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();


            $uProfile = DB::table('user_profile')
                    ->where('user_id', uId())
                    ->get();

            $uEducation = DB::table('user_education')
                    ->where('user_id', uId())
                    ->get();

            $Profile = DB::table('user_profile')
                    ->where('user_id', uId())
                    ->first();

            $standard = pa_standard::where('root', 0)
                            ->orderBy('no', 'asc')->get();



            $pa_standard = pa_standard::find(1);


            $development = pa_standard_development::where('PA_year', PA_year())
                            ->where('user_id', uId())
                            ->orderBy('id', 'asc')->get();


            $task = DB::table('pa_task')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->orderBy('standard_id', 'asc')
                    ->get();

            $topic = pa_evaluation::where('root', 0)
                            ->where('eva_id', 'WE7845415215')
                            ->orderBy('no', 'asc')->get();



            $issue = DB::table('pa_issue')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->first();


            $agree = pa_evaluation_agree::where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();

            $arr_learn_class = '';

            if (!empty($Profile)) {
                $arr_learn_class = explode(",", $Profile->class_knowlage);
            }

            $pa_learn_class = pa_learn_class::all();
            return view("pa.pa5.pa5", [
                                "uId" => uId(),
                                "uProfile" => $uProfile,
                                "uEducation" => $uEducation,
                                "inno" => $inno,
                                "train" => $train,
                                "Profile" => $Profile,
                                "develop_hour" => $develop_hour,
                                "support_hour" => $support_hour,
                                "schedule_hour" => $schedule_hour,
                                "issue" => $issue,
                                "standard" => $standard,
                                "development" => $development,
                                "task" => $task,
                                "topic" => $topic,
                                "agree" => $agree,
                                "template" => $template,
                                "arr_learn_class" => $arr_learn_class,
                                "pa_learn_class" => $pa_learn_class,
                                "response_hour" => $response_hour])
                            ->withModel($pa_standard);
        }
    }

    public function validation() {

        $fail = '';

        $uProfile = DB::table('user_profile')
                ->where('user_id', uId())
                ->first();

        if (empty($uProfile)) {
            $fail .= "<li>ข้อมูลทั่วไป</li>";
        }


        $uEducation = DB::table('user_education')
                        ->where('user_id', uId())
                        ->orderBy('id', 'asc')->get();

        if (count($uEducation) <= 0) {
            $fail .= "<li>ประวัติการศึกษา</li>";
        }

        $schedule_hour = DB::table('pa_schedule_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        if (count($schedule_hour) <= 0) {
            $fail .= "<li>วิชาที่ทำการสอน</li>";
        }

        $support_hour = DB::table('pa_support_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        if (count($support_hour) <= 0) {
            $fail .= "<li>งานส่งเสริมและสนับสนุนการจัดการเรียนรู้</li>";
        }

        $develop_hour = DB::table('pa_develop_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        if (count($develop_hour) <= 0) {
            $fail .= "<li>งานพัฒนาคุณภาพการจัดการศึกษาของสถานศึกษา</li>";
        }


        $response_hour = DB::table('pa_response_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        if (count($response_hour) <= 0) {
            $fail .= "<li>งานตอบสนองนโยบายและจุดเน้น</li>";
        }


        $train = DB::table('pa_train_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        if (count($train) <= 0) {
            $fail .= "<li>การอบรมและพัฒนาตนเอง</li>";
        }

        $inno = DB::table('pa_innovation')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        if (count($inno) <= 0) {
            $fail .= "<li>สื่อการเรียนรู้และนวัตกรรม</li>";
        }


        $development = pa_standard_development::where('PA_year', PA_year())
                        ->where('user_id', uId())
                        ->orderBy('id', 'asc')->get();


        if (count($development) <= 0) {
            $fail .= "<li>แผนพัฒนาตนเอง</li>";
        }

        $task = DB::table('pa_task')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->orderBy('standard_id', 'asc')
                ->get();

        if (count($task) <= 0) {
            $fail .= "<li>งานที่ปฏิบัติตามมาตรฐานตำแหน่ง</li>";
        }

        $issue = DB::table('pa_issue')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        if (count($issue) <= 0) {
            $fail .= "<li>ประเด็นท้าทาย</li>";
        }

        return $fail;
    }

    public function Template1() {
        return view("template.template1.page2");
    }

    public function document_pdf(Request $request) {

        $check = self::validation();

        if ($check != "") {
            $template = DB::table('template')->get();
            $fail = "<b>คุณยังไม่ได้ระบุข้อมูลดังต่อไปนี้</b><br><br>";
            $fail .= "<ul>";
            $fail .= $check;
            $fail .= "</ul>";
            return view("pa.pa5.pa5", ["template" => $template])->withErrors(['msg' => $fail]);
        } else {
            $schedule_hour = DB::table('pa_schedule_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();

            $support_hour = DB::table('pa_support_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();

            $develop_hour = DB::table('pa_develop_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();


            $response_hour = DB::table('pa_response_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();


            $train = DB::table('pa_train_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();

            $inno = DB::table('pa_innovation')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();


            $uProfile = DB::table('user_profile')
                    ->where('user_id', uId())
                    ->get();

            $uEducation = DB::table('user_education')
                    ->where('user_id', uId())
                    ->get();

            $Profile = DB::table('user_profile')
                    ->where('user_id', uId())
                    ->first();

            $standard = pa_standard::where('root', 0)
                            ->orderBy('no', 'asc')->get();



            $pa_standard = pa_standard::find(1);


            $development = pa_standard_development::where('PA_year', PA_year())
                            ->where('user_id', uId())
                            ->orderBy('id', 'asc')->get();


            $task = DB::table('pa_task')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->orderBy('standard_id', 'asc')
                    ->get();

            $topic = pa_evaluation::where('root', 0)
                            ->where('eva_id', 'WE7845415215')
                            ->orderBy('no', 'asc')->get();



            $issue = DB::table('pa_issue')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->first();


            $arr_learn_class = '';

            if (!empty($Profile)) {
                $arr_learn_class = explode(",", $Profile->class_knowlage);
            }

            $pa_learn_class = pa_learn_class::all();

            $headers = array(
                "Content-type" => "text/html",
                "Content-Disposition" => "attachment;Filename=pa.doc"
            );

//
            $content = view("template.cover_pdf.cover".$request->cover_number, [
                "uId" => uId(),
                "Profile" => $Profile]);
            $content.="<div style='page-break-before: always;'></div>";
            $content.=view("template.document.document", [
                "uId" => uId(),
                "uProfile" => $uProfile,
                "uEducation" => $uEducation,
                "inno" => $inno,
                "train" => $train,
                "Profile" => $Profile,
                "develop_hour" => $develop_hour,
                "support_hour" => $support_hour,
                "schedule_hour" => $schedule_hour,
                "issue" => $issue,
                "standard" => $standard,
                "development" => $development,
                "task" => $task,
                "topic" => $topic,
                "arr_learn_class" => $arr_learn_class,
                "pa_learn_class" => $pa_learn_class,
                "response_hour" => $response_hour]);

            $pdf = App::make('dompdf.wrapper');
            $pdf->getDomPDF()->set_option("enable_php", true);

            $pdf->loadHTML($content);

            return $pdf->download('pa.pdf');
        }
    }

    public function document_word(Request $request) {

        $check = self::validation();

        if ($check != "") {
            $template = DB::table('template')
                    ->get();
            $fail = "<b>คุณยังไม่ได้ระบุข้อมูลดังต่อไปนี้</b><br><br>";
            $fail .= "<ul>";
            $fail .= $check;
            $fail .= "</ul>";
            return view("pa.pa5.pa5", ["template" => $template])->withErrors(['msg' => $fail]);
        } else {
            $schedule_hour = DB::table('pa_schedule_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();

            $support_hour = DB::table('pa_support_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();

            $develop_hour = DB::table('pa_develop_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();


            $response_hour = DB::table('pa_response_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();


            $train = DB::table('pa_train_hour')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();

            $inno = DB::table('pa_innovation')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->get();


            $uProfile = DB::table('user_profile')
                    ->where('user_id', uId())
                    ->get();

            $uEducation = DB::table('user_education')
                    ->where('user_id', uId())
                    ->get();

            $Profile = DB::table('user_profile')
                    ->where('user_id', uId())
                    ->first();

            $standard = pa_standard::where('root', 0)
                            ->orderBy('no', 'asc')->get();



            $pa_standard = pa_standard::find(1);


            $development = pa_standard_development::where('PA_year', PA_year())
                            ->where('user_id', uId())
                            ->orderBy('id', 'asc')->get();


            $task = DB::table('pa_task')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->orderBy('standard_id', 'asc')
                    ->get();

            $topic = pa_evaluation::where('root', 0)
                            ->where('eva_id', 'WE7845415215')
                            ->orderBy('no', 'asc')->get();



            $issue = DB::table('pa_issue')
                    ->where('user_id', uId())
                    ->where('PA_year', PA_year())
                    ->first();


            $arr_learn_class = '';

            if (!empty($Profile)) {
                $arr_learn_class = explode(",", $Profile->class_knowlage);
            }

            $pa_learn_class = pa_learn_class::all();

            $headers = array(
                "Content-type" => "text/html",
                "Content-Disposition" => "attachment;Filename=pa.doc"
            );



            $content = view("template.document.document", [
                "uId" => uId(),
                "uProfile" => $uProfile,
                "uEducation" => $uEducation,
                "inno" => $inno,
                "train" => $train,
                "Profile" => $Profile,
                "develop_hour" => $develop_hour,
                "support_hour" => $support_hour,
                "schedule_hour" => $schedule_hour,
                "issue" => $issue,
                "standard" => $standard,
                "development" => $development,
                "task" => $task,
                "topic" => $topic,
                "arr_learn_class" => $arr_learn_class,
                "pa_learn_class" => $pa_learn_class,
                "response_hour" => $response_hour])
                    ->withModel($pa_standard);



            return \Response::make($content, 200, $headers);
        }
    }
    
    
    public function uploadfile(Request $request)
    {

        if ($files = $request->file('fileToSave')) {
             
            if(File::exists(public_path('avatar/'.uId().PA_year().'.*'))){
            
               // File::delete(uId().PA_year().'.jpg');
                return 'hasfile';
            }else{
            
            $destinationPath = 'avatar'; 
            $extension = $files->getClientOriginalExtension(); 
            $fileName =  uId().PA_year().'.'.$extension; 
            $response_success = $files->move($destinationPath,$fileName); 
            
            //$file = $request->file('fileToSave')->store('avatar','public');
              
          return true;
          
            }
  
        }
  
       return false;
  
    }

}
