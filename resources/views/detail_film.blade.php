@extends('root')
@section('content')
        <!-- main-area -->
        <main>

            <!-- movie-details-area -->
            <section class="movie-details-area" data-background="{{ asset('img/bg/movie_details_bg.jpg')}}">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <div class="col-xl-3 col-lg-4">
                            <div class="movie-details-img">
                                <img src="{{asset('storage/poster/'. $film->poster)}}" alt="" width="300">
                                <a href="{{$film->trailer}}" class="popup-video"><img src="{{asset('img/images/play_icon.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="movie-details-content">
                                <h5>New Postingan</h5>
                                <h2>{{$film->judul}}</h2>
                                <div class="banner-meta">
                                    <ul>
                                        {{-- <li class="quality">
                                            <span>Film</span>
                                            <span>Action | SCI</span>
                                        </li> --}}
                                        <li class="category">
                                            <a href="#">{{$film->genre}}</a>
                                        </li>
                                        <li class="release-time">
                                            <span><i class="far fa-calendar-alt"></i> {{$film->rilis}}</span>
                                            <span><i class="far fa-clock"></i> {{$film->durasi}} min</span>
                                        </li>
                                    </ul>
                                </div>
                                <p>{!!$film->orientasi!!}</p>
                                <div class="movie-details-prime">
                                    <ul>
                                        <li class="share"><a href="#"><i class="fas fa-share-square"></i> Share</a></li>
                                        <li class="streaming">
                                            <h6>Detail Resensi</h6>
                                            <span>Bebas Berkomentar</span>
                                        </li>
                                        <li class="watch"><a href="#" class="btn popup-video"><i class="fas fa-play"></i> Baca Resensi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- movie-details-area-end -->

            <!-- episode-area -->
            <section class="episode-area episode-bg" data-background="{{asset('img/bg/episode_bg.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="movie-episode-wrap">
                                <div class="episode-top-wrap">
                                    <div class="section-title">
                                        <span class="sub-title">ResFilbuk</span>
                                        <h2 class="title">Detail Resensi</h2>
                                    </div>
                                    <!-- <div class="total-views-count">
                                        <p>2.7 million <i class="far fa-eye"></i></p>
                                    </div> -->
                                </div>
                                <div class="episode-watch-wrap">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <!-- <button class="btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <span class="season"></span>
                                                    <span class="video-count">5 Full Episodes</span>
                                                </button> -->
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                        <li><a class="popup-video"><i class="fas fa-play"></i> Sutradara : <span class="text-info"> {{$film->sutradara}}</span></a></li>
                                                        <li><a class="popup-video"><i class="fas fa-play"></i> Durasi : <span class="text-info"> {{$film->durasi}} menit</span></a></li>
                                                        <li><a class="popup-video"><i class="fas fa-play"></i> Tahun Rilis : <span class="text-info"> {{$film->rilis}}</span></a></li>
                                                        <li><a class="popup-video"><i class="fas fa-play"></i> Pemain : <span class="text-info"> {{$film->aktor}}</span></a></li>

                                                        <!-- <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 4 - Cowboys and Dreamers</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 5 - Freight Trains and Monsters</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li> -->
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
                                <img src="{{asset('storage/poster/'. $film->poster)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="movie-history-wrap">
                                <h3 class="title">Orientasi <span>Film</span></h3>
                                <p class="mb-3 ms-5">{!!$film->orientasi!!}</p><br>
                                <h3 class="title">Sinopsis <span>Film</span></h3>
                                <p class="mb-3 ms-5">{!!$film->sinopsis!!}</p><br>
                                <h3 class="title">Analisis <span>Film</span></h3>
                                <p class="mb-3 ms-5">{!!$film->analisis!!}</p><br>
                                <h3 class="title">Evaluasi <span>Film</span></h3>
                                <p class="mb-3 ms-5">{!!$film->evaluasi!!}</p><br>
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
