<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Throwable $th) {
            if ($th instanceof ConnectException) {
                return redirect()->back()->with('error', 'ada yang salah dengan jaringan anda!');
            }
            return redirect('/login');
        }

        $finduser = User::where('google_id', $user->getId())->first();
        $findemailuser = User::where('email', $user->getEmail());
        if ($finduser) {
            Auth::login($finduser);
            if (Auth::user()->role_id == 1) {
                return redirect()->intended('dashboard1');
            } else {
                return redirect()->intended('dashboard2');
            }
        } else if ($findemailuser->exists()) {
            $findemailuser = $findemailuser->first();
            if ($findemailuser->google_id == null) {
                $findemailuser->google_id = $user->getId();
                $findemailuser->update();
            }
            return redirect()->intended('dashboard1');
        } else if ($finduser == null) {
            $newuser = new User();
            $newuser->name = $user->getName();
            $newuser->email = $user->getEmail();
            $newuser->google_id = $user->getId();
            $newuser->password = ('1234567');
            $newuser->save();

            $finduser = User::where('google_id', $user->getId())->first();
            Auth::login($finduser);

            return redirect()->intended('dashboard1');
        }
    }
}