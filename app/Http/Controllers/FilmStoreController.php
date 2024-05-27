<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filmstore;
use Illuminate\Support\Facades\Storage;

class FilmStoreController extends Controller
{
    public function lihat_film_store(){
        return view('admin.tulis_filmstore');
    }

    public function buat_film_store(Request $request){
        // dd($request);
        $request->validate([
            'judul'       => 'required',
            'poster'      => 'required',
            'genre'       => 'required',
            'genre.*'     => 'required',
            'rilis'       => 'required',
            'deskripsi'   => 'required',
            'link_1'      => '',
            'link_2'      => '',
            'link_3'      => '',
        ]);

        $image = $request->file('poster');
        $image->storeAs('public/poster', $image->hashName());

        $genre = implode(',', $request->input('genre'));

        Filmstore::create([
            'judul'         => $request->judul,
            'poster'        => $image->hashName(),
            'genre'         => $genre,
            'rilis'         => $request->rilis,
            'deskripsi'     => $request->deskripsi,
            'link_1'        => $request->link_1,
            'link_2'        => $request->link_2,
            'link_3'        => $request->link_3,
        ]);

        return redirect()->route('kelola-movie')->with(['success' => 'Data Berhasil Disimpan!']);
    }


     public function kelola_movie(){
        return view('admin.tabel_filmstore', [
            "films" => Filmstore::all(),
            "no" => 1
        ]);
    }

    public function hapus_movie(Filmstore $id){
        if($id->poster){
            Storage::delete($id->poster);
        }

        Filmstore::destroy($id->id);
        return redirect()->route('kelola-movie')->with('hapusPost', 'Berhasil Hapus Postingan');
    }

    public function movie_all(){
        return view('daftar_filmstore', [
            "films" => Filmstore::all(),
            "title" => 'Daftar Rekomendasi Film',
        ]);
    }

    public function movie_detail($id){
        $film = Filmstore::findOrFail($id);
        return view('detail_filmstore', [
            "film" => $film,
            "title" => "Detail-Movie"
        ]);
    }
}
