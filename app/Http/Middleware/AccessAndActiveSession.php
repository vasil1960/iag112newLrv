<?php

namespace App\Http\Middleware;

use Closure;

use App\IagSession;

// use App\IagUser;

class AccessAndActiveSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request,  Closure $next)
    {

        $iagsession = new IagSession();

        $result = $iagsession->where('ID', $request->sid)->first();

        // dump($iagsession->iaguser);
        

        if($result->ActiveSession !== 0 && $result->Access112 !== 0){

            $request->session()->put([
                        'sid'             => $result->ID,
                        'username'        => $result->username,
                        'SelYear'         => $result->SelYear,
                        'AccessPodelenia' => $result->AccessPodelenia,
                        'Access112'       => $result->Access112,
                        'Access'          => $result->Access,
                        'ActiveSession'   => $result->ActiveSession,
                        'FullName'        => ''
                    ]);
            return $next($request);
        }
    // return redirect()->route('signali.restrict');

    abort(404);
        
    } 
}
