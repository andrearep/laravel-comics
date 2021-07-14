  @extends('layout.app')

  @section('title','Comics | DC')

  @section('content')

  <main>
      <div class="container">
          <h2>current series</h2>
          <div class="cards">
              @foreach ($comics as $index => $comic)
              <a href="{{route('comic',['id' => $index])}}">
                  <div class="card">
                      <div class="cover">
                          <img src="{{$comic['thumb']}}" class="card-img-top rounded-0" alt="...">
                      </div>
                      <span>
                          {{$comic['series']}}
                      </span>
                  </div>
              </a>
              @endforeach
          </div>
      </div>
      <div class="load_more">
          <button>load more</button>
      </div>
  </main>
  @endsection