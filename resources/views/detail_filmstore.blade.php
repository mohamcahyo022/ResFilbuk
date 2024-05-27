@extends('root')
@section('content')
        <!-- main-area -->
        <main>
            <!-- episode-area -->
            <!-- blog-details-area -->
            <section class="blog-details-area blog-bg" data-background="{{asset('img/bg/blog_bg.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-post-item blog-details-wrap">
                                <div class="blog-post-thumb">
                                    <a href="blog-details.html"><img src="{{asset('storage/poster/'. $film->poster)}}"  alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-details-top-meta">
                                        <span class="user"><i class="far fa-user"></i> by <a href="#">Admin</a></span>
                                        <span class="date"><i class="far fa-clock"></i> {{$film->created_at}}</span>
                                    </div>
                                    <h2 class="title">{{$film->judul}}</h2>
                                    <p>{!!$film->deskripsi!!}</p>

                                    <div class="blog-post-meta">
                                        <div class="blog-details-tags">
                                            <ul>
                                                <li><i class="fas fa-tags"></i> <span>Genre :</span></li>
                                                <li><a href="#">{{$film->genre}}</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-post-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="blog-sidebar">

                                <div class="widget blog-widget">
                                    <div class="widget-title mb-30">
                                        <h5 class="title">Link Nonton Film</h5>
                                    </div>
                                    <div class="tag-list">
                                        <ul>
                                            <li><a href="{{$film->link_1}}">Netflix</a></li>
                                            <li><a href="{{$film->link_2}}">Video</a></li>
                                            <li><a href="{{$film->link_3}}">Klik Film</a></li>
                                        </ul>
                                    </div>
                                </div>

                                {{-- <div class="widget blog-widget">
                                    <div class="widget-title mb-30">
                                        <h5 class="title">Link Beli film</h5>
                                    </div>
                                    <div class="tag-list">
                                        <ul>
                                            <li><a href="{{$film->link_sope}}">Shopee</a></li>
                                            <li><a href="{{$film->link_tokped}}">Tokopedia</a></li>
                                        </ul>
                                    </div>
                                </div> --}}

                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->



        </main>
        <!-- main-area-end -->
        @endsection
