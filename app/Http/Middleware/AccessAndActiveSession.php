<?php

namespace App\Http\Middleware;

use Closure;

use App\IagSession;

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
        // $a = $request->session()->get('Access');
        // $as = $request->session()->get('ActiveSession');

        // dd($as);

        // if($a === null || $as === null){

        //     // return redirect('https://system.iag.bg');

            $iagsession = new IagSession();

            $result = $iagsession->where('ID', $request->sid)->first();
            // dd($result->ActiveSession);
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
                // return redirect()->route('restrict');
                return $next($request);
            }
             return redirect()->route('restrict');
             
            // abort(404, 'Нестава!');

        //     // dd($result);
        //     $a = $request->session()->put('Access', $result->Access);

        //     $as = $request->session()->put('ActiveSession', $result->ActiveSession);

        //     if($a === 0 && $as === 0){

        //         // abort(504);
        //         return redirect('https://system.iag.bg');
        //     }
            
        //     $request->session()->put([
        //                     'sid'             => $result->ID,
        //                     'username'        => $result->username,
        //                     'SelYear'         => $result->SelYear,
        //                     'AccessPodelenia' => $result->AccessPodelenia,
        //                     'Access112'       => $result->Access112,
        //                     'Access'          => $result->Access,
        //                     'ActiveSession'   => $result->ActiveSession,
        //                     'FullName'        => ''
        //                 ]);

        //     dump($request->session()->all());

            
        // }
        
        
        // $iagsession = new IagSession();
        
        // $as = $iagsession->where('ID', $request->sid)->first();

        // if(count($as) > 0){
        //     if($as->Access === null || $as->ActiveSession === null )
        //     {
        //         //  abort(504);
        //         return redirect('https://system.iag.bg');
        //     }
        // }
        
        } 
}
