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
                                    <a href="blog-details.html"><img src="{{asset('storage/cover/'. $buku->cover)}}" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-details-top-meta">
                                        <span class="user"><i class="far fa-user"></i> by <a href="#">Admin</a></span>
                                        <span class="date"><i class="far fa-clock"></i> {{$buku->created_at}}</span>
                                    </div>
                                    <h2 class="title">{{$buku->judul}}</h2>
                                    <p>{!!$buku->deskripsi!!}</p>
                                    <blockquote>
                                        <object data="{{asset('storage/ebook/'. $buku->ebook)}}" type="application/pdf" width="100%" height="500px">
                                            <p>File E-book tidak ada. <a href="{{asset('storage/ebook/'. $buku->ebook)}}">Unduh file</a> sebagai gantinya.</p>
                                        </p>
                                        </object>
                                        {{-- <iframe src="public\11.pdf" frameborder="0"></iframe> --}}
                                    </blockquote>
                                    {{-- <div class="blog-img-wrap">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img src="img/blog/blog_details_img01.jpg" alt="">
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="img/blog/blog_details_img02.jpg" alt="">
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="blog-post-meta">
                                        <div class="blog-details-tags">
                                            <ul>
                                                <li><i class="fas fa-tags"></i> <span>Genre :</span></li>
                                                <li><a href="#">{{$buku->genre}}</a></li>
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

                                {{-- <div class="widget blog-widget">
                                    <div class="widget-title mb-30">
                                        <h5 class="title">Detail</h5>
                                    </div>
                                    <div class="sidebar-cat">
                                        <ul>
                                            <li><a href="#">Movies</a> <span>12</span></li>
                                            <li><a href="#">Action Movies</a> <span>10</span></li>
                                            <li><a href="#">Streaming</a> <span>9</span></li>
                                            <li><a href="#">Download</a> <span>16</span></li>
                                        </ul>
                                    </div>
                                </div> --}}

                                <div class="widget blog-widget">
                                    <div class="widget-title mb-30">
                                        <h5 class="title">Link Baca Buku</h5>
                                    </div>
                                    <div class="tag-list">
                                        <ul>
                                            <li><a href="{{$buku->link_1}}">Ipusnas</a></li>
                                            <li><a href="{{$buku->link_2}}">Open Library</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="widget blog-widget">
                                    <div class="widget-title mb-30">
                                        <h5 class="title">Link Beli Buku</h5>
                                    </div>
                                    <div class="tag-list">
                                        <ul>
                                            <li><a href="{{$buku->link_sope}}">Shopee</a></li>
                                            <li><a href="{{$buku->link_tokped}}">Tokopedia</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->



        </main>
        <!-- main-area-end -->
        @endsection
