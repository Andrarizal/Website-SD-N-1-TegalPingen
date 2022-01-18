<?php
  
namespace App\Http\Middleware;
  
use Closure;
   
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
        if(auth()->user()->is_super == "yes"){
            return $next($request);
        } else if(auth()->user()->is_admin== "yes"){
            return redirect('/admin/home')->with('success',"Anda Tidak Punya Akses Sebagai SUPER ADMIN");
        }
   
        return redirect('/')->with('success',"Anda Tidak Punya Akses Sebagai SUPER ADMIN");
    }
}