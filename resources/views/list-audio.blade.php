@extends('admin')
@section('content')
    
    
    <div class="container">
        <table class="col-md-12">
            <tr>
                <th>Id_product</th>
                <th>name_product</th>
                <th>author</th>
                <th>amount</th>
                <th>link</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            {{-- @php
                use App\Models\audio;
                $audio = audio::all();
            @endphp --}}

            @foreach ($audio as $audio)
                <tr>
                    <td>{{ $audio->Id_product }}</td>
                    <td>{{ $audio->name_product }}</td>
                    <td>{{ $audio->author }}</td>
                    <td>{{ $audio->amount }}</td>
                    <td><iframe width="200" height="150" src="{{ $audio->link }}" frameborder="0"
                        allow="accelerometer"></iframe>
                </td>
                 
                    <td><iframe alt="" width="200" height="150" src="{{ $audio->Image}}" frameborder="0"
                        allow="accelerometer"></iframe>
                </td>

                    
                    <td>
                        {{-- Phần này là get Id về để điều hướng sang trang Update --}}
                        <a href="{{route('update',$audio->Id_product)}}"><button class=" btn-success" type="button">UPDATE </button> </a>
                        <a href="/list-audio/xoa={{$audio->Id_product}}"> <button class="btn-danger" type="button">DELETE</button> </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
