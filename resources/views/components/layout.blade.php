<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel Job Board</title>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="min-h-screen bg-gradient-to-br bg-linear-to-r from-cyan-200 via-blue-200 to-indigo-200">
       {{$slot}}
    </body>
</html>
