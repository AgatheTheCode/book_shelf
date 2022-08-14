@extends ('layout.parent')
@section('content')
    {{-- <main role="main" class="flex main">
        <section class="flex" role="présentation">
            <article class="flex" role="article premier">
                <p>ou c kon mé le css déjà ???? :O </p>
                <p> ok c bon lol </p>
                @foreach ($books as $books)
                <div class="div_book">
                    <p>titre : {{ $books->titre }}</p>
                    {{-- <a href="focus_{{$books->titre}}.php?id={{ $books->id }}">
                        <img class="flex"src="{{ asset('image/cover/'.$books->couverture) }}.png" alt={{ $books->titre }} {{ $books->auteur }} cover>
                    </a> --}}
                    {{-- <p>auteur.ice : {{ $books->auteur }}</p>
                    <p>ISBN : {{ $books->id }}</p>
                    <p>Numero d'éditeur: {{ $books->id_editeur }}</p>
                    <p>Nom d'éditeur : {{ $books->nom_editeur }}</p>
                </div>
                @endforeach
            </article>
        </section>
        <section class="flex" role="livres à l'affiche">
            <article class="flex" role="les livres">
                <div class="flex" role="carrousel" class="carroussel_index"> --}}
                    {{-- BOUCLE --}}
                {{-- </div>
            </article>
        </section>
    </main> --}}
    <h1>DEBUG</h1>
    @stop