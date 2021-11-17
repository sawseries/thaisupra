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
useApp\Models\pa_evaluation_answer;

class SupervisorController extends Controller
{
    public function high_index(Request $request)
    {        
        return view("yokyong.supervisor.high.page1");
        
        
    }
    
    
    
    
    
}
