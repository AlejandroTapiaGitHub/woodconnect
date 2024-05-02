<?php
namespace App\Http\Controllers;

use App\Http\Requests\SingInRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\CssSelector\Node\FunctionNode;

class AuthController extends Controller
{

    public function singIn(SingInRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return view('home');
        } else {
            // Autenticación fallida
            return redirect()->back()->withInput()->withErrors(['password' => 'Las credenciales proporcionadas son incorrectas.']);
        }
    }
}