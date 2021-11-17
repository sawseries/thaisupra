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
use Illuminate\Support\Facades\DB;
use Session;
use Input;
use App\Models\pa_evaluation_answer;

class PA4Controller extends Controller {

    public function PA4() {
        $issue = DB::table('pa_issue')
                ->where('user_id', uId())
                ->where('PA_year', PA_year())
                ->first();

        if (!empty($issue) > 0) {
            return view("pa.pa4.pa4_update", ["issue" => $issue]);
        } else {
            return view("pa.pa4.pa4_create");
        }
    }

    public function PA4_insert(Request $request) {
        DB::table('pa_issue')->insert([
            ['user_id' => uId(),
                'PA_year' => PA_year(),
                'issue' => $request->txtissue,
                'detail_1' => $request->txtdetail_1,
                'detail_2' => $request->txtdetail_2,
                'detail_3' => $request->txtdetail_3,
                'detail_4' => $request->txtdetail_4]
        ]);
        return redirect('PA4');
    }
    
    public function PA4_update_field(Request $request) {

        pa_issue::where('id', $request->id)
                ->update(array($request->field => $request->value));
       return true;
    }

    
    public function PA4_doc(Request $request){
        
        
                $issue = DB::table('pa_issue')
                ->where('id',$request->id)
                ->where('PA_year', PA_year())         
                ->first();
                                        
        $headers = array(
        "Content-type"=>"text/html",
        "Content-Disposition"=>"attachment;Filename=issue.doc"
        );
                
        $content = '<html>
            <head><meta charset="utf-8"></head>
            <body style="font-family:"THSarabunNew",sans-serif;font-size:16px;">
                <b>ประเด็นท้าทาย เรื่อง</b> <br> '.$issue->issue.'
                <p><b>1.สภาพปัญหาของผู้เรียนและการจัดการเรียนรู้ </b><br>
                '.$issue->detail_1.'
                <p><b>2.วิธีการดำเนินการให้บรรลุผล </b> 
                '.$issue->detail_2.'
                <p><b>3.ผลลัพธ์การพัฒนาที่คาดหวัง </b> 
                <p><b>3.1 เชิงปริมาณ </b> 
                '.$issue->detail_3.'     
                <p><b>3.2 เชิงคุณภาพ </b> 
                '.$issue->detail_4.'
                <div style="width:100%;">
                <div style="width:1000px;float:left;"></div>
                <div style="width:50%;text-align:center;float:left;">
                 ลงชื่อ..........................................................................
                <br>(.........................................................................)
                <br>ตำแหน่ง.....................................................................
                <br><b>ผู้จัดทำข้อตกลงในการพัฒนางาน</b>
                <br>................/.............../...................
                </div>               
                </div>    
                <p><b>ความเห็นของผู้อำนวยการสถานศึกษา</b>   
                <p>( ) เห็นชอบให้เป็นข้อตกลงในการพัฒนางาน  
                <p>( ) ไม่เห็นชอบให้เป็นข้อตกลงในการพัฒนางาน โดยมีข้อเสนอแนะเพื่อนำไปแก้ไข และเสนอเพื่อพิจารณาอีกครั้ง ดังนี้
                <p>...................................................................................................................................................................................................................................................................................................................................................................................................... 
                 <div style="width:100%;">
                <div style="width:50%;float:left;">.</div>
                <div style="width:50%;text-align:center;float:left;">
                 ลงชื่อ..........................................................................
                <br>(.........................................................................)
                <br>ตำแหน่ง.....................................................................
                <br><b>ผู้จัดทำข้อตกลงในการพัฒนางาน</b>
                <br>................/.............../...................
                </div>               
                </div>    
            </body>
            </html>';
    
    return \Response::make($content,200, $headers);
                
    }
}
