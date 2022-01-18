<?php
  
namespace App\Http\Middleware;
  
use Closure;
   
class IsUser
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
        if (auth()->user()->is_super === null && auth()->user()->is_admin === null){
            return redirect('/super/home')->with('success',"Anda Tidak Punya Akses Sebagai USER biasa");
            return $next($request);
        } else if (auth()->user()->is_super == "yes"){
            return redirect('/super/home')->with('success',"Anda Tidak Punya Akses Sebagai USER biasa");
            return $next($request);
        } else if (auth()->user()->is_admin == "yes"){
            return redirect('/super/home')->with('success',"Anda Tidak Punya Akses Sebagai USER biasa");
            
        } else {
            return $next($request);
        }

        // if(auth()->check()){
        //     return $next($request);
        // }
    }
}