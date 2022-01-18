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
        if(auth()->user()->is_super == 1){
            return $next($request);
        } else if(auth()->user()->is_admin== 1){
            return redirect('/admin/home');
        }
   
        return redirect('/')->with('error',"You don't have admin access.");
    }
}