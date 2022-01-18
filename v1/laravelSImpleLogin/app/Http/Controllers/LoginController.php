<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\Login\RememberMeExpiration;
use Session;



class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('auth.login');
        }
    }

    public function actionlogin(Request $request)
    {   
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        

        if (Auth::Attempt($data)) {
            //return redirect('home');
            if (auth()->user()->is_admin == 1) {

                return redirect()->route('admin.home');

            } else if (auth()->user()->is_super == 1) {

                return redirect()->route('super.home');

            }else{

                return redirect()->route('home');

            }
        }else{

            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');

        }
    }


    /**
     * Validate if provided parameter is valid email.
     *
     * @param $param
     * @return bool
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */


    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}



// class LoginController extends Controller
// {
//     use RememberMeExpiration;

//     /**
//      * Display login page.
//      * 
//      * @return Renderable
//      */
//     public function show()
//     {
//         return view('auth.login');
//     }

//     /**
//      * Handle account login request
//      * 
//      * @param LoginRequest $request
//      * 
//      * @return \Illuminate\Http\Response
//      */
//     public function login(LoginRequest $request)
//     {
//         $credentials = $request->getCredentials();

//         if(!Auth::validate($credentials)):
//             return redirect()->to('/login')
//                 ->withErrors(trans('auth.failed'));
//         endif;

//         $user = Auth::getProvider()->retrieveByCredentials($credentials);

//         Auth::login($user, $request->get('remember'));

//         if($request->get('remember')):
//             $this->setRememberMeExpiration($user);
//         endif;

//         return $this->authenticated($request, $user);
//     }

//     /**
//      * Handle response after user authenticated
//      * 
//      * @param Request $request
//      * @param Auth $user
//      * 
//      * @return \Illuminate\Http\Response
//      */
//     protected function authenticated(Request $request, $user) 
//     {
//         return redirect()->intended();
//     }
// }
