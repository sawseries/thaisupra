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
use App;
use PDF;
class TemplateController extends Controller {



    public function loadpage(Request $request) {

   

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


               $development = pa_standard_development::where('PA_year',PA_year())
                 ->where('user_id', uId())
                ->orderBy('id', 'asc')->get();
               
               
                $task = DB::table('pa_task')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->orderBy('standard_id','asc')
                ->get();
                
        $topic = pa_evaluation::where('root', 0)
                        ->where('eva_id', 'WE7845415215')
                        ->orderBy('no', 'asc')->get();        
                
   
        
        $issue = DB::table('pa_issue')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())         
                ->first();
        
    
     $arr_learn_class='';
        
        if(!empty($Profile)){
           $arr_learn_class = explode(",", $Profile->class_knowlage);
        }

        $pa_learn_class = pa_learn_class::all();
        return view("template.".$request->pages, [
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
                      "arr_learn_class"=>$arr_learn_class,
                    "pa_learn_class"=> $pa_learn_class,
                     "response_hour" => $response_hour])
                    ->withModel($pa_standard);
    }
    
    
     public function coverpage(Request $request) {
         
           $Profile = DB::table('user_profile')
                ->where('user_id', uId())
                ->first();
         
          return view("template.cover.".$request->pages, [
                    "uId" => uId(),
                    "Profile" => $Profile]);
     }
     
     
     public function graphic(Request $request) {
         
         
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


        $standard1 = pa_standard::where('root', 0)
                       ->where('no',1) 
                        ->orderBy('no', 'asc')->get();
        
        $standard2 = pa_standard::where('root', 0)
                       ->where('no',"!=",1) 
                        ->orderBy('no', 'asc')->get();

        $pa_standard = pa_standard::find(1);


               $development = pa_standard_development::where('PA_year',PA_year())
                 ->where('user_id', uId())
                ->orderBy('id', 'asc')->get();
               
               
                $task = DB::table('pa_task')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->orderBy('standard_id','asc')
                ->get();
                
                
        $topic1 = pa_evaluation::where('root', 0)
                        ->where('no',"<=",3)
                        ->where('eva_id', 'WE7845415215')
                        ->orderBy('no', 'asc')->get();
        
         $topic2 = pa_evaluation::where('root', 0)
                        ->where('no',">",3)
                        ->where('eva_id', 'WE7845415215')
                        ->orderBy('no', 'asc')->get();
        
   
        
        $issue = DB::table('pa_issue')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())         
                ->first();
        
        $arr_learn_class='';
        
        if(!empty($Profile)){
           $arr_learn_class = explode(",", $Profile->class_knowlage);
        }

        $pa_learn_class = pa_learn_class::all();
    

        return view("template.graphic.".$request->pages, [
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
                    "standard1" => $standard1,
                    "standard2" => $standard2,
                    "development" => $development,
                    "task" => $task,
                    "topic1" => $topic1,
                    "topic2" => $topic2,
                    "arr_learn_class"=>$arr_learn_class,
                    "pa_learn_class"=> $pa_learn_class,
                    "response_hour" => $response_hour])
                    ->withModel($pa_standard);


        
        }
     
     
     
     

}
