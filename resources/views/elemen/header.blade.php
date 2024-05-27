
        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="/">
                                            <img src="{{asset('img/logo/logo.png')}}" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="{{ ($title === "Home") ? 'active' : '' }} menu-item-has-children"><a href="/">Home</a></li>
                                            <!-- <li class="menu-item-has-children"><a href="#">Movie</a>
                                                <ul class="submenu">
                                                    <li><a href="movie.html">Movie</a></li>
                                                    <li><a href="movie-details.html">Movie Details</a></li>
                                                </ul>
                                            </li> -->
                                            <li class="{{ ($title === "Daftar Buku") ? 'active' : '' }} menu-item-has-children" ><a href="/semua-buku">Buku</a></li>
                                            <li class="{{ ($title === "Daftar Film") ? 'active' : '' }} menu-item-has-children" ><a href="/semua-film">Film</a></li>
                                            <li class="{{ ($title === "Daftar Rekomendasi Buku") ? 'active' : '' }} menu-item-has-children" ><a href="/perpus">Baca Buku</a></li>
                                            <li class="{{ ($title === "Daftar Rekomendasi Film") ? 'active' : '' }} menu-item-has-children" ><a href="/movie">Nonton Film</a></li>
                                            {{-- <li><a href="contact.html">Contacts</a></li> --}}
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            {{-- <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li> --}}
                                            @if(!session('nama'))
                                            <li class="header-btn"><a href="/login" class="btn">Sign In</a></li>
                                            @endif
                                            @if(session('nama'))
                                            <li class="header-btn"><a href="/logout" class="btn">Logout</a></li>
                                            <li class="header-btn"><a href="/user" class="btn">Dashboard</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="/"><img src="{{asset('img/logo/logo.png')}}" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                            <!-- Modal Search -->
                            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="/search" method="get">
                                            @csrf
                                            <input type="text" name="search" placeholder="Search here...">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Search-end -->

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->
