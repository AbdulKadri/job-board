<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        @vite('resources/css/app.css')
        <title>Work Bridge | Find Jobs & Projects</title>
    </head>
    <body {{$attributes->merge(['class' => 'flex flex-col h-screen justify-between'])}}>

        @include('partials._header')

        <x-flash-message />

        <main class="mb-auto">
            {{ $slot }}
        </main>

        @include('partials._footer')

    </body>
</html>