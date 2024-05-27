@extends('root')
@section('content')
        <main>
            <section class="banner-area banner-bg" data-background="{{asset('img/bg/home_bg.png')}}">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="banner-content">
                                <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">ResFilbuk</h6>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">Tulis Resensi <span>Buku & Film</span> Anda Sekarang.</h2>
                                <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                                </div>
                                @if(!session('nama'))
                                <a href="/login" class="banner-btn btn wow "><i class="fas fa-pencil-alt"></i> Tulis Sekarang</a>
                                @endif
                                @if(session('nama'))
                                <a href="/user" class="banner-btn btn wow "><i class="fas fa-pencil-alt"></i> Tulis Sekarang</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner-area-end -->

            <!-- up-coming-movie-area -->
            <section class="ucm-area ucm-bg" data-background="{{asset('img/bg/ucm_bg.jpg')}}">
                <div class="ucm-bg-shape" data-background="{{asset('img/bg/ucm_bg_shape.png')}}"></div>
                <div class="container">
                    <div class="row align-items-end mb-55">
                        <div class="col-lg-6">
                            <div class="section-title text-center text-lg-left">
                                <span class="sub-title">RESENSI TERBARU</span>
                                <h2 class="title">Buku dan Film</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ucm-nav-wrap">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">Film</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="buku-tab" data-toggle="tab" href="#buku" role="tab" aria-controls="buku" aria-selected="true">Buku</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="buku" role="tabpanel" aria-labelledby="buku-tab">
                            <div class="ucm-active owl-carousel">
                                @foreach ($bukus as $buku)
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="detail-buku/{{$buku->id}}"><img src="{{asset('storage/cover/'. $buku->cover)}}" alt=""></a>
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
                                                    <span class="duration"> {{$buku->halaman}} hal</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                            <div class="ucm-active owl-carousel">
                                @foreach ($films as $film)
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="detail-film/{{$film->id}}"><img src="{{asset('storage/poster/'. $film->poster)}}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="detail-film/{{$film->id}}">{{$film->judul}}</a></h5>
                                            <span class="date">{{$film->rilis}}</span>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li><span class="quality">{{$film->genre}}</span></li>
                                                <li>
                                                    <span class="duration"><i class="far fa-clock"></i> {{$film->durasi}} min</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- up-coming-movie-area-end -->

            <!-- services-area -->
            <section class="services-area services-bg" data-background="{{asset('img/bg/services_bg.jpg')}}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="services-img-wrap">
                                <img src="{{asset('img/bg/buku_film_bg.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-content-wrap">
                                <div class="section-title title-style-two mb-20">
                                    <span class="sub-title">ResFilbuk</span>
                                    <h2 class="title">Temukan Berbagai Resensi Buku dan Film Dalam Satu Platform.</h2>
                                </div>
                                <p>Tulis resensi buku dari semua jenis buku..........</p>
                                <div class="services-list">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-television"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Resensi Buku.</h5>
                                                <p>Tulis atau lihat resensi buku dari berbagai jenis buku sekarang.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-video-camera"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Resensi Film.</h5>
                                                <p>Lihat resensi atau tulis sinopsis film anda sekarang.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->

            <!-- top-rated-movie -->
            <section class="top-rated-movie tr-movie-bg" data-background="{{asset('img/bg/tr_movies_bg.jpg')}}">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-50">
                                <span class="sub-title">Daftar Semua Resensi</span>
                                <h2 class="title">Top Resensi Buku dan Film</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="tr-movie-menu-active text-center">
                                <button class="" data-filter=".cat-one">Buku</button>
                                <button class="" data-filter=".cat-two">Film</button>
                            </div>
                        </div>
                    </div>
                    <div class="row tr-movie-active">
                        @foreach ($films as $film)
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="detail-film/{{$film->id}}"><img src="{{asset('storage/poster/'. $film->poster)}}" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="detail-film/{{$film->id}}">{{$film->judul}}</a></h5>
                                        <span class="date">{{$film->rilis}}</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">{{$film->genre}}</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> {{$film->durasi}} min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @foreach ($bukus as $buku)
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="detail-buku/{{$buku->id}}"><img src="{{asset('storage/cover/'. $buku->cover)}}" alt=""></a>
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
                                                <span class="duration"> {{$buku->halaman}} hal</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>


        </main>
        <!-- main-area-end -->

@endsection
