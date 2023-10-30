<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getFormLogin()
    {
        return view('Auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();
 
            return redirect()->route('customers.index');
        }

        return redirect()->back()->with([
            'fail' => 'Sai password hoac email'
        ]);
    }

    public function getFormRegister()
    {
        return view('Auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $params = $request->validated();
        $params['password'] = bcrypt($params['password']);
        $user = User::create($params);

        if ($user) {
            return redirect()->route('get_form_login');
        }

        return redirect()->back()->with([
            'fail' => 'Da tao user that bai'
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('get_form_login');
    }
}
