<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailVerifyRequest;
use App\Mail\SingInMailable;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\CssSelector\Node\FunctionNode;

class VerifyController extends Controller
{

    public static function generarCodigoVerificacion()
    {
        $num1 = rand(100, 999);
        $num2 = rand(100, 999);
        $num3 = rand(100, 999);

        return $num1 . "-" . $num2 . "-" . $num3;
    }

    public function sendEmailVerify()
    {
        $verifyCode = VerifyController::generarCodigoVerificacion();
        session(['verifyCode' => $verifyCode]);

        if (session()->has('email')) {
            $email = session('email');
            Mail::to($email)->send(new SingInMailable($verifyCode));
        }
        return view('verify.emailVerify');
    }


    public function emailVerify(EmailVerifyRequest $request)
    {
        if (session('verifyCode') == $request->code) {
            session()->forget('verifyCode');
            return redirect()->route('user.add');
        } else {
            return redirect()->back()->withInput()->withErrors(['code' => 'the verification code does not match']);
        }
    }
}
