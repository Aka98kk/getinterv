<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


class LoginController extends Controller
{
    public function halaman()
    {
        return view('index');
    }

    public function halaman2()
    {
        return view('index2');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function dashboard1()
    {
        if (auth()->check()) {
            return view('Dashboard.dashboard');
        } else {
            return redirect('/logindiisi');
        }
    }

    public function dashboard2()
    {
        if (auth()->check()) {
            return view('Dashboard.dashboard2');
        } else {
            return redirect('/loginlorem');
        }
    }

    public function diisi()
    {
        return view('auth.logindiisi');
    }

    public function registerform()
    {
        return view('auth.register');
    }


    public function register(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            // 'password' => 'required|min:6|confirmed',
        ];

        $customMessages = [
            'name.required' => 'Nama belum diisi!',
            'email.required' => 'Email belum diisi!',
            'email.email' => 'Format email salah!',
            'email.unique' => 'Email sudah terdaftar!',
            'password.required' => 'Password belum diisi!',
            'password.min' => 'Password minimal 6 karakter!',
            // 'password.confirmed' => 'Konfirmasi password tidak cocok!',
        ];


        $this->validate($request, $rules, $customMessages);

        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        if (
            $request->password !== null
        ) {
            $user->password = Hash::make($request->password_confirm);
        }

        $user->save();

        return redirect()->route('logindiisi')->with('messageSuccess', 'Berhasil daftar');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard1');
        }

        return back()->with('fail', 'Login gagal!');
    }
    public function lorem()
    {
        return view('auth.loginlorem');
    }

    public function daftarform()
    {
        return view('auth.daftar');
    }

    public function daftar(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            // 'password' => 'required|min:6|confirmed',
        ];

        $customMessages = [
            'name.required' => 'Nama belum diisi!',
            'email.required' => 'Email belum diisi!',
            'email.email' => 'Format email salah!',
            'email.unique' => 'Email sudah terdaftar!',
            'password.required' => 'Password belum diisi!',
            'password.min' => 'Password minimal 6 karakter!',
            // 'password.confirmed' => 'Konfirmasi password tidak cocok!',
        ];


        $this->validate($request, $rules, $customMessages);

        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        if (
            $request->password !== null
        ) {
            $user->password = Hash::make($request->password_confirm);
        }

        $user->save();

        return redirect()->route('loginlorem')->with('messageSuccess', 'Berhasil daftar');
    }

    public function auth2(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard2');
        }

        return back()->with('fail', 'Login gagal!');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flush();

        return redirect('/logindiisi');
    }

    public function landingPage()
    {
        if (Auth::check()) {
            // Pengguna masih dalam keadaan login
            // Tampilkan halaman landing page
        } else {
            // Pengguna telah logout, redirect ke halaman login atau halaman lain
            return redirect()->route('/logindiisi'); // Ganti dengan route yang sesuai
        }
    }


    public function show()
    {
        // Logika untuk menampilkan data pertanyaan3 dengan ID tertentu
    }
}