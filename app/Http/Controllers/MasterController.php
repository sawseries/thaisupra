<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Models\PA;
use Illuminate\Support\Facades\DB;
use Session;


class MasterController extends Controller
{

    public function index(){
        return view("pa.pa1");
    }
    
    public function Pa_update($uID,$filed) {

        $year = DB::table('PA')
                ->where('PA_year', PA_year())
                ->where('user_id', $uID)
                ->first();

        if (count($year) >= 0) {   
            $pa = PA::where('PA_year', PA_year())
                    ->where('user_id', $uID)
                    ->update(array($filed => 1));
        }else{
            Pa($uID);
        }      
    }
    
    public function get_school(Request $request){
        $response = Http::post('https://www.thaisuprateacher.org/api/school.php', [  
                    'aff' => $request->department,
        ]);
        
        $aff = json_decode($response, true);  
        
        return $aff;
        
    }
    
     public function get_department(Request $request){
        $response = Http::post('https://www.thaisuprateacher.org/api/department.php', [  
                    'aff' => $request->department,
        ]);
        
        $aff = json_decode($response, true);  
        
        return $aff;
        
    }

    
}
