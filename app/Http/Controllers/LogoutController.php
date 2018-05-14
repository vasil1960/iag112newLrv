<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\IagSession;

class LogoutController extends Controller
{
    public function logout(Request $request){

        $as = $request->session()->get('ActiveSession');
        $sid =$request->session()->get('sid');
        dump($sid);
        if($as){
            $iagsession = IagSession::where('ID', $sid)->first();
            dump($iagsession);
            $iagsession->update(['ActiveSession' => 0]);
            $iagsession ->save();
        }

        $request->session()->flush();

        return redirect('https://system.iag.bg');
    }
}
