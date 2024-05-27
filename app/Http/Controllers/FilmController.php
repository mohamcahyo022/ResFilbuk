<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    public function film_all(){
        return view('daftar_film', [
            "films" => Film::all(),
            "title" => 'Daftar Film',
        ]);
    }

    public function film_detail($id){
        $film = Film::findOrFail($id);
        return view('detail_film', [
            "film" => $film,
            "title" => "Detail-Film"
        ]);
    }


    public function tabelFilmUsers(){
        // $user = Auth::user();
        // $films = DB::table('postingans')->where('penulis', $user->name)->get();
        return view('user.tabel_film',[
            "title" => "Daftar Postingan",
            "no" => 1,
            "films" => Film::all()

        ]);
    }

    public function hapusFilm(Film $id){
        if($id->poster){
            Storage::delete($id->poster);
        }
        Film::destroy($id->id);
        return redirect('/tabelFilmUsers')->with('hapusPost', 'Berhasil Hapus Postingan');
    }

    public function buat_film(Request $request){
        // dd($request);
        $request->validate([
            'judul'         => 'required',
            'penulis'       => 'required',
            'poster'        => 'required|image',
            'trailer'       => 'required',
            'genre'         => 'required',
            'genre.*'       => 'required',
            'sutradara'     => 'required|regex:/^[a-zA-Z\s,]+$/',
            'durasi'        => 'required',
            'rilis'         => 'required',
            'aktor'         => 'required|regex:/^[a-zA-Z\s,]+$/',
            'orientasi'     => 'required',
            'sinopsis'      => 'required',
            'analisis'      => 'required',
            'evaluasi'      => 'required'
        ]);

        // Upload gambar
        $image = $request->file('poster');
        $image->storeAs('public/poster', $image->hashName());

        // Mengubah array genre menjadi string
        $genre = implode(',', $request->input('genre'));

        // Membuat film
        try{
        Film::create([
            'judul'         => $request->judul,
            'penulis'       => $request->penulis,
            'poster'        => $image->hashName(),
            'trailer'       => $request->trailer,
            'genre'         => $genre,
            'sutradara'     => $request->sutradara,
            'durasi'        => $request->durasi,
            'rilis'         => $request->rilis,
            'aktor'         => $request->aktor,
            'orientasi'     => $request->orientasi,
            'sinopsis'      => $request->sinopsis,
            'analisis'      => $request->analisis,
            'evaluasi'      => $request->evaluasi
        ]);

        // Redirect ke index
        return redirect()->route('kelola-film')->with(['success' => 'Data Berhasil Disimpan!']);
        }catch (\Exception $e) {
            // Tangani kesalahan, misalnya log atau tampilkan pesan kesalahan
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data.']);
        }
    }

    public function lihat_film(){
        return view('user.tulis_film');
    }

    public function kelola_film(){
        $user = Auth::user();
        $films = DB::table('films')->where('penulis', $user->username)->get();
        return view('user.tabel_film', [
            "films" => $films,
            "no" => 1
        ]);
    }

    public function kelola_film_admin(){
        return view('admin.tabel_film', [
            "films" => Film::all(),
            "no" => 1
        ]);
    }

    public function edit_film(Film $id){
        // $film = Film::find($id);
        $genre = explode(',', $id->genre);
        return view('user.edit_film',[
            "title" => "Edit-Resensi-Film",
            "film" => $id,
            "genre" => $genre
        ]);
    }

    public function proses_edit_film(Request $request, Film $id){
        $request->validate([
            'judul'         => 'required',
            'penulis'       => 'required',
            'poster'        => 'image',
            'trailer'       => 'required',
            'genre'         => 'required',
            'genre.*'       => 'required',
            'sutradara'     => 'required',
            'durasi'        => 'required',
            'rilis'         => 'required',
            'aktor'         => 'required',
            'orientasi'     => 'required',
            'sinopsis'      => 'required',
            'analisis'      => 'required',
            'evaluasi'      => 'required'
        ]);

        // Mengubah array genre menjadi string
        $genre = implode(',', $request->input('genre'));

        $filmData = [
            'judul'         => $request->judul,
            'penulis'       => $request->penulis,
            'trailer'       => $request->trailer,
            'genre'         => $genre,
            'sutradara'     => $request->sutradara,
            'durasi'        => $request->durasi,
            'rilis'         => $request->rilis,
            'aktor'         => $request->aktor,
            'orientasi'     => $request->orientasi,
            'sinopsis'      => $request->sinopsis,
            'analisis'      => $request->analisis,
            'evaluasi'      => $request->evaluasi
        ];

        if($request->hasFile('poster')){
            $image = $request->file('poster');
            $imageName = $image->hashName();

            if($id->poster) {
                Storage::delete('public/poster/' . $id->poster);
            }

            $image->storeAs('public/poster', $imageName);
            $filmData['poster'] = $imageName;
        }

        $id->update($filmData);

        return redirect()->route('kelola-film')->with(['success' => 'Data Berhasil Diedit!']);
    }

    public function hapus_film(Film $id){
        if($id->poster){
            Storage::delete($id->poster);
        }
        Film::destroy($id->id);
        return redirect()->route('kelola-film')->with('hapusPost', 'Berhasil Hapus Postingan');
    }

    public function hapus_film_admin(Film $id){
        if($id->poster){
            Storage::delete($id->poster);
        }
        Film::destroy($id->id);
        return redirect()->route('kelola-film-admin')->with('hapusPost', 'Berhasil Hapus Postingan');
    }

}
