<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/menu">
            <img src="gambar/Logo Navbar.png" alt="Vitality" width="135" height="55">
        </a>
        <ul class="navbar-nav">
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> Action </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><span class="material-symbols-outlined">
                                </span> Log out </button>
                            </form>
                            </li>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="login">
                        Log in
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
