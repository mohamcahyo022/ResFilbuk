<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Film;
use App\Models\Buku;
use App\Models\Bukustore;
use App\Models\Filmstore;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(){
        return view('home', [
            "bukus" => Buku::all(),
            "films" => Film::all(),
            "title" => "Home",
        ]);
    }

    public function register_view(){
        return view('register',[
            "title" => "Register"
        ]);
    }

    public function register(Request $request){
        // dd($request);
        $validatedData = $request->validate([
            'username'      => 'required',
            'nama_lengkap'  => 'required',
            'email'         => 'required',
            'password'      => 'required'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        //redirect to index
        return redirect()->route('login')->with(['Daftarberhasil' => 'Berhasil Register Silahkan Melakukan Login...']);

    }

    public function login_view(){
        return view('login',[
            "title" => "Login"
        ]);
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            session(['nama' => $user->username]);
            session(['email' => $user->email]);

            if($user->username !== 'admin'){
                return redirect()->intended('/');
            }
            return redirect()->intended('/admin');
        }

        return back()->with('loginSalah', 'Username atau Password Salah!');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        session()->forget('nama');
        session()->forget('email');

        return redirect('/');
    }

    public function admin_view(){
        return view('admin.dashboard', [
            'user' => User::where('role', '!=', 'admin')->count(),
            'resensi_film' => Film::count(),
            'resensi_buku' => Buku::count(),
            'buku' => Bukustore::count(),
            'film' => Filmstore::count(),
        ]);
    }

    public function kelola_user(){
        return view('admin.tabel_user', [
            "users" => User::where('role', '!=', 'admin')->get(),
            "no" => 1
        ]);
    }

    public function hapus_user(User $id){
        User::destroy($id->id);
        return redirect()->route('kelola-user')->with('hapusPost', 'Berhasil Hapus User');
    }

    public function user_view(){
        $user = Auth::user();
        $film = DB::table('films')->where('penulis', $user->username)->count();
        $buku = DB::table('bukus')->where('penulis', $user->username)->count();
        return view('user.dashboard', [
            'resensi_film' => $film,
            'resensi_buku' => $buku,
        ]);
    }
}
