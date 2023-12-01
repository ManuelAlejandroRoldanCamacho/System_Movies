<nav>

    <ul>

        <li><a href="{{ route('home') }}">Home</a></li>

        @guest
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        @endguest
        
        @auth
            <form action="{{ route('logout') }}" method="post">

                @csrf
                <button>Logout</button>

            </form>
        @endauth

    </ul>

    <!-- Pendiente terminar la funcion de busar (pendiente) -->

    <div>
        <form action="#" method="post">
            <input type="text" placeholder="What movie are you looking for?">
            <input type="submit" value="Find">
        </form>
    </div>

</nav>