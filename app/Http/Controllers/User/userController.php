<?php

namespace App\Http\Controllers\User;


use App\Models\User;
use Nette\Utils\DateTime;
use Illuminate\Http\Request;
use App\Models\details_login;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
   
    public function index()
    {
    $id=1;
    $all_data=details_login::all();
    $id_user=Auth::guard("web")->user()->id;
    $date_login=details_login::where("id_user",$id_user)->first()->date_login;
    $diff = now()->diffInMinutes(Carbon::parse($date_login));
     return view('User.user',compact('all_data',"id","diff"));
  
    }

    public function add(Request $request)
    {
        $request->validate([
            "email"=>"required|email",
            "password"=>"required|min:3",
        ]);

        User::create([
            "name"=>$request->input('name'),
            "email"=>$request->input('email'),
            "password"=>Hash::make($request->input('password')),
          ]);
          return redirect()->route("web/index");
    }


    public function form(Request $request)
    {
if(Auth::guard('web')->attempt(["email"=>$request->input("email"),"password"=>$request->input("password")])){ 
$id_user=Auth::guard("web")->user()->id;
$date=Carbon::now();
$num_login=details_login::where("id_user",$id_user)->count();


if($num_login==0){
    // details_login::create([
    //     "id_user"=>$id_user,
    //     "num_of_login"=>1,
    //     "date_login"=>$date
    // ]); 
   
    // return redirect()->route("web/index");
    
    
}else{
    // $num_login=details_login::where("id_user",$id_user)->first()->num_of_login;
    // details_login::where("id_user",$id_user)->update([
    //     "num_of_login"=>$num_login+1,
    //     "date_login"=>$date
    // ]) ;
    // return redirect()->route("web/index");
}




$diff = now()->diffInHours(Carbon::parse($date_login));
$diff = now()->diffInDays(Carbon::parse($date_login));


// $date_logout=details_login::where("id_user",$id_user)->get("date_logout");
//  $datetime1=new DateTime("2024-01-03 10:48:12");
//  $datetime2=new DateTime("2024-01-02 21:36:42");
//  $interval=$datetime1->diff($datetime2);
//  return$days=$interval->format('%m%');


// $end_login=$date_login->diffInDays($date_logout);




 


    
}


}

}
