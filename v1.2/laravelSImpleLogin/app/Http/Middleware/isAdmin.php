<?php
  
namespace App\Http\Middleware;
  
use Closure;
   
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
        if(auth()->user()->is_admin == "yes"){
            return $next($request);
        } else if (auth()->user()->is_super == "yes"){
            return redirect('/super/home')->with('success',"Anda Tidak Punya Akses Sebagai ADMIN");
   
        } else {
            return redirect('/')->with('success',"Anda Tidak Punya Akses Sebagai ADMIN");
        }
    }
}