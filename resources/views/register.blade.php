@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
<link rel="icon" href="{{asset('Image/core-img/favicon.ico')}}">


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(Image/anh/17.jpg);">
        <div class="bradcumbContent">
           
            <h2>REGISTER</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                      
                        <!-- Login Form -->
                        <div class="form">
                            <form action="{{route('auth.register')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email </label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name </label>
                                    <input type="name" class="form-control" id="exampleInputName1"name="name" >

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="address" class="form-control" id="exampleInputAddress1" name="address">
                                    
                                </div>
                                <button type="submit" class="btn oneMusic-btn mt-30">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

   
</body>

</html>