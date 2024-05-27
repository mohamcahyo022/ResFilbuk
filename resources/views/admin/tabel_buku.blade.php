@extends('root_dash_admin')
@section('isi')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        {{-- @if (session()->has('berhasilPost'))
            <div class="alert alert-info text-white" role="alert">
                {{ session('berhasilPost') }}
            </div>
        @endif
        @if (session()->has('hapusPost'))
            <div class="alert alert-info text-white" role="alert">
                {{ session('hapusPost') }}
            </div>
        @endif --}}
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Daftar Resensi Buku</h6>
          </div>
              <table id="daftar_postingan" class="table table-striped table-hover align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Penulis</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Penerbit</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                @foreach ($bukus as $buku)
                <tbody>
                  <tr>
                    <td>
                    <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 ms-2 text-sm">{{ $no++ }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="/storage/cover/{{ $buku->cover }}" class="avatar avatar-sm me-3" alt="poster">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $buku->judul }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs text-secondary mb-0">{{ $buku->jenis }}</p>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{ $buku->penulis_buku }}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $buku->penerbit }}</span>
                      </td>
                    <td>
                        <center>
                        <a href="/detail-buku/{{$buku->id}}" class="badge bg-gradient-success border-0">Detail</a>

                      <form action="/hapus-buku-admin/{{ $buku->id }}" method="post" class="d-inline" >
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge bg-gradient-danger border-0" onclick="return confirm('Apakah yakin mau di hapus?')" >Hapus</button>
                      </form>
                    </center>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
        </div>
      </div>
    </div>
</div>

@endsection
