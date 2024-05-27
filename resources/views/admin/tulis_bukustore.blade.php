@extends('root_dash_admin')
@section('isi')
<div class="container-fluid py-4">
    <div class="card">
      <form action="/buat-buku-store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Tulis Buku</p>
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Post</button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                {{-- <input name="id_blog" type="hidden" value=""> --}}
                <label for="example-text-input" class="form-control-label">Judul Buku</label>
                <input class="form-control" name="judul" type="text" value="" required>
                @error('penulis')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Cover Buku</label>
                  <input class="form-control" type="file" name="cover" accept="image/*" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">Genre Buku</label>
                  <div class="form-check">
                    <input class="form-check-input" id="genre_Novel" type="checkbox" name="genre[]" value="Novel">
                    <label class="form-check-label" for="genre_Novel">Novel</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" id="genre_Komik" type="checkbox" name="genre[]" value="Komik">
                    <label class="form-check-label" for="genre_Komik">Komik</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="genre_Ensiklopedia" name="genre[]" value="Ensiklopedia">
                    <label class="form-check-label" for="genre_Ensiklopedia">Ensiklopedia</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="genre_Dongeng" name="genre[]" value="Dongeng">
                    <label class="form-check-label" for="genre_Dongeng">Dongeng</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="genre_Kamus" name="genre[]" value="Kamus">
                    <label class="form-check-label" for="genre_Kamus">Kamus</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="genre_Majalah" name="genre[]" value="Majalah">
                    <label class="form-check-label" for="genre_Majalah">Majalah</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="genre_Panduan" name="genre[]" value="Panduan">
                    <label class="form-check-label" for="genre_Panduan">Panduan</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="genre_Puisi/Pantun" name="genre[]" value="Puisi/Pantun">
                    <label class="form-check-label" for="genre_Puisi/Pantun">Puisi/Pantun</label>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                  <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Tahun Terbit</label>
                      <input class="form-control" name="rilis" type="number" min="1980" max="2025" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Deskripsi</label>
                        <input id="deskripsi" type="hidden" name="deskripsi">
                        <trix-editor input="deskripsi"></trix-editor>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">E-Book (opsional)</label>
                      <input class="form-control" type="file" name="ebook" accept="" >
                    </div>
                  </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Link Ipusnas (opsional)</label>
                        <input class="form-control" name="link_1" type="text" value="" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Link Open Library(opsional)</label>
                        <input class="form-control" name="link_2" type="text" value="" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Link Shopee (opsional)</label>
                        <input class="form-control" name="link_sope" type="text" value="" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Link Tokopedia (opsional)</label>
                        <input class="form-control" name="link_tokped" type="text" value="" >
                    </div>
                </div>
          </div>
      </form>
    </div>
  </div>
  <script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
  </script>
@endsection
