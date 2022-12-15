<header class="header">
    <div class="header_top"></div>
    <div class="header_main container-lg">
        <div class="header_left">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <div class="header_center">
            <nav class="navbar navbar-expand-lg navbar-light ">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link my_link {{ Route::currentRouteName() == 'characters' ? 'active' : '' }}"
                                href="#">characters </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                                href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link" href="#">movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link" href="#">tv</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link" href="#">games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link" href="#">collectibles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link" href="#">videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link" href="#">fans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link" href="#">news</a>
                        </li>
                        <li class="nav-item dropdown my_link">
                            <a class="nav-link dropdown-toggle my_link" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Shop
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item my_link" href="#">Action</a>
                                <a class="dropdown-item my_link" href="#">Another action</a>
                                <a class="dropdown-item my_link" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_right">
            <form action="#">
                <input type="text" name="" id="" placeholder="search">
                <button type="submit">Cerca</button>
            </form>
        </div>
    </div>

</header>
