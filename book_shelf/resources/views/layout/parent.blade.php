<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BookShelf</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href= {{ URL::asset('css/base.css'); }} >


<body class="antialiased">
    <header role="header flex">
        <div class="header_main_div flex">
            <h1 class="flex" role="titre">Bookshelf</h1>
            <h2 class="flex" role="sous-titre">Votre bibliothèque en ligne !</h2>
            {{-- <h5 class="flex"> ouai c'est très béta comme site ""kommemm"" </h5> --}}
            <div class="flex">
                <nav class="flex header_nav">
                    <ul class="flex header_nav">
                        <li class="flex header_nav"><a href="#">item</li></a>
                        <li class="flex header_nav"><a href="#">item</li></a>
                        <li class="flex header_nav"><a href="#">item</li></a>
                        <li class="flex header_nav"><a href="#">item</li></a>
                        <li class="flex header_nav"><a href="#">item</li></a>
                        <li class="flex header_nav"><a href="#">item</li></a>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="flex" role="footer">
        <p class="flex">truc de footer tmtc</p>
        <p> j'ai envi di métre des pingouins pacequy fé cho :D</p>
        <img src={{ URL::asset('image/pingouin/pirate-gouins.gif'); }} alt="" role="pingouins pirates">
    </footer>

</body>

</html>