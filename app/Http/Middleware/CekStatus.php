<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class CekStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $userget = \App\Models\Account::where('email', $request->email)->get();
        $user = \App\Models\Account::where('email', $request->email)->first();
        if($userget->count() > 0){
            if(Hash::check($request->password, $user->password)){
                if ($user->role_id == 1) {
                    $request->session()->put('loginid', $user->account_id);
                    return redirect('homepage/home');
                } elseif ($user->role_id == 2) {
                    $request->session()->put('loginid', $user->account_id);
                    return redirect('homepage/home');
                }
            } else{
                return back()->with('login', 'Wrong Email/Password. Please Check Again');
            }
        } else {
            return back()->with('login', 'Wrong Email/Password. Please Check Again');
        }
        return $next($request);
    }
}
