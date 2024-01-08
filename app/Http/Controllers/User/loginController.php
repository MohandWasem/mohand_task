<?php

namespace App\Http\Controllers\User;


use App\Models\User;
use Illuminate\Http\Request;
use App\Models\details_login;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function login()
    {
        return view("User.login");
    }

    

//     public function form(Request $request)
//     {
//     //    return $request;
// if(Auth::guard('web')->attempt(["email"=>$request->input("email"),"password"=>$request->input("password")])){ 
// $id_user=Auth::guard("web")->user()->id;
// $date=Carbon::now();
// $num_login=details_login::where("id_user",$id_user)->count();

// if($num_login==0){
//     details_login::create([
//         "id_user"=>$id_user,
//         "num_of_login"=>1,
//         "date_login"=>$date
//     ]); 
  
//     // return redirect()->route("web/index");
    
    
// }else{
//     $num_login=details_login::where("id_user",$id_user)->first()->num_of_login;
//     details_login::where("id_user",$id_user)->update([
//         "num_of_login"=>$num_login+1,
//         "date_login"=>$date
//     ]) ;
//     // return redirect()->route("web/index");
// }
// $all_data=details_login::all();
//  return redirect()->route("web/index");



// //  $date_login=details_login::where("id_user",$id_user)->get("date_login");
// //  $date_logout=details_login::where("id_user",$id_user)->get("date_logout");
// // return  $logins_num=$date_login - $date_logout;


    
// }


}
  
