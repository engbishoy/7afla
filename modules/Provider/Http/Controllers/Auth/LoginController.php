<?php

namespace Modules\Provider\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Validation\ValidationException;
use Modules\Provider\Http\Requests\Auth\ProviderLoginRequest;

class LoginController extends Controller
{
  
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('provider::auth.login');
    }

    public function login(ProviderLoginRequest $request){
        
        if( $auth=Auth::guard('provider')->attempt(['email'=> $request->email, 'password' => $request->password] )){
            return redirect()->intended('/provider/dashboard');
        }else{
            throw ValidationException::withMessages([
                'auth_failed' => __('auth.failed'),
            ]);
        
        }


    }

    /**
     * logout an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::guard('provider')->logout();

        return redirect('/');
    }
}
