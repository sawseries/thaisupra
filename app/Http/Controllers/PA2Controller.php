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
use App\Models\pa_yokyong;
use Illuminate\Support\Facades\DB;
use Session;
use Input;

class PA2Controller extends Controller {

    public function PA2_1(){
        $standard = pa_standard::where('root',0)
                ->orderBy('no', 'asc')->get();
        
        $pa_standard = pa_standard::find(1);
        $pa_yokyong = pa_yokyong::all();
         $uProfile = DB::table('user_profile')
                ->where('user_id', uId())
                ->first();
         
        
        return view("pa.pa2.pa2_1", ["standard" => $standard,"yokyong" =>$pa_yokyong,"uProfile" =>$uProfile])->withModel($pa_standard);
           
    }
    
    public function PA2_2(){    
         $development = pa_standard_development::where('PA_year',PA_year())
                 ->where('user_id', uId())
                ->orderBy('id', 'asc')->get();
         
          $standard = pa_standard::where('root',0)
                ->orderBy('no', 'asc')->get();
         
        return view("pa.pa2.pa2_2",["development"=>$development,"standard"=>$standard]);
    }
    
    public function PA2_3(){       
        $standard = "";
        
        $task = DB::table('pa_task')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->orderBy('standard_id','asc')
                ->get();
        
        
        if(count($task)>0){
            
           $standard =  DB::table('pa_standard')                 
          ->select('id','detail')
          ->where('root',0)
          ->whereNotIn('id', DB::table('pa_task')
                   ->where('user_id', uId())
                   ->where('PA_year', PA_year())
                   ->pluck('standard_id'))->orderBy('no', 'asc')->get(); 
        
           
        }else{
          $standard = pa_standard::where('root',0)
                ->orderBy('no', 'asc')->get();
        }
        
        return view("pa.pa2.pa2_3",["task" => $task,"standard"=>$standard]);
    }
    
    
    public function PA2_4(){ 
         return view("pa.pa2.pa2_4"); 
    }
    
    public function PA2_Insert_Task(Request $request){        
        
            DB::table('pa_task')->insert([
                    ['user_id' => uId(),
                        'PA_year' => PA_year(),
                        'standard_id' => $request->input('txtstandard'),
                        'standard' => standard($request->input('txtstandard'))->detail,
                        'task' => $request->input('txttask'),
                        'outcome' => $request->input('txtoutcome'),
                        'indicator' => $request->input('txtindicator')]
                ]);
        
        return redirect('PA2_3');
    }
    
    
        public function PA2_Insert_Development(Request $request){        
        
            DB::table('pa_standard_development')->insert([
                    ['user_id' => uId(),
                        'PA_year' => PA_year(),
                        'standard_id' => $request->input('txtstandard'),
                        'start_date' => $request->input('txtstart_date'),
                        'end_date' => $request->input('txtend_date'),
                        'budget' => $request->input('txtbudget'),
                        'benefit' => $request->input('txtbenefit')]
                ]);
            
            
        
        return redirect('PA2_2');
    }
    
    
       public function PA2_delete_Task(Request $request){
           
           
           pa_task::where('id', $request->id)->delete();
           
           return redirect('PA2_3');
       }
       
       
       
         public function PA2_delete_Development(Request $request){
           
           
           pa_standard_development::where('id', $request->id)->delete();
           
           return redirect('PA2_2');
       }

}
