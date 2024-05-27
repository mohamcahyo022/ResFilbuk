@extends('root_dash')
@section('isi')
{{-- @dd($jenis) --}}
<div class="container-fluid py-4">
    <div class="card">
      <form action="/proses-edit-buku/{{$buku->id}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Edit Resensi Buku</p>
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Edit</button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                {{-- <input name="id_blog" type="hidden" value=""> --}}
                <label for="example-text-input" class="form-control-label">Judul Buku</label>
                <input class="form-control" name="judul" type="text" value="{{old('judul', $buku->judul)}}" required>
                <input class="form-control" name="penulis" type="hidden" value="{{old('penulis', $buku->penulis)}}" required>


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
                  <label for="example-text-input" class="form-control-label">Cover Buku</label>
                  <input class="form-control" type="file" name="cover" accept="image/*">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">Jenis Buku</label>
                  <div class="form-check">
                    <input class="form-check-input" id="jenis_Novel" type="checkbox" name="jenis[]" value="Novel" {{in_array('Novel', $jenis) ? 'checked' : ''}}>
                    <label class="form-check-label" for="jenis_Novel">Novel</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" id="jenis_Komik" type="checkbox" name="jenis[]" value="Komik" {{in_array('Komik', $jenis) ? 'checked' : ''}}>
                    <label class="form-check-label" for="jenis_Komik">Komik</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="jenis_Ensiklopedia" name="jenis[]" value="Ensiklopedia" {{in_array('Ensiklopedia', $jenis) ? 'checked' : ''}}>
                    <label class="form-check-label" for="jenis_Ensiklopedia">Ensiklopedia</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="jenis_Dongeng" name="jenis[]" value="Dongeng" {{in_array('Dongeng', $jenis) ? 'checked' : ''}}>
                    <label class="form-check-label" for="jenis_Dongeng">Dongeng</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="jenis_Kamus" name="jenis[]" value="Kamus" {{in_array('Kamus', $jenis) ? 'checked' : ''}}>
                    <label class="form-check-label" for="jenis_Kamus">Kamus</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="jenis_Majalah" name="jenis[]" value="Majalah" {{in_array('Majalah', $jenis) ? 'checked' : ''}}>
                    <label class="form-check-label" for="jenis_Majalah">Majalah</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="jenis_Panduan" name="jenis[]" value="Panduan" {{in_array('Panduan', $jenis) ? 'checked' : ''}}>
                    <label class="form-check-label" for="jenis_Panduan">Panduan</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="jenis_Puisi/Pantun" name="jenis[]" value="Puisi/Pantun" {{in_array('Puisi/Pantun', $jenis) ? 'checked' : ''}}>
                    <label class="form-check-label" for="jenis_Puisi/Pantun">Puisi/Pantun</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Penulis</label>
                  <input class="form-control" name="penulis_buku" type="text" value="{{old('penulis_buku', $buku->penulis_buku)}}" required>
                </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Penerbit</label>
                    <input class="form-control" name="penerbit" type="text" value="{{old('penerbit', $buku->penerbit)}}" required>
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Tahun Terbit</label>
                        <input class="form-control" name="rilis" type="number" min="1980" max="2025" value="{{old('rilis', $buku->rilis)}}" required>
                      </div>
                  </div>
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Halaman</label>
                      <input class="form-control" name="halaman" type="number" value="{{old('halaman', $buku->halaman)}}" required>
                  </div>
              </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Orientasi</label>
                  <input id="orientasi" type="hidden" name="orientasi" value="{{old('orientasi', $buku->orientasi)}}">
                  <trix-editor input="orientasi"></trix-editor>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Sinopsis</label>
                  <input id="sinopsis" type="hidden" name="sinopsis" value="{{old('sinopsis', $buku->sinopsis)}}">
                  <trix-editor input="sinopsis"></trix-editor>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Analisis</label>
                  <input id="analisis" type="hidden" name="analisis" value="{{old('analisis', $buku->analisis)}}">
                  <trix-editor input="analisis"></trix-editor>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Evaluasi</label>
                  <input id="evaluasi" type="hidden" name="evaluasi" value="{{old('evaluasi', $buku->evaluasi)}}">
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
