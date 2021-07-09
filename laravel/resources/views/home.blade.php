@extends('layout.app')
@section('content')

<h2>bella</h2>

<div class="container">
    <div class="cards">
        @foreach ($comics as $index => $comic)
        <div>

            <div class="crop">
                <img src="{{$comic['thumb']}}" class="card-img-top rounded-0" alt="...">
            </div>
            <div id="card_body">
                <h6 class="">{{$comic['series']}}</h6>
            </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection