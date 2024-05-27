<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Storage;
use App\Models\Film;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BukuController extends Controller
{
    public function buku_all(){
        return view('daftar_buku', [
            "bukus" => Buku::all(),
            "title" => 'Daftar Buku',
        ]);
    }

    public function buku_detail($id){
        $buku = Buku::findOrFail($id);
        return view('detail_buku', [
            "buku" => $buku,
            "title" => "Detail Buku"
        ]);
    }

    public function lihat_buku(){
        return view('user.tulis_buku');
    }

    public function buat_buku(Request $request){
        $request->validate([
            'judul'         => 'required',
            'penulis'       => 'required',
            'cover'         => 'required|image',
            'jenis'         => 'required',
            'jenis.*'       => 'required',
            'penulis_buku'  => 'required',
            'penerbit'      => 'required',
            'rilis'         => 'required',
            'halaman'       => 'required',
            'orientasi'     => 'required',
            'sinopsis'      => 'required',
            'analisis'      => 'required',
            'evaluasi'      => 'required'
        ]);

        // Upload gambar
        $image = $request->file('cover');
        $image->storeAs('public/cover', $image->hashName());

        $jenis = implode(',', $request->input('jenis'));

        try{
        Buku::create([
            'judul'         => $request->judul,
            'penulis'       => $request->penulis,
            'cover'         => $image->hashName(),
            'jenis'         => $jenis,
            'penulis_buku'  => $request->penulis_buku,
            'penerbit'      => $request->penerbit,
            'rilis'         => $request->rilis,
            'halaman'       => $request->halaman,
            'orientasi'     => $request->orientasi,
            'sinopsis'      => $request->sinopsis,
            'analisis'      => $request->analisis,
            'evaluasi'      => $request->evaluasi
        ]);

        return redirect()->route('kelola-buku')->with(['success' => 'Data Berhasil Disimpan!']);
    }catch (\Exception $e) {
        return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data.']);
    }
    }

    public function kelola_buku(){
        $user = Auth::user();
        $bukus = DB::table('bukus')->where('penulis', $user->username)->get();
        return view('user.tabel_buku', [
            "bukus" => $bukus,
            "no" => 1
        ]);
    }

    public function proses_edit_buku(Request $request, Buku $id){
        // dd($request);
        $request->validate([
            'judul'         => 'required',
            'penulis'       => 'required',
            'cover'         => 'image',
            'jenis'         => 'required',
            'jenis.*'       => 'required',
            'penulis_buku'  => 'required|regex:/^[a-zA-Z\s,]+$/',
            'penerbit'      => 'required',
            'rilis'         => 'required',
            'halaman'       => 'required',
            'orientasi'     => 'required',
            'sinopsis'      => 'required',
            'analisis'      => 'required',
            'evaluasi'      => 'required'
        ]);

        // Mengubah array genre menjadi string
        $jenis = implode(',', $request->input('jenis'));

        $bukuData = [
            'judul'         => $request->judul,
            'penulis'       => $request->penulis,
            'jenis'         => $jenis,
            'penulis_buku'  => $request->penulis_buku,
            'penerbit'      => $request->penerbit,
            'rilis'         => $request->rilis,
            'halaman'       => $request->halaman,
            'orientasi'     => $request->orientasi,
            'sinopsis'      => $request->sinopsis,
            'analisis'      => $request->analisis,
            'evaluasi'      => $request->evaluasi
        ];

        if($request->hasFile('cover')){
            $image = $request->file('cover');
            $imageName = $image->hashName();

            if($id->cover) {
                Storage::delete('public/cover/' . $id->cover);
            }

            $image->storeAs('public/cover', $imageName);
            $bukuData['cover'] = $imageName;
        }

        $id->update($bukuData);

        return redirect()->route('kelola-buku')->with(['success' => 'Data Berhasil Diedit!']);
    }

    public function hapus_buku(Buku $id){
        if($id->cover){
            Storage::delete($id->cover);
        }
        Buku::destroy($id->id);
        return redirect()->route('kelola-buku')->with('hapusPost', 'Berhasil Hapus Postingan');
    }
    public function edit_buku(Buku $id){
        $jenis = explode(',', $id->jenis);
        return view('user.edit_buku',[
            "title" => "Edit-Resensi-Buku",
            "buku" => $id,
            "jenis" => $jenis
        ]);
    }

    public function kelola_buku_admin(){
        return view('admin.tabel_buku', [
            "bukus" => Buku::all(),
            "no" => 1
        ]);
    }

    public function hapus_buku_admin(Buku $id){
        if($id->cover){
            Storage::delete($id->cover);
        }
        Buku::destroy($id->id);
        return redirect()->route('kelola-buku-admin')->with('hapusPost', 'Berhasil Hapus Postingan');
    }

}
