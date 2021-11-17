<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Models\PA;
use Illuminate\Support\Facades\DB;
use Session;


class AuthController extends Controller {

    public function login() {

        if (session('uAuth')) {
             return redirect('PA1');          
        } else {
             return view("login");
        }
    }
    
    
    public function logout() {

       Session::flush();
       return redirect('login');
    }
    

    public function authentication(Request $request) {


        $response = Http::post('https://www.thaisuprateacher.org/api/palogin.php', [  
                    'email' => $request->email,
                    'password' => $request->password,
        ]);


        $user = json_decode($response, true);        
        if ($user["success"] == true) {

            $user = json_decode($response, true);
            session(['uAuth' => true]);
            session(['uPreNm' => prenm($user["user"]["prename"])]);
            session(['uFname' => $user["user"]["firstname"]]);
            session(['uLname' => $user["user"]["lastname"]]);
            session(['uID' => $user["user"]["ID"]]);
            session(['uLevel' => $user["user"]["level"]]);
            session(['uAddress' => $user["user"]["docaddress"]]);

            return redirect('/PA1');
            
        }else{

            return redirect('login')->withErrors(['fail'=>'email หรือ password ไม่ถูกต้อง']);
        }
    }

    public function PALogin($email, $passwd) {

    
        $response = Http::post('https://www.thaisuprateacher.org/api/palogin.php', [
                    'email' => $email,
                    'password' => $passwd,
        ]);

            $user = json_decode($response, true);
          if ($user["success"] == true) {

            $user = json_decode($response, true);
            session(['uAuth' => true]);
            session(['uFname' => $user["user"]["firstname"]]);
            session(['uLname' => $user["user"]["lastname"]]);
            session(['uID' => $user["user"]["ID"]]);
            session(['uLevel' => $user["user"]["level"]]);
            session(['uAddress' => $user["user"]["docaddress"]]);


            return redirect('PA1');
        } else {
            return redirect('login')->withErrors(['fail'=>'email หรือ password ไม่ถูกต้อง']);
        }
    }

//    public function Pa($uID) {
//
//        $year = DB::table('pa')
//                ->where('PA_year', PA_year())
//                ->where('user_id', $uID)
//                ->get();
//
//        if ($year->count()<=0) {
//
//            DB::table('pa')->insert([
//                ['PA_year' => PA_year(),
//                    'user_id' => $uID,
//                    '1_1' => 0,
//                    '1_1' => 0,
//                    '1_3' => 0,
//                    '1_4' => 0,
//                    '2_1' => 0,
//                    '2_2' => 0,
//                    '3' => 0,
//                    '4' => 0]
//            ]);
//        }
//    }
}
