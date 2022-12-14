@extends('layout')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
        <span class="breadcrumb-item active">Welcome {{ Auth::user()->email }}</span>
        <span class="breadcrumb-item active">Upload audio</span>
    </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h1>Upload audio</h1>
            <div class="form">
                <form class="" action="{{ route('audio.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="Id_product" value="">
                            <label for="name">Id_product</label>
                            <input type="text" name="name_product" value="" >
                            <label for="name_product">name_product</label>
                            <input type="text" name="author"value="" placeholder="FMW5vLCdPks">
                            <label for="author">author</label>
                            <input type="text" name="amount"value="" placeholder="FMW5vLCdPks">
                            <label for="amount">amount</label>
                            <input type="text" name="link"value="" placeholder="">
                            <label for="link">link</label>
                            <input type="file" name="Image"value="" placeholder="">
                            <label for="link">Image</label>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                      <input type="hidden"name="id" value="{{$audio->Id_product}}">
                        <button type="submit" class="btn black">Upload Video</button>

                    </div>
            </div>
            </form>
        </div>
        </div>
    </section>
@endsection
