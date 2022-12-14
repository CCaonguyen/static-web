







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>TuneSource- Modern Music HTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('Image/core-img/favicon.ico') }}"">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
   
</head>
 <!-- ##### Hero Area Start ##### -->
 <section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(Image/anh/16.jpg);"></div>
            <!-- Slide Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">Music albums</h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms">Ccao Nguyen <span>Ccao Nguyen</span></h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->

    </div>
</section>
<!-- ##### Hero Area End ##### -->

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">


                        <!-- Menu -->
                        <div class="classy- TuneSource">

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- Close Button -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span>
                                    </div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        <!-- Logo -->
                                        <a class="logogo" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                                            <h1><span style="color: #fbead7; font-family: 'Pacifico', cursive; ">
                                                    TuneSource <i class="fas fa-bars"
                                                        style="text-align: center"></i></span></h1>
                                        </a>

                                        <li><a href="{{ asset('admin') }}">Home</a></li>
                                        <li><a href="{{ asset('list-audio') }}">Product</a></li>
                                        
                                        <li><a href="{{ asset('showupdate') }}">Add Product</a></li>
                                    </ul>

                                    <!-- Login/Register & Cart Button -->
                                    <div class="login-register-cart-button d-flex align-items-center">
                                        <!-- Login/Register -->
                                        <div class="login-register-btn mr-50">
                                            <a href="{{ asset('login_url') }}" id="loginBtn">Login</a>
                                        </div>
                                       
                                        

                                        <!-- Cart Button -->





                                    </div>


                                    <!-- ======= Search Form ======= -->


                                </div>
                            </div><!-- End Search Form -->
                        </div>
                        </ul>


                </div>
            </div>
            <!-- Nav End -->
            <section class="album-catagory section-padding-100-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                               <div class="col-10 agileits_search">
                                       <form action="{{ route('search1') }}" method="POST" enctype="multipart/form-data">
                                           @csrf
                                           <div class="input-group">
                                               <input type="text" class="form-control mr-sm-2" name="keyword" placeholder="Search videos..." id="keyword">
                                               
                                                       <button class="btn my-2 my-sm-0" type="submit">Search</button>
                                                   </span>
                                               </a>
                                           </div>
                                       </form>
                                   </div>
                                </div>
                                <div class="mx-auto pull-right" style="position:absolute; right:246px"> 
                                   
       <!-- search -->
       
       @if (session('sucmessage'))
       <span >
          <strong>{{ session('sucmessage') }}</strong></span>
   @endif 
                                   
       
        </div>
        </nav>
        </div>
        </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    

                    <p class="copywrite-text"><a href="#">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <a>TunSource</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="{{ asset('') }}">Home</a></li>
                            <li><a href="{{ asset('add') }}">Add</a></li>
                            <li><a href="{{ asset('/Login') }}">Login</a></li>
                            <li><a href="{{ asset('add') }}">Add Product</a></li>
                                <!-- Cart Button -->
                           

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>

</body>

</html>

