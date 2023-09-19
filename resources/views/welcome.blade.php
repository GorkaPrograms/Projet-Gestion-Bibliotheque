<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Style -->
    </head>
    <body >
        <form action="{{route('libraries.create')}}" method="GET" id="addBookForm">
            <input type="text" class="" placeholder="Titre" name="title">
            <input type="text" class="" placeholder="Auteur" name="author">
            <input type="text" class="" placeholder="Genre" name="genre">
            <input type="date" class="" placeholder="Publié le" name="publishedOn">
            <button type="submit">Soumettre</button>
        </form>

        <table class="" id="booksTable">
            <thead>
                <tr>
                    <td>Titre</td>
                    <td>Auteur</td>
                    <td>Genre</td>
                    <td>Publié le</td>
                    <td>Mettre à jour</td>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
            </tbody>
        </table>
    </body>
</html>
