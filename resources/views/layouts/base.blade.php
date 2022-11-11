@props(['styles' => '', 'scripts' => ''])

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>GotPTTK</title>
        {{-- Globalne style CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- Lokalne style CSS --}}
        {{ $styles }}
    </head>
    <body>
        {{ $slot }}
    </body>
    {{-- Globalne skrypty JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- Lokalne skrypty JS --}}
    {{ $scripts }} 
    <script>
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl)
        })
        toastList.forEach(toast => toast.show())
    </script>
</html>