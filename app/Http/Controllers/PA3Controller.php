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
use App\Models\pa_evaluation_agree;
use Illuminate\Support\Facades\DB;
use Session;
use Input;
use App\Models\pa_evaluation_answer;

class PA3Controller extends Controller {

    public function PA3() {
        
        $topic = pa_evaluation::where('root', 0)
                       ->where('eva_id','WE7845415215')                          
                        ->orderBy('no', 'asc')->get();
         
        
        $agree = pa_evaluation_agree::where('user_id', uId())
                        ->where('PA_year', PA_year())                          
                        ->get();
        
          $answer = pa_evaluation_answer::where('eva_id','WE7845415215')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())  
                ->get();
        
        if((count($agree)<=0)&&(count($answer)>0)){
            
             foreach($topic as $topics){
                   DB::table('pa_evaluation_agree')->insert([
                    ['user_id' => uId(),
                        'PA_year' => PA_year(),
                        'eva_id' => $topics->eva_id,
                        'root' => 0,
                        'detail' => $topics->detail,
                        'sub' => $topics->no,
                        'teacher' => pa_evaluation::find_avg_answer($topics->no,uId(),PA_year(),$topics->eva_id),
                        'student' => 0,
                        'agree' => 0,   
                    ]
                ]);
             }            
        }

       

        return view("pa.pa3.pa3", ["topic" => $topic,
                                "eva_id" => 'WE7845415215',
                                "agree"=> $agree,
                                "user_id" => uId()]);

    }

    public function PA3_resolution() {
        return view("pa.pa3.resolution");
    }

    public function evaluation() {
        return view("pa.pa3.evaluation_later");
    }

    public function PA3_evaluation(Request $request) {

        $answer = pa_evaluation_answer::where('eva_id', $request->eva_id)
                ->where('user_id', uId())
                ->get();

        $topic = pa_evaluation::where('root', 0)
                        ->where('eva_id', $request->eva_id)
                        ->orderBy('no', 'asc')->get();
        $model = pa_evaluation::find(1);

        if (count($answer) > 0) {
            return view("pa.pa3.evaluation_answer", ["topic" => $topic,
                                "eva_id" => $request->eva_id,
                                "user_id" => uId()])
                            ->withModel($model);
        } else {
            return view("pa.pa3.evaluation", ["topic" => $topic, "eva_id" => $request->eva_id])->withModel($model);
        }
    }

    public function PA3_techer_evaluation() {

        return view("pa.pa3.evaluation");
    }

    public function PA3_evaluation_answer(Request $request) {

        $topic = pa_evaluation::where('root', 0)
                        ->where('eva_id', $request->hdneva_id)
                        ->orderBy('no', 'asc')->get();
        foreach ($topic as $topic) {
            $question = pa_evaluation::find_question($topic->no);
            foreach ($question as $question) {
                $answer = $request->answer[$topic->no][$question->no];
                DB::table('pa_evaluation_answer')->insert([
                    ['user_id' => uId(),
                        'PA_year' => PA_year(),
                        'eva_id' => $request->hdneva_id,
                        'root' => $topic->no,
                        'sub' => $question->no,
                        'type' => 'owner',
                        'answer' => $answer]
                ]);
            }
        }

        return redirect('PA3');
    }

    public function PA3_evaluation_result(Request $request) {

        $topic = pa_evaluation::where('root', 0)
                        ->where('eva_id', $request->eva_id)
                        ->where('PA_year',PA_year())  
                        ->orderBy('no', 'asc')->get();
        $model = pa_evaluation::find(1);
        return view("pa.pa3.evaluation_answer", ["topic" => $topic,
                            "eva_id" => $request->eva_id,
                            "user_id" => $request->user_id])
                        ->withModel($model);
    }
    
    
     public function PA_3_agree_update_field(Request $request){
         pa_evaluation_agree::where('id', $request->id)
                ->update(array($request->field => $request->value));

        return true;
    }
    
    
    public function PA_3_agree(){
         
        $agree = pa_evaluation_agree::where('user_id', uId())
                        ->where('PA_year',PA_year())                          
                        ->get();
         
        if(count($agree)>0){
             echo json_encode($agree);
        }else{
             echo 0;
        }
        //echo "hello";
       
         
    }

}
