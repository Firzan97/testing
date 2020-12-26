<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class adminlogincontroller extends Controller
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
    protected $redirectTo = RouteServiceProvider::view;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request) 
    {
    
    /// this method is overriden form Illuminate\Foundation\Auth\AuthenticatesUsers; class
    $field = filter_var($request->get($this->admin_code()), FILTER_VALIDATE_EMAIL)
        ? $this->admin_code()
        : 'admin_code';

    return [
        $field => $request->get($this->admin_code()),
        'admin_password' => $request->admin_password,
    ];
    }


    public function login(Request $request)
    {   
        $input = $request->all();
  
        $this->validate($request, [
            'admin_code' => 'required',
            'admin_password' => 'required',
        ]);
  
        $fieldType = filter_var($request->admin_code, FILTER_VALIDATE_EMAIL) ? 'email' : 'admin_code';
        if(auth()->attempt(array($fieldType => $input['admin_code'], 'admin_password' => $input['admin_password'])))
        {
            return redirect()->route('view');
        }else{
            return redirect()->route('login')
                ->with('error','Code And Password Are Wrong.');
        }
          
    }

    public function admin_code()
    {
    return 'admin_code';
    }
}
