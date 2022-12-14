@extends('admin')
@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">

<section class="login-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="login-content">
                    
                    <!-- Login Form -->
                    <div class="form">
                        
                            <form class="" action="{{route('audio.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                           
                                                                             
                                    
                                    <div class="form-group">
                                        <label for="Id_product">Id_product </label>
                                        <input type="text" class="form-control" name="Id_product" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="name_product">Name_product</label>
                                        <input type="text" class="form-control" name="name_product"value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <input type="text" class="form-control" name="author" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <input type="text" class="form-control" name="amount" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="link">Link</label>
                                        <input type="file" class="form-control" name="link" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="Image">Image</label>
                                        <input type="file" class="form-control"  name="Image" value="">
                                    </div>
                            </div>
                            <div class="col-lg-10 col-md-14">
                                <button type="submit" class="btn oneMusic-btn mt-30">Add Video</button>
                            </div>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


      