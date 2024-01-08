<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\details_login;
class logOutController extends Controller
{
   public function logout(){

        $id_user=Auth::guard("web")->user()->id;
        $date=Carbon::now();
        details_login::where("id_user",$id_user)->update([
            "date_logout"=>$date
        ]);
       Auth::guard("web")->logout();
       return redirect()->route('login');

    

    }

}
