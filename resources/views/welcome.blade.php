<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

    </head>
    <body >
    @if(session('success'))
        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4">
            <p class="font-bold">tiens </p>
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <form action="/livre/store" method="POST" id="addBookForm">
        @csrf
        <input type="text" class="" placeholder="Titre" name="title">
        <input type="text" class="" placeholder="Auteur" name="author">
        <input type="text" class="" placeholder="Genre" name="genre">
        <input type="date" class="" placeholder="Publié le" name="publishedOn">
        <button type="submit">Soumettre</button>
    </form>


    </br>

        <table class="" id="booksTable">
            <thead>
                <tr>
                    <td>Titre</td>
                    <td>Auteur</td>
                    <td>Genre</td>
                    <td>Publié le</td>
                    <td>Modifier</td>
                    <td>Supprimer</td>
                </tr>
            </thead>
            <tbody>
                @foreach($livres as $livre)
                <tr>
                    <td>{{$livre->title}}</td>
                    <td>{{$livre->author}}</td>
                    <td>{{$livre->genre}}</td>
                    <td>{{$livre->published_on}}</td>
                    <td><a href="#">Modifier</a></td>
                    <td><a href="#">Supprimer</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>
