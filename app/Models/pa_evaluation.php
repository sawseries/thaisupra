<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\pa_evaluation_answer;
use App\Models\pa_evaluation;
use DB;

class pa_evaluation extends Model
{
  
    
    protected $table = 'pa_evaluation';
    
   public static function find_question($id){
        
         $question = pa_evaluation::where('root',$id)
                ->orderBy('no', 'asc')->get();
         return $question;
    }
    
    public static function find_answer($root,$sub,$user_id,$pa_year,$eva_id){
        
        $answer = pa_evaluation_answer::where('eva_id',$eva_id)
                ->where('user_id',$user_id)   
                ->where('root',$root)   
                ->where('sub',$sub)
                ->where('eva_id',$eva_id)
                ->where('PA_year',$pa_year)
                ->first();
        
        if(!empty($answer)){
        return $answer->answer;
        }else{
          return "ไม่มีคะแนน";  
        }
    }
    
    
     public static function find_avg_answer($root,$user_id,$pa_year,$eva_id){
         

          $answer = pa_evaluation_answer::where('eva_id',$eva_id)
                ->where('user_id',$user_id)   
                ->where('root',$root)   
                ->where('PA_year',$pa_year)
                ->select(DB::raw('round(AVG(answer),2) as score'))   
                ->groupBy('user_id')  
                ->first();
        
        if(!empty($answer)){
        return $answer->score;
        }else{
          return "ไม่มีคะแนน";  
        }
         
         
     }
    
    
    
}
