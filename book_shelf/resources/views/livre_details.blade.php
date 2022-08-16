@extends ('layout.parent')
@section('content')
<main role="main" class="flex main">
    <section class="flex" role="présentation">
        <article class="flex" role="article premier">
            <p>ou c kon mé le css déjà ???? :O </p>
            <p> ok c bon lol </p>
            @foreach ($livre as $livre)
            <div class="div_book">
                <p>titre : {{ $livre->titre }}</p>
                <a href="details.php?id={{ $livre->id }}">
                    <img class="flex" src="{{ asset('image/cover/'.$livre->couverture) }}.png" alt={{ $livre->titre }}
                        {{ $livre->auteur }} cover>
                </a>
                <p>auteur.ice : {{ $livre->auteur }}</p>
                <p>ISBN : {{ $livre->id }}</p>
                <p>Numero d'éditeur: {{ $livre->id_editeur }}</p>
                <p>Nom d'éditeur : {{ $livre->nom_editeur }}</p>
            </div>
            @endforeach
        </article>
    </section>
    <section class="flex" role="livres à l'affiche">
        <article class="flex" role="les livres">
            <div class="flex" role="carrousel" class="carroussel_index">
                BOUCLE
            </div>
        </article>
    </section>
</main>
<h1>DEBUG</h1>
@stop
