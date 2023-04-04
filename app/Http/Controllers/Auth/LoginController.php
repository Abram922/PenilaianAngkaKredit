<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\userjabatan;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
| redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $input = $request->all();

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            if(auth()->user()->is_admin == 1){
                return redirect()-> route('admin.home');
            }
            else{  
                $userjabatan = DB::table('userjabatans')
                ->where('id_user', auth()->user()->id)
                ->first();

                if($userjabatan) {                   
                    return redirect()->route('user.home');
                } else {
                    return redirect()->route('namasa');
                }
            }
        }else{
            return redirect()->route('login')->with('error', "email atau password tidak tepat");
        }
    }



}
