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
            <h6>Daftar User</h6>
          </div>
              <table id="daftar_postingan" class="table table-striped table-hover align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Waktu Daftar</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                @foreach ($users as $user)
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
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $user->username }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs text-secondary mb-0">{{ $user->nama_lengkap }}</p>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{ $user->email }}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $user->created_at }}</span>
                      </td>
                    <td>
                        <center>
                      <form action="/hapus-user/{{ $user->id }}" method="post" class="d-inline" >
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
