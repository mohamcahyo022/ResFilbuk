@extends('root_dash_admin')
@section('isi')
<div class="container-fluid py-4">
    <div class="card">
      <form action="/buat-film-store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Tulis Film</p>
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Post</button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                {{-- <input name="id_blog" type="hidden" value=""> --}}
                <label for="example-text-input" class="form-control-label">Judul Film</label>
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
                  <label for="example-text-input" class="form-control-label">Poster Film</label>
                  <input class="form-control" type="file" name="poster" accept="image/*" required>
                </div>
              </div>
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
                        <label for="example-text-input" class="form-control-label">Link Netflix (opsional)</label>
                        <input class="form-control" name="link_1" type="text" value="" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Link Video (opsional)</label>
                        <input class="form-control" name="link_2" type="text" value="" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Link Klik Film (opsional)</label>
                        <input class="form-control" name="link_3" type="text" value="" >
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
