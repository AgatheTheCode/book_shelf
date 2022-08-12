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
            <h5 class="flex"> ouai c'est très béta comme site ""kommemm"" </h5>
            <div class="flex">
                <nav class="flex header_nav">
                    <ul>
                        <li>item</li>
                        <li>item</li>
                        <li>item</li>
                        <li>item</li>
                        <li>item</li>
                        <li>item</li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main role="main" class="flex main">
        <section class="flex" role="présentation">
            <article class="flex" role="article premier">
                <p>ou c kon mé le css déjà ???? :O </p>
                <p> ok c bon lol </p>
                @foreach ($books as $books)
                    <p>titre : {{ $books->titre }}</p>
                    <p>auteur.ice : {{ $books->auteur }}</p>
                    <p>Numero d'éditeur: {{ $books->id_editeur }}</p>
                    <p>Nom d'éditeur : {{ $books->nom_editeur }}</p>
                    <p>ISBN : {{ $books->id }}</p>
                @endforeach
            </article>
        </section>
        <section class="flex" role="livres à l'affiche">
            <article class="flex" role="les livres">
                <div class="flex" role="carrousel" class="carroussel_index">
                    {{-- BOUCLE --}}
                </div>
            </article>
        </section>
    </main>
    <footer class="flex" role="footer">
        <p class="flex">truc de footer tmtc</p>
        <p> j'ai envi di métre des pingouins pacequy fé cho :D</p>
        <img src={{ URL::asset('image/pingouin/pirate-gouins.gif'); }} alt="" role="pingouins pirates">
    </footer>

</body>

</html>
