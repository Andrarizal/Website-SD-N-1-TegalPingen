<?php
  
namespace App\Http\Middleware;
  
use Closure;
use Illuminate\Support\Facades\Auth;
   
class IsSuperAdmin
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
        
        if (Auth::check()) {

            if (Auth::user()->is_super == "yes" && Auth::user()->is_admin == "no"){
                           
                return $next($request);
                //return redirect() -> route('super.home');//->with('success', "Anda Login Sebagai SUPER ADMIN");
                
            } else {

                abort(403);
            }

        }
        
    }
}

