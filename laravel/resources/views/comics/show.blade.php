  @extends('layout.app')

  @section('title','Comics | DC')

  @section('content')

  <main>
      <h1>Fumetto singolo</h1>

      <div class="container">
          <div class="comic">
              <div class="">
                  <div class="poster">
                      <img src="{{$comic['thumb']}}">
                  </div>
                  <div class="card">
                      <span class="">{{$comic['series']}}</s>
                  </div>
              </div>
          </div>
      </div>

  </main>
  @endsection