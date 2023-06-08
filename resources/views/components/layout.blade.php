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
        @vite('resources/css/app.css')
        <title>Work Bridge | Find Jobs & Projects</title>
    </head>
    <body class="flex flex-col h-screen justify-between">
        <nav class="flex justify-between items-center pt-2 mb-4 mx-2">
            <a href="/"
                ><img class="w-24" src="{{asset('images/logo.svg')}}" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="register.html" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="login.html" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
            </ul>
        </nav>

    <main class="mb-auto">
        {{ $slot }}
    </main>

    <footer
        class="w-full flex items-center relative place-content-center py-7 font-bold bg-primary text-white mt-24 opacity-90 px-4 md:px-8">
        
        <p>Copyright &copy; 2023, All Rights reserved</p>

        <a
            href="create.html"
            class="absolute right-32 bg-secondary text-white min-w-min py-3 px-5 hidden md:block">
            Post Job
        </a>
    </footer>


</body>
</html>