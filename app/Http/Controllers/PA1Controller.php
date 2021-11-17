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
use Illuminate\Support\Facades\DB;
use Session;
use Input;

class PA1Controller extends Controller {


    
    
    
        public function PA1() {


        $uProfile = DB::table('user_profile')
                ->where('user_id', uId())
                ->first();

        $uEducation = DB::table('user_education')
                ->where('user_id', uId())
                ->get();

        $edu_type = user_edu_type::all();
        
        
        
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

        
         $arr_learn_class = "";
        
        $uProfile = DB::table('user_profile')
                ->where('user_id', uId())
                ->first();
      
        if(!empty($uProfile)){
           $arr_learn_class = explode(",", $uProfile->class_knowlage);
        }

        $pa_learn_class = pa_learn_class::all();
        
        
         $train = DB::table('pa_train_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

         $inno = DB::table('pa_innovation')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();
         

        if (!empty($uProfile)) {
            return view("pa.pa1.pa_1_update", ["uProfile" => $uProfile, 
                "uEducation" => $uEducation, 
                "edu_type" => $edu_type,
                "schedule_hour" => $schedule_hour,
                "support_hour" => $support_hour,
                "develop_hour" => $develop_hour,
                "response_hour" => $response_hour,
                "arr_learn_class" => $arr_learn_class, 
                "pa_learn_class" => $pa_learn_class,
                "train" => $train,
                "inno" => $inno
                ]);
        }else{
            return view("pa.pa1.pa_1_create");
        }
    }
    
    
      public function PA_1_insert(Request $request) {
          
          $prename='';

          if($request->txtprenames=='อื่นๆ'){
             $prename= $request->txtprename_o;
          }else{
             $prename =$request->txtprenames;
          }
          
        DB::table('user_profile')->insert([
            ['user_id' => uId(),
                'prename' => $prename,
                'firstname' => $request->txtfirstnames,
                'lastname' => $request->txtlastnames,
                'position' => $request->txtpositions,
                'major' => $request->txtmajor_nm,
                'national' => $request->txtnationals,
                'race' => $request->txtraces,
                'religion' => $request->txtreligions,
                'address' => $request->txtaddress,
                'datestart' => $request->txtdatestarts,
                'datebegin' => $request->txtdatebegins,
                'academic' => $request->txtacademics,
                'dateacademic' => $request->txtdateacademics,
                'school' => $request->txtschools_st,
                'dateacademic' => $request->txtdateacademics,                
                'department_big' => $request->txtdepartment_big, //สังกัดใหญ่
                'department_small' => $request->txtdepartment_small, //สังกัดย่อย
                'department_bref' => $request->txtdepartment_big,  //ตัวย่อ
                'salary' => $request->txtsalarys]
        ]);

        
        
        if ($request->has('txtedu_types')) {
       

            for ($i = 0; $i <= (count($request->input('txtedu_types')) - 1); $i++) {

                DB::table('user_education')->insert([
                    ['user_id' => uId(),
                        'school' => $request->input('txtschool')[$i],
                        'major' => $request->input('txtmajor')[$i],
                        'faculty' => $request->input('txtfaculty')[$i],
                        'edu_type' => $request->input('txtedu_types')[$i]]
                ]);
            }
        }

        return redirect('PA1');
    }


    
    public function PA_1_update_field(Request $request){
        User_Profile::where('id', $request->id)
                ->update(array($request->field => $request->value));

        return true;
    }
   

    public function PA_1_insert_edu(Request $request) {


        DB::table('user_education')->insert([
            ['user_id' => uId(),
                'school' => $request->school,
                'faculty' => $request->faculty,
                'major' => $request->major,
                'edu_type' => $request->edu_type]
        ]);

        return true;
    }

    public function PA_1_update_edu(Request $request) {

        user_education::where('id', $request->id)
                ->update(array($request->field => $request->value));

        return true;
    }

    public function PA_1_delete_edu(Request $request) {

        user_education::find($request->id)->delete();
        return true;
    }

    ######################################################

    public function PA_1_insert_sch(Request $request) {


        DB::table('pa_schedule_hour')->insert([
            ['user_id' => uId(),
                'PA_year' => PA_year(),
                'group_learn' => $request->group_learn,
                'subject' => $request->subject,
                'grade' => $request->grade,
                'sch_hour' => $request->sch_hour]
        ]);

        return true;
    }

    public function PA_1_update_sch(Request $request) {

        pa_schedule_hour::where('id', $request->id)
                ->update(array($request->field => $request->value));

        return true;
    }

    public function PA_1_delete_sch(Request $request) {

        pa_schedule_hour::where('id', $request->id)->delete();
        return true;
    }

    #######################################################

    public function PA_1_insert_dev(Request $request) {

        DB::table('pa_develop_hour')->insert([
            ['user_id' => uId(),
                'PA_year' => PA_year(),
                'develops' => $request->develop,
                'dev_hour' => $request->dev_hour]
        ]);

        return true;
    }

    public function PA_1_delete_dev(Request $request) {

        pa_develop_hour::where('id', $request->id)->delete();
        return true;
    }

    public function PA_1_update_dev(Request $request) {

        pa_develop_hour::where('id', $request->id)
                ->update(array($request->field => $request->value));

        return true;
    }

    ############################################################

    public function PA_1_delete_sp(Request $request) {

        pa_support_hour::where('id', $request->id)->delete();
        return true;
    }

    public function PA_1_insert_sp(Request $request) {


        DB::table('pa_support_hour')->insert([
            ['user_id' => uId(),
                'PA_year' => PA_year(),
                'support_detail' => $request->support,
                'sp_hour' => $request->sp_hour]
        ]);

        return true;
    }

    public function PA_1_update_sp(Request $request) {

        pa_support_hour::where('id', $request->id)
                ->update(array($request->field => $request->value));

        return true;
    }

    ############################################################

    public function PA_1_delete_res(Request $request) {

        pa_response_hour::where('id', $request->id)->delete();
        return true;
    }

    public function PA_1_insert_res(Request $request) {


        DB::table('pa_response_hour')->insert([
            ['user_id' => uId(),
                'PA_year' => PA_year(),
                'response' => $request->response,
                'res_hour' => $request->hour_response]
        ]);

        return true;
    }

    public function PA_1_update_res(Request $request) {

        pa_response_hour::where('id', $request->id)
                ->update(array($request->field => $request->value));

        return true;
    }

    ####################################################

    public function PA_1_delete_train(Request $request) {

        pa_train_hour::where('id', $request->id)->delete();
        return true;
    }

    public function PA1_4_insert(Request $request) {

        if ($request->has('txttrain')) {
        
                for ($i = 0; $i <= (count($request->txttrain) - 1); $i++) {
                    DB::table('pa_train_hour')->insert([
                        ['user_id' => uId(),
                            'PA_year' => PA_year(),
                            'start_date' => $request->txtstart_date[$i], 
                            'end_date' => $request->txtend_date[$i],
                            'train' => $request->txttrain[$i],
                            'train_hour' => $request->txthour[$i],
                            'agency' => $request->txtagency[$i]]
                    ]);
                }
        }

        return redirect('PA1');
    }

    public function PA_1_insert_train(Request $request) {


        DB::table('pa_train_hour')->insert([
            ['user_id' => uId(),
                'PA_year' => PA_year(),
                'start_date' => $request->start_date, 
                'end_date' => $request->end_date,
                'train' => $request->train,
                'train_hour' => $request->train_hour,
                'agency' => $request->agency]
        ]);



        return true;
    }

    public function PA_1_update_train(Request $request) {

        pa_train_hour::where('id', $request->id)
                ->update(array($request->field => $request->value));

        return true;
    }

    ####################################################

    public function PA_1_delete_inno(Request $request) {

        pa_innovation::where('id', $request->id)->delete();
        return redirect("PA1");
    }

    public function PA_1_insert_inno(Request $request) {

        DB::table('pa_innovation')->insert([
            ['user_id' => uId(),
                'PA_year' => PA_year(),
                'title' => $request->title,
                'innovation' => $request->inno]
        ]);

        return true;
    }

    public function PA_1_update_inno(Request $request) {

        pa_innovation::where('id', $request->id)
                ->update(array($request->field => $request->value));

        return true;
    }

    ####################################################

    public function PA1_2() {

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


        if ((count($schedule_hour) > 0) || (count($support_hour) > 0) || (count($develop_hour) > 0) || (count($response_hour) > 0)) {
            return view("pa.pa1.1_2.pa1_2_update", ["schedule_hour" => $schedule_hour,
                "support_hour" => $support_hour,
                "develop_hour" => $develop_hour,
                "response_hour" => $response_hour]);
        } else {
            return view("pa.pa1.1_2.pa1_2_create");
        }
    }

    public function PA1_2_insert(Request $request) {

        if ($request->has('txtsubject')) {

            for ($i = 0; $i <= (count($request->txtsubject) - 1); $i++) {

                DB::table('pa_schedule_hour')->insert([
                    ['user_id' => uId(),
                        'PA_year' => PA_year(),
                        'group_learn' => $request->txtgroup_learn[$i],
                        'subject' => $request->txtsubject[$i],
                        'grade' => $request->txtgrade[$i],
                        'sch_hour' => $request->txthour_sch[$i]]
                ]);
            }
        }


         if ($request->has('txtsupport')) {

            for ($i = 0; $i <= (count($request->txtsupport) - 1); $i++) {

                DB::table('pa_support_hour')->insert([
                    ['user_id' => uId(),
                        'PA_year' => PA_year(),
                        'support_detail' => $request->txtsupport[$i],
                        'sp_hour' => $request->txthour_sp[$i]]
                ]);
            }
        }

        if ($request->has('txtdevelop')){

            for ($i = 0; $i <= (count($request->txtdevelop) - 1); $i++) {

                DB::table('pa_develop_hour')->insert([
                    ['user_id' => uId(),
                        'PA_year' => PA_year(),
                        'develops' => $request->txtdevelop[$i],
                        'dev_hour' => $request->txthour_develop[$i]]
                ]);
            }
        }

       if ($request->has('txtresponse')){

            for ($i = 0; $i <= (count($request->txtresponse) - 1); $i++) {

                DB::table('pa_response_hour')->insert([
                    ['user_id' => uId(),
                        'PA_year' => PA_year(),
                        'response' => $request->txtresponse[$i],
                        'res_hour' => $request->txthour_response[$i]]
                ]);
            }
        }


        return redirect('PA1');
    }

    public function PA1_3() {

         $arr_learn_class = "";
        
        $uProfile = DB::table('user_profile')
                ->where('user_id', uId())
                ->first();
      
        if(!empty($uProfile)){
           $arr_learn_class = explode(",", $uProfile->class_knowlage);
        }

        $pa_learn_class = pa_learn_class::all();

        return view("pa.pa1.1_3.pa1_3_create", ["arr_learn_class" => $arr_learn_class, "pa_learn_class" => $pa_learn_class]);
    }

    public function PA1_3_insert(Request $request) {
        
        if ($request->has('arr_learn_class')) {
            
            $arr_learn_class = "";
          

                for ($i = 0; $i <= (count($request->arr_learn_class) - 1); $i++) {
                    $arr_learn_class .= $request->arr_learn_class[$i];
                    $arr_learn_class .= ",";
                }
         
        }else{
            $arr_learn_class = "";
        }

        $profile = User_Profile::where('user_id', uId())->update(array('class_knowlage' => $arr_learn_class));

        return redirect('PA1');
    }

    public function PA1_4() {
   
        $train = DB::table('pa_train_hour')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();

        if (count($train) > 0) {
            return view("pa.pa1.1_4.pa1_4_update", ["train" => $train]);
        } else {
            return view("pa.pa1.1_4.pa1_4_create");
        }
    }

    public function PA1_5() {
        $inno = DB::table('pa_innovation')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->get();
        
        return view("pa.pa1.1_5.pa1_5_update", ["inno" => $inno]);
        
    }

    public function PA1_5_insert(Request $request) {
        
        
        if ($request->has('txt_inno')) {

            for ($i = 0; $i <= (count($request->txt_inno) - 1); $i++) {

                DB::table('pa_innovation')->insert([
                    ['user_id' => uId(),
                        'PA_year' => PA_year(),
                        'no' => $i + 1,
                        'title' => $request->txt_title[$i],
                        'innovation' => $request->txt_inno[$i]]
                ]);
            }       
        }

        return redirect('PA1');
    }
    
    ////////////////////////////////////////////////////////////////////
    
    
    
        public function PA_1_school_set(Request $request) {
        
         User_Profile::where('id', $request->id)
                ->update(array('department_big' => $request->dp_big,'department_small' => $request->dp_small,'school' => $request->school));

        return true;
        
        }

}
