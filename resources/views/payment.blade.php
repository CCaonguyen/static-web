




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
                <link rel="stylesheet" href="{{ asset('css/index.css') }}">
            </head>
            
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
            
                                                    <li><a href="{{ asset('') }}">Home</a></li>
                                                    <li><a href="{{ asset('albums') }}">Albums</a></li>
            
            
            
            
                                                    <li><a href="{{ asset('news')}}">News</a></li>
                                                    
                                                    <li><a href="{{ asset('news')}}">News</a></li>
                                                    
                                                    <li><a href="{{ asset('shoping')}}">Shoping</a></li>
            
            
            
                                                </ul>
            
                                                <!-- Login/Register & Cart Button -->
                                                
            
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
            
                    </div>
                    </nav>
                    </div>
                    </div>
                    </div>
                </header>
                <!-- ##### Header Area End ##### -->
                @yield('content')
            
            

<link rel="stylesheet" href="{{asset('css/chao.css')}}">
<link rel="stylesheet" href="{{asset('css/shoping.css')}}">
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(Image/anh/17.jpg);">
        <div class="bradcumbContent">
           
            <h2>PAYMENT</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->


<!-- payment page-->
<div class="privacy py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span>P</span>ayment</h3>
        <!-- //tittle heading -->
        <div class="checkout-right">
            <!--Horizontal Tab-->
            <div id="parentHorizontalTab">
                <ul class="resp-tabs-list hor_1">
                   
                    <li>Credit/Debit</li>
                    
                </ul>
                <div class="resp-tabs-container hor_1">

                   
                    <div>
                        <form action="#" method="post" class="creditly-card-form agileinfo_form">
                            <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                                <div class="credit-card-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Name on Card</label>
                                            <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                        </div>
                                        <div class="w3_agileits_card_number_grids my-3">
                                            <div class="w3_agileits_card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Card Number</label>
                                                    <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
                                                        autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                </div>
                                            </div>
                                            <div class="w3_agileits_card_number_grid_right mt-2">
                                                <div class="controls">
                                                    <label class="control-label">CVV</label>
                                                    <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Expiration Date</label>
                                            <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                        </div>
                                    </div>
                                    <button class="submit mt-3">
                                        <span>Make a payment </span>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    
                    
                </div>
            </div>
            <!--Plug-in Initialisation-->
        </div>
    </div>
</div>
<!-- //payment page -->

                <!-- ##### Footer Area Start ##### -->
                <footer class="footer-area">
                    <div class="container">
                        <div class="row d-flex flex-wrap align-items-center">
                            <div class="col-12 col-md-6">
                                <a href="#"><img src="{{ asset('Image/core-img/logo.png') }}" alt=""></a>
            
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
                                        <li><a href="{{ asset('albums') }}">Albums</a></li>
                                        <li><a href="{{ asset('news')}}">News</a></li>
                                        
                                        <li><a href="{{ asset('shoping')}}">Shoping</a></li>
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