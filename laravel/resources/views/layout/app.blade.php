<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>

    <header>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('img/dc-logo.png') }}" alt="">
            </div>

            <nav>
                <a href="">characers</a>
                <a href="">comics</a>
                <a href="">movies</a>
                <a href="">tv</a>
                <a href="">games</a>
                <a href="">collection</a>
                <a href="">videos</a>
                <a href="">fans</a>
                <a href="">news</a>
                <a href="">shop <i class="fas fa-sort-down"></i></a>
            </nav>

            <div class="search">

                <input type="text" placeholder="SEARCH">
                <span><i class="fas fa-search"></i></span>


            </div>
        </div>

    </header>

    <main>
    </main>

    <footer>
    </footer>
</body>

</html>