@extends('layout.app')
@section('content')


<main>
    <div class="container">
        <div class="cards">
            @foreach ($comics as $index => $comic)
            <div class="card">
                <div class="cover">
                    <img src="{{$comic['thumb']}}" class="card-img-top rounded-0" alt="...">
                </div>
                <span>
                    {{$comic['series']}}
                </span>

            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection