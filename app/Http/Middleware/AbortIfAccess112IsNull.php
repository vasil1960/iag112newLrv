<?php

namespace App\Http\Middleware;

use Closure;

use App\IagSession;

class AbortIfAccess112IsNull
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next )
    {
        $iagsession = new IagSession();
        
        $as = $iagsession->find($request->sid);

        dump($as);

        if($as && $as->ActiveSession == '1' && $as->Access112 == '0' )
        {
            abort(504);
        }

        return $next($request);
    }
}
