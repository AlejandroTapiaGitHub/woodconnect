<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\SingInRequest;
use App\Mail\SingInMailable;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\CssSelector\Node\FunctionNode;

class UserController extends Controller
{
    public function showRegister()
    {
        return view('user.register');
    }

    public function validateRegister(RegisterRequest $request)
    {

        session(['nickname' => $request->nickname]);
        session(['email' => $request->email]);
        session(['password' => $request->password]);

        return redirect()->route('verify.email');
    }

    public function add()
    {
        if (session()->has('nickname')) {
            $nickname = session()->pull('nickname');
        }
        if (session()->has('email')) {
            $email = session()->pull('email');
        }
        if (session()->has('password')) {
            $password = Hash::make(session()->pull('password'));
        }

        $user = User::create([
            'nickname' => $nickname,
            'email' => $email,
            'password' => $password,
            'id_rol' => 1
        ]);

        session()->flash('statusRegister', 'Registro completado!');
        return redirect()->route('login');
    }






    public function home()
    {
        return view('home');
    }
}
