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
        <div class="jumbotron"></div>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="footer_main">
                <div class="left_side">
                    <div class="columns">
                        <div class="column">
                            <span class="title">DC comics</span>
                            <ul>
                                <li><a href="">characters</a></li>
                                <li> <a href="">comics</a></li>
                                <li><a href="">movies</a></li>
                                <li><a href="">tv</a></li>
                                <li><a href="">games</a></li>
                                <li><a href="">videos</a></li>
                                <li> <a href="">news</a></li>
                                </li>
                            </ul>
                            <span class="title">shop</span>
                            <ul>
                                <li><a href="">shop DC</a></li>
                                <li> <a href="">shop DC Collectibles</a></li>
                            </ul>
                        </div>
                        <div class="column">
                            <span class="title">DC</span>
                            <ul>
                                <li><a href="">term of use</a></li>
                                <li> <a href="">privacy policy (new)</a></li>
                                <li><a href="">ad choices</a></li>
                                <li><a href="">advertising</a></li>
                                <li><a href="">jobs</a></li>
                                <li><a href="">subscriptions</a></li>
                                <li> <a href="">talent workshop</a></li>
                                <li> <a href="">CPSC certificates</a></li>
                                <li> <a href="">ratings</a></li>
                                <li> <a href="">shop help</a></li>
                                <li> <a href="">contact us</a></li>
                            </ul>
                        </div>
                        <div class="column">
                            <span class="title">sites</span>
                            <ul>
                                <li><a href="">DC</a></li>
                                <li> <a href="">MAD Magazine</a></li>
                                <li><a href="">DC Kids</a></li>
                                <li><a href="">DC Universe</a></li>
                                <li><a href="">DC Power Visa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right_side">
                    
                </div>
            </div>
        </div>
    </footer>
</body>

</html>