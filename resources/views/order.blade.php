<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    
</head>
<link rel="stylesheet" href="{{ asset('css/shoping.css') }}">
<link rel="stylesheet" href="{{ asset('css/chao.css') }}">
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="Image/anh/17.jpg" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa-solid fa-cart-shopping"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa-solid fa-cart-shopping"></i> <span></span></a></li>
               
            </ul> 
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
     
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            
                       
                            <li><a href="{{ asset('') }}">Home</a></li>
                            <li><a href="{{ asset('albums') }}">Albums</a></li>
                            <li><a href="{{ asset('news')}}">News</a></li>
                          
                            <li><a href="{{ asset('shoping')}}">Shoping</a></li>
                            <li><a href="{{ asset('payment')}}">Payment</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa-solid fa-cart-shopping"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="h3 mb-2 text-gray-800">Order</h1>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table order</h6>
        </div>
        <section class="shoping-cart spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="shoping__product">Name</th>
                                        <th>Amount</th>
                                        <th>Author</th>
                                       
                                        <th>Image</th>
                                        <th>Payment status</th>
                                        <th></th>
    
    
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <div class="oneMusic-buy-now-area mb-100">
                                        <div class="container">
                                            <div class="row">
                                           @php
                                               use App\Models\audio;
                                               $audio = audio::all();
                                           @endphp
                                           @foreach($audio as $audio)
                                               
                                          
                                    <tr>
                                        <td class="shoping__cart__item">
                                            
                                            <h5>{{ $audio->name_product }}</h5>
                                        </td>
    
                                        <td class="shoping__cart__price">
                                            <p>{{$audio->amount}}</p>
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <p>{{$audio->author}}</p>
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <p>{{$audio->link}}</p>
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <p>unpaid</p>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                
                        
                    </div>
                </div>
    
            </div>
        </section>
    </div>



</body>

</html>