<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use App\User;
use DB;
class code
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $currentuserId = Auth::id();
        $user = DB::table('users')->where('id',$currentuserId)->first();
        if ($user->permission == "student") {
            return redirect()->route('permission')->with('permission','student')->with('user',$user);   
        }elseif ($user->permission == "parent") {
            return redirect()->route('permission')->with('permission','parent')->with('user',$user);   
        }
           
        return $response;
    }
}
