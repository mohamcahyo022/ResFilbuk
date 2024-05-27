@extends('root')
@section('content')
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{asset('img/bg/buku_bg.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Resensi <span>Buku</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Buku</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- movie-area -->
            <section class="movie-area movie-bg" data-background="{{asset('img/bg/movie_bg.jpg')}}">
                <div class="container">
                    <div class="row align-items-end mb-60">
                        <div class="col-lg-6">
                            <div class="section-title text-center text-lg-left">
                                <span class="sub-title">berbagai karya penulis terkenal</span>
                                <h2 class="title">Daftar Semua Resensi Buku</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="movie-page-meta">
                                <div class="tr-movie-menu-active text-center">
                                    <button class="active" data-filter="*">Novel</button>
                                    <button class="" data-filter=".cat-one">Motivasi</button>
                                    <button class="" data-filter=".cat-two">Pemrograman</button>
                                </div>
                                <form action="#" class="movie-filter-form">
                                    <select class="custom-select">
                                        <option selected>Lainya</option>
                                        <option value="1">Blueray</option>
                                        <option value="2">4k Movie</option>
                                        <option value="3">Hd Movie</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row tr-movie-active">
                        @foreach ($bukus as $buku)
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img src="storage/cover/{{$buku->cover}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="detail-buku/{{$buku->id}}" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="detail-buku/{{$buku->id}}">{{$buku->judul}}</a></h5>
                                        <span class="date">{{$buku->rilis}}</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">{{$buku->jenis}}</span></li>
                                            <li>
                                                <span class="duration">{{$buku->halaman}} hal</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="row d-flex">
                            <div class="col-12">
                                <div class="pagination-wrap mt-30">
                                    <nav>
                                        <ul class="justify-content-center">
                                            <li><a href="">Sebelumnya</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">Selanjutnya</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </section>
            <!-- movie-area-end -->

        </main>
        <!-- main-area-end -->

        @endsection

