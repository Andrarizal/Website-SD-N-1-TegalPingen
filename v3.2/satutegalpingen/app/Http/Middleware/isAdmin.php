<?php
  
namespace App\Http\Middleware;
  
use Closure;
use Illuminate\Support\Facades\Auth;
   
class IsAdmin
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
        // if (Auth::check()) {

        //     if (Auth::user()->is_super == "yes" && Auth::user()->is_admin == "no"){
                           
        //         return redirect() -> route('super.home');//->with('success', "Anda Login Sebagai SUPER ADMIN");
                
        //     } else if (Auth::user()->is_admin == "yes"){
                
        //         //return redirect('/t3g4l/ministrator/home');
        //         return $next($request);
            
        //     } else {

        //         return redirect() -> back();
            
        //     }

        // } else {

        //     abort(403);

        // }

        if (Auth::check()) {

            if (Auth::user()->is_super == "no" && Auth::user()->is_admin == "yes"){
                           
                return $next($request);
                //return redirect() -> route('super.home');//->with('success', "Anda Login Sebagai SUPER ADMIN");
                
            } else {

                abort(403);
            }

        }
    }
}