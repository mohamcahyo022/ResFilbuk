<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bukustore;
use Illuminate\Support\Facades\Storage;

class BukuStoreController extends Controller
{
    //
    public function lihat_buku_store(){
        return view('admin.tulis_bukustore');
    }

    public function buat_buku_store(Request $request){
        $request->validate([
            'judul'       => 'required',
            'cover'       => 'required',
            'genre'       => 'required',
            'genre.*'     => 'required',
            'rilis'       => 'required',
            'deskripsi'   => 'required',
            'ebook'       => '',
            'link_1'      => '',
            'link_2'      => '',
            'link_sope'   => '',
            'link_tokped' => '',
        ]);

        $image = $request->file('cover');
        $image->storeAs('public/cover', $image->hashName());

        $ebookFileName = null;

        if($request->hasFile('ebook')){
            $ebook = $request->file('ebook');

            $ebookFileName = $ebook->hashName();

            $ebook->storeAs('public/ebook', $ebookFileName);
        }

        $genre = implode(',', $request->input('genre'));

        Bukustore::create([
            'judul'         => $request->judul,
            'cover'         => $image->hashName(),
            'genre'         => $genre,
            'rilis'         => $request->rilis,
            'deskripsi'     => $request->deskripsi,
            'ebook'         => $ebookFileName,
            'link_1'        => $request->link_1,
            'link_2'        => $request->link_2,
            'link_sope'     => $request->link_sope,
            'link_tokped'   => $request->link_tokped,
        ]);

        return redirect()->route('kelola-perpus')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function kelola_perpus(){
        return view('admin.tabel_bukustore', [
            "bukus" => Bukustore::all(),
            "no" => 1
        ]);
    }

    public function hapus_perpus(Bukustore $id){
        if($id->cover){
            Storage::delete($id->cover);
        }

        if($id->ebook){
            Storage::delete($id->ebook);
        }

        Bukustore::destroy($id->id);
        return redirect()->route('kelola-perpus')->with('hapusPost', 'Berhasil Hapus Postingan');
    }

    public function perpus_all(){
        return view('daftar_bukustore', [
            "bukus" => Bukustore::all(),
            "title" => 'Daftar Rekomendasi Buku',
        ]);
    }

    public function buku_detail($id){
        $buku = Bukustore::findOrFail($id);
        return view('detail_bukustore', [
            "buku" => $buku,
            "title" => "Detail-Buku"
        ]);
    }

}
