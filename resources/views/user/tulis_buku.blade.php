@extends('root_dash')
@section('isi')
<div class="container-fluid py-4">
    <div class="card">
      <form action="/buat-buku" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Tulis Resensi Buku</p>
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
                <input class="form-control" name="penulis" type="hidden" value="{{session('nama')}}" required>
                {{-- <input name="penulis" class="@error('penulis') is-invalid @enderror" type="hidden" value="{{old('penulis')}}"> --}}
                {{-- @error('judul')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror --}}
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
                  <label class="form-control-label">Jenis Buku</label>
                  <div class="form-check">
                    <input class="form-check-input" id="genre_Novel" type="checkbox" name="jenis[]" value="Novel">
                    <label class="form-check-label" for="genre_Novel">Novel</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" id="genre_Komik" type="checkbox" name="jenis[]" value="Komik">
                    <label class="form-check-label" for="genre_Komik">Komik</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="genre_Ensiklopedia" name="jenis[]" value="Ensiklopedia">
                    <label class="form-check-label" for="genre_Ensiklopedia">Ensiklopedia</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="genre_Dongeng" name="jenis[]" value="Dongeng">
                    <label class="form-check-label" for="genre_Dongeng">Dongeng</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="genre_Kamus" name="jenis[]" value="Kamus">
                    <label class="form-check-label" for="genre_Kamus">Kamus</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="genre_Majalah" name="jenis[]" value="Majalah">
                    <label class="form-check-label" for="genre_Majalah">Majalah</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="genre_Panduan" name="jenis[]" value="Panduan">
                    <label class="form-check-label" for="genre_Panduan">Panduan</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="genre_Puisi/Pantun" name="jenis[]" value="Puisi/Pantun">
                    <label class="form-check-label" for="genre_Puisi/Pantun">Puisi/Pantun</label>
                  </div>
                </div>
              </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Penulis</label>
                <input class="form-control @error('penulis_buku') is-invalid @enderror" name="penulis_buku" type="text" value="" required>
                @error('penulis_buku')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Penerbit</label>
                  <input class="form-control" name="penerbit" type="text" value="" required>
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
                    <label for="example-text-input" class="form-control-label">Halaman</label>
                    <input class="form-control" name="halaman" type="number" value="" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Orientasi</label>
                  <input id="orientasi" type="hidden" name="orientasi">
                  <trix-editor input="orientasi"></trix-editor>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Sinopsis</label>
                  <input id="sinopsis" type="hidden" name="sinopsis">
                  <trix-editor input="sinopsis"></trix-editor>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Analisis</label>
                  <input id="analisis" type="hidden" name="analisis">
                  <trix-editor input="analisis"></trix-editor>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Evaluasi</label>
                  <input id="evaluasi" type="hidden" name="evaluasi">
                  <trix-editor input="evaluasi"></trix-editor>
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
