@extends('layout')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
        <span class="breadcrumb-item active">view audio</span>
    </div>
    </div>
    <section class="product-sec">
        <div class="container">
            <h1>{{$audio->name}}</h1>
        <div class="col-md-6">
            <iframe width="200" height="150" src="{{ $audio->link }}" frameborder="0"
                allow="accelerometer"></iframe>
        </div>
        <div class="col-md-6 slider-content">
            <span>link:</span>
            <p>{{$audio-link}}</p>
            <ul>
                <li>
                    <span class="Id_product">Id_product</span><span class="clm">:</span>
                    <span class="name_product">{{$audio->name_product}}</span>
                    <span class="author">{{$audio->author}}</span>
                    <span class="amount">{{$audio->amount}}</span>
                    <span class="Image">{{$audio->Image}}</span>
                </li>
                <li>
                    <span class="name">views</span><span class="clm">:</span>
                </li>
            </ul>
        </div>
        </div>
    </section>
@endsection
