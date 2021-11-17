<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Models\PA;
use Illuminate\Support\Facades\DB;
use Session;



class pa_standard extends Model
{
    
    protected $table = 'pa_standard';
    
    
    function find_standard($id){
         $standard = pa_standard::where('root',$id)
                ->orderBy('no', 'asc')->get();
         return $standard;
    }
    
    
    static function  get_score_standard($user_id,$PA_year,$root,$sub,$score){
        
      //sum score for sub
        
        $checkscore = explode(",",$score);
        $str = "";
        $check="";
        if(count($checkscore)<=1){
           $str = $score;
           $check="score";
        }else{
           
           
           if($checkscore[0]=="mean"){
               for($i=1;$i<=count($checkscore)-1;$i++){
                    if($i!=1){
                      $str.=" or";  
                    }                    
                    $str.=" indicate_detail_id=".$checkscore[$i];    
               }
               
           }else if($checkscore[0]=="all"){
                $str="indicate_detail_id between $checkscore[1] and $checkscore[2]"; 
           }          
           $check="query";
        }
        
        
        $response = Http::post('https://www.thaisuprateacher.org/api/score_standard.php', [
                    'user_id' => $user_id,
                    'PA_year' => $PA_year,
                    'score' => $str,
                    'check' => $check
        ]);
       

        $scores = json_decode($response, true);
        
        if(!empty($scores["score"]["result"])){
        return $scores["score"]["result"];
        }else {
            return "ไม่มีคะแนน";
        }
        
    }
    
    
       static function  get_result_score_standard($user_id,$PA_year,$root,$rootsub,$type){
        
      //sum score for root
        
        $root_no = pa_standard::where('root',$root)
                ->where('no',$rootsub)
                ->first();     
        
        $score = $root_no->$type;
        $cntavg=0;
        $sumscore=0;    
        $checkscore = explode(",",$score);

        if(count($checkscore)<=1){
            $sub_no = pa_standard::where('id',$checkscore[0])
                ->first(); 
            
              $result=self::get_score_standard($user_id,$PA_year,$rootsub,$sub_no->no,$sub_no->$type);
              if($result!="ไม่มีคะแนน"){
                   $sumscore+=$result; 
                   $cntavg+=1;
              }
        }else{
                      
           if($checkscore[0]=="mean"){
               
               for($i=1;$i<=count($checkscore)-1;$i++){
                   
                   
                $sub_no = pa_standard::where('id',$checkscore[$i])
                ->first(); 
                
                $result = self::get_score_standard($user_id,$PA_year,$rootsub,$sub_no->no,$sub_no->$type);
                
                if($result!="ไม่มีคะแนน"){
                   $sumscore+=$result; 
                   $cntavg+=1;
                 }
                
                
               }
               
           }  
        }
        
        if($sumscore!=0){
        return round(($sumscore/$cntavg),2);
        }else{
            return "ไม่มีคะแนน";
        }

    }
 
    
    
    static function  getuser_yokyong_score($user_id,$PA_year,$indicate_id){
        
        $response = Http::post('https://www.thaisuprateacher.org/api/yokyong.php', [
                    'user_id' => $user_id,
                    'no'=>$indicate_id
        ]);
       

        $score = json_decode($response,true);
        
        return $score["score"];
//         if(!empty($scores["score"]["score"])){
//              return $score["score"]["score"];
//         }else{
//            return "ไม่มีคะแนน"; 
//         }
        
    }
}
