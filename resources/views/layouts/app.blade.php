<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ isset($title) ? config('app.name').' | '. $title : config('app.name')}}</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <body class="flex flex-col items-center justify-between min-h-screen py-6">
        <main role="main" class="flex flex-col items-center justify-center">
            @yield('content')
        </main>

        @include('layouts/partials/_footer')
    </body>
</html>
