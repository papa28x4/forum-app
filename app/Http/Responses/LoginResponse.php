<?php 

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
       
        if(auth()->user()->isAdmin()){
            return redirect()->route('admin.index');
        }
        elseif(session()->has('link')){
            return redirect(session()->get('link'));
        }
        return redirect()->intended(config('fortify.home'));
        
    }
}