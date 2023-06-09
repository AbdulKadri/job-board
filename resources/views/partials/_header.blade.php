<nav class="flex justify-between items-center pt-4 mb-4 mx-6">
    <a href="/"
        ><img class="w-24" src="{{asset('images/logo.svg')}}" alt="logo" class="logo"
    /></a>
    <ul class="flex space-x-6 mr-6 text-lg">
        @auth
        <li>
            <span class="font-bold uppercase">Welcome {{ auth()->user()->name }}</span>
        </li>
        <li>
            <a href="/listings/manage" class="hover:text-primary"
                ><i class="fa-solid fa-gear"></i>
                Manage Jobs</a
            >
        </li>
        <form action="/logout" method="POST" class="inline">
            @csrf

            <button type="submit" class="hover:text-primary">
                <i class="fa-solid fa-sign-out"></i> Logout
            </button>
        </form>

        @else
        <li>
            <a href="/register" class="hover:text-primary"
                ><i class="fa-solid fa-user-plus"></i> Register</a
            >
        </li>
        <li>
            <a href="/login" class="hover:text-primary"
                ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                Login</a
            >
        </li>
        @endauth
    </ul>
</nav>