<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/DC_Comics_logo.svg.png')}}" width="60" alt="DC LOGO">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row">
                    <li class="nav-item p-2">
                        <a class="{{ Route::currentRouteName() === 'home' ? 'nav-link active' : 'nav-link' }}" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item dropdown p-2">
                        <a class="{{ Route::currentRouteName() === 'comics.index' || Route::currentRouteName() === 'comics.show' ? 'nav-link dropdown-toggle active' : 'nav-link dropdown-toggle' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Comics
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('comics.index') }}">All comics</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('comics.create') }}">Add comic</a>
                        </div>
                    </li>

                    {{-- <li class="nav-item p-2">
                        <a class="{{ Route::currentRouteName() === 'comics.index' || Route::currentRouteName() === 'comics.show' ? 'nav-link dropdown-toggle active' : 'nav-link dropdown-toggle' }}" href="{{ route('comics.index') }}">Comics</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</header>




