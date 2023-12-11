<?php

namespace App\Http\Controllers;
// namesapce App\Http\Controllers\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //use RedirectsUsers;

    // public function showRegistrationForm()
    // {
    //     return view('auth.register');
    // }

    // public function register(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'token' => Str::random(40), // Tạo một token ngẫu nhiên
    //     ]);

    //     event(new Registered($user));

    //     return $this->registered($request, $user)
    //         ?: redirect($this->redirectPath());
    // }


    // public function login(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|string|email',
    //         'password' => 'required|string',
    //     ]);

    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended($this->redirectPath());
    //     }

    //     return redirect()->back()
    //         ->withInput($request->only('email'))
    //         ->withErrors(['email' => 'Invalid email or password']);
    // }

    // public function logout()
    // {
    //     Auth::logout();

    //     return redirect('/');
    // }

    // // Thêm các phương thức xác nhận email và reset password
    // public function confirmEmail($token)
    // {
    //     $user = User::where('token', $token)->first();

    //     if (!$user) {
    //         return redirect('/login')->with('error', 'Invalid token');
    //     }

    //     // Xác nhận email
    //     $user->email_verified_at = now();
    //     $user->token = null;
    //     $user->save();

    //     return redirect('/login')->with('success', 'Email confirmed successfully');
    // }

    // public function showResetForm($token)
    // {
    //     return view('auth.reset')->with('token', $token);
    // }

    // public function resetPassword(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|string|email',
    //         'password' => 'required|string|min:8|confirmed',
    //         'token' => 'required|string',
    //     ]);

    //     $response = Password::reset(
    //         $request->only('email', 'password', 'password_confirmation', 'token'),
    //         function ($user, $password) {
    //             $user->forceFill([
    //                 'password' => Hash::make($password),
    //                 'remember_token' => Str::random(60),
    //             ])->save();
    //         }
    //     );

    //     if ($response == Password::PASSWORD_RESET) {
    //         return redirect('/login')->with('success', 'Password reset successfully');
    //     } else {
    //         return redirect()->back()
    //             ->withInput($request->only('email'))
    //             ->withErrors(['email' => trans($response)]);
    //     }
    // }

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showLoginForm1()
    {
        return view('auth.register');
    }
    public function showLoginForm2()
    {
        return view('youtube');
    }
}
