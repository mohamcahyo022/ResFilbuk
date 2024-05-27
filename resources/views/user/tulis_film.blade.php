@extends('root_dash')
@section('isi')
<div class="container-fluid py-4">
    <div class="card">
      <form action="/buat-film" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Tulis Resensi Film</p>
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Post</button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                {{-- <input name="id_blog" type="hidden" value=""> --}}
                <label for="example-text-input" class="form-control-label">Judul Film</label>
                <input class="form-control @error('judul') is-invalid @enderror" name="judul" type="text" value="" required>
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <input name="penulis" type="hidden" value="{{session('nama')}}">
              </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Poster Film</label>
                  <input class="form-control" type="file" name="poster" accept="image/*">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Link Trailer (youtube)</label>
                  <input class="form-control" name="trailer" type="text" value="" required>
                </div>
              </div>
              {{-- <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Sutradara</label>
                  <select class="form-control" name="sutradara" required>
                    <option value="">Pilih Genere Film</option>
                    <option value="Anime">Anime</option>
                    <option value="Action">Action</option>
                    <option value="Petualangan">Petualangan</option>
                    <!-- Tambahkan opsi lainnya jika diperlukan -->
                  </select>
                </div>
              </div> --}}
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">Genre Film</label>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="Action">
                    <label class="form-check-label" for="genre_action">Action</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="Comedy">
                    <label class="form-check-label" for="genre_comedy">Comedy</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="Drama">
                    <label class="form-check-label" for="genre_drama">Drama</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="Adventure">
                    <label class="form-check-label" for="genre_adventure">Adventure</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="Horor">
                    <label class="form-check-label" for="genre_horor">Horor</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="since fiction">
                    <label class="form-check-label" for="genre_since_fiction">Since Fiction</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="Thriller">
                    <label class="form-check-label" for="genre_thriller">Thriller</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="animasi">
                    <label class="form-check-label" for="genre_animasi">Animasi</label>
                  </div>
                </div>
              </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Sutradara</label>
                <input class="form-control @error('sutradara') is-invalid @enderror" name="sutradara" type="text" value="" required>
                @error('sutradara')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Durasi (menit)</label>
                  <input class="form-control" name="durasi" type="number" value="" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Tahun Rilis</label>
                  <input class="form-control" name="rilis" type="number" min="1980" max="2025" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Pemain/Aktor</label>
                  <input class="form-control @error('aktor') is-invalid @enderror" name="aktor" type="text" value="" required>
                  @error('aktor')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
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
