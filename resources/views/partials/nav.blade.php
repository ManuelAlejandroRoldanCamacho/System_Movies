
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">

        <div class="container-fluid">
    
            <button class="navbar-toggler border" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-block d-lg-none">
                <button class="btn btn-dark border" data-bs-toggle="collapse" data-bs-target="#searchForm">
                    <span class="fas fa-search"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="menu">
    
                <ul class="navbar-nav w-100 my-2 justify-content-center">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('movies.all') }}">Movies</a>
                    </li>

                    <div class="nav-item mx-lg-2 d-none d-lg-block">
                        <form class="input-group" action="#" method="post">
                            @csrf
                            <input class="form-control" type="text" placeholder="Search movies here">
                            <button class="btn btn-primary" type="submit">Find</button>
                        </form>
                    </div>
                                
                    @guest
                        <li class="nav-item">
                            <div class="btn-group">
                                <a class="btn btn-primary rounded" href="{{ route('login') }}">Login</a>
                                <a class="btn btn-success rounded mx-2" href="{{ route('register') }}">Register</a>
                            </div>
                        </li>
                    @endguest       

                    @auth
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
    
                                @csrf
                                <button class="btn btn-danger">Logout</button>
    
                            </form>
                        </li>
                    @endauth                                
                    
                </ul>
    
            </div>
            
        </div>

    </nav>

    <div class="collapse w-100" id="searchForm">
        <form class="input-group mt-2" action="#" method="post">
            @csrf
            <input class="form-control" type="text" placeholder="Search movies here">
            <button class="btn btn-primary" type="submit">Find</button>
        </form>
    </div>