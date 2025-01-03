<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function authenticate(): RedirectResponse
    {
        $credentials = request()->only(
            'email',
            'password',
        );

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'message' => 'メールアドレスまたはパスワードが正しくありません。',
        ]);
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/home');
    }
}
