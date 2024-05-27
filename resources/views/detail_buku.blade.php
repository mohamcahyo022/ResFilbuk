@extends('root')
@section('content')
        <!-- main-area -->
        <main>
            <!-- episode-area -->
            <section class="episode-area episode-bg" data-background="{{asset('img/bg/episode_bg.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="movie-episode-wrap">
                                <div class="episode-top-wrap">
                                    <div class="section-title">
                                        <span class="sub-title">Detail Resensi</span>
                                        <h2 class="title">{{$buku->judul}}</h2>
                                    </div>
                                </div>
                                <div class="episode-watch-wrap">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                        <li><a class="popup-video"><i class="fas fa-play"></i> Penulis : <span class="text-info"> {{$buku->penulis}}</span></a></li>
                                                        <li><a class="popup-video"><i class="fas fa-play"></i> Penerbit : <span class="text-info"> {{$buku->penerbit}}</span></a></li>
                                                        <li><a class="popup-video"><i class="fas fa-play"></i> Tahun Rilis : <span class="text-info"> {{$buku->rilis}}</span></a></li>
                                                        <li><a class="popup-video"><i class="fas fa-play"></i> Jumlah Halaman : <span class="text-info">{{$buku->halaman}}</span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="episode-img">
                                <img src="{{asset('storage/cover/'. $buku->cover)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="movie-history-wrap">
                                <h3 class="title">Orientasi <span>Buku</span></h3>
                                <p class="mb-4">{!!$buku->orientasi!!}</p>
                                <h3 class="title">Sinopsis <span>Buku</span></h3>
                                <p class="mb-4">{!!$buku->sinopsis!!}</p>
                                <h3 class="title">Analisis <span>Buku</span></h3>
                                <p class="mb-4">{!!$buku->analisis!!}</p>
                                <h3 class="title">Evaluasi <span>Buku</span></h3>
                                <p class="mb-4">{!!$buku->evaluasi!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- episode-area-end -->

            <!-- tv-series-area -->
            {{-- <section class="tv-series-area tv-series-bg" data-background="{{asset('img/bg/tv_series_bg02.jpg')}}">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-50">
                                <span class="sub-title"><h4 class="text-info">Komentar</h4></span>

                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <!-- TEMPAT KOMENTAR -->
                        <div class="col-10">
                            <div class="blog-comment mb-80">
                                <ul>
                                    <li>
                                        <div class="single-comment">
                                            <div class="comment-text">
                                                <div class="comment-avatar-info">
                                                    <h5>Daisy Waterstone <span class="comment-date">November 13, 2021</span></h5>
                                                    <a href="#" class="comment-reply-link">Reply <i class="fas fa-reply-all"></i></a>
                                                </div>
                                                <p>Printing and typetting industry. Lorem Ipsum has been the instry standrd the dummy
                                                text ever since the, when an unknown printer took a galley .</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment-reply">
                                        <div class="single-comment">
                                            <div class="comment-text">
                                                <div class="comment-avatar-info">
                                                    <h5>Jon Deo <span class="comment-date">November 13, 2021</span></h5>
                                                    <a href="#" class="comment-reply-link">Reply <i class="fas fa-reply-all"></i></a>
                                                </div>
                                                <p>Printing and typetting industry. Lorem Ipsum has been the instry standrd the dummy
                                                text ever since the, when an unknown printer took a galley .</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="contact-form-wrap">
                            <div class="widget-title mb-50">
                                <h5 class="title">Post a Comment</h5>
                            </div>
                            <div class="contact-form">
                                <form action="#">
                                    <textarea name="message" cols="60" rows="8" placeholder="Type Your Message..."></textarea>
                                    <button class="btn">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- tv-series-area-end -->



        </main>
        <!-- main-area-end -->
        @endsection
