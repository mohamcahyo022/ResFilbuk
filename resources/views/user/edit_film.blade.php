@extends('root_dash')
@section('isi')
{{-- @dd($genre) --}}
<div class="container-fluid py-4">
    <div class="card">
      <form action="/proses-edit-film/{{$film->id}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Edit Resensi Film</p>
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Edit</button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                {{-- <input name="id_blog" type="hidden" value=""> --}}
                <label for="example-text-input" class="form-control-label">Judul Film</label>
                <input class="form-control" name="judul" type="text" value="{{old('judul', $film->judul)}}" required>
                <input class="form-control" name="penulis" type="hidden" value="{{old('penulis', $film->penulis)}}" required>
                {{-- <input name="penulis" class="@error('penulis') is-invalid @enderror" type="hidden" value="{{old('penulis')}}"> --}}
                {{-- @error('penulis')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror --}}
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
                  <input class="form-control" name="trailer" type="text" value="{{old('trailer', $film->trailer)}}" required>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">Genre Film</label>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="Action" {{in_array('Action', $genre) ? 'checked' : ''}}>
                    <label class="form-check-label" for="genre_action">Action</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="Comedy" {{in_array('Comedy', $genre) ? 'checked' : ''}}>
                    <label class="form-check-label" for="genre_comedy">Comedy</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="Drama" {{in_array('Drama', $genre) ? 'checked' : ''}}>
                    <label class="form-check-label" for="genre_drama">Drama</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="Adventure" {{in_array('Adventure', $genre) ? 'checked' : ''}}>
                    <label class="form-check-label" for="genre_adventure">Adventure</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="Horor" {{in_array('Horor', $genre) ? 'checked' : ''}}>
                    <label class="form-check-label" for="genre_horor">Horor</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="since fiction" {{in_array('since fiction', $genre) ? 'checked' : ''}}>
                    <label class="form-check-label" for="genre_since_fiction">Since Fiction</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="Thriller" {{in_array('Thriller', $genre) ? 'checked' : ''}}>
                    <label class="form-check-label" for="genre_thriller">Thriller</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genre[]" value="animasi" {{in_array('animasi', $genre) ? 'checked' : ''}}>
                    <label class="form-check-label" for="genre_animasi">Animasi</label>
                  </div>
                </div>
              </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Sutradara</label>
                <input class="form-control" name="sutradara" type="text" value="{{old('sutradara', $film->sutradara)}}" required>
              </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Durasi (menit)</label>
                  <input class="form-control" name="durasi" type="number" value="{{old('durasi', $film->durasi)}}" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Tahun Rilis</label>
                  <input class="form-control" name="rilis" type="number" min="1980" max="2025" value="{{old('rilis', $film->rilis)}}" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Pemain/Aktor</label>
                  <input class="form-control" name="aktor" type="text" value="{{old('aktor', $film->aktor)}}" required>
                </div>
              </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Orientasi</label>
                  <input id="orientasi" type="hidden" name="orientasi" value="{{old('orientasi', $film->orientasi)}}">
                  <trix-editor input="orientasi"></trix-editor>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Sinopsis</label>
                  <input id="sinopsis" type="hidden" name="sinopsis" value="{{old('sinopsis', $film->sinopsis)}}">
                  <trix-editor input="sinopsis"></trix-editor>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Analisis</label>
                  <input id="analisis" type="hidden" name="analisis" value="{{old('analisis', $film->analisis)}}">
                  <trix-editor input="analisis"></trix-editor>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Evaluasi</label>
                  <input id="evaluasi" type="hidden" name="evaluasi" value="{{old('evaluasi', $film->evaluasi)}}">
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
