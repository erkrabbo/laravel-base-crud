<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/DC_Comics_logo.svg.png')}}" width="60" alt="DC LOGO">
            </a>

            <ul class="navbar-nav flex-row">
                <li class="nav-item p-2">
                    {{-- @dd(Route::currentRouteName()) --}}
                    <a class="{{ Route::currentRouteName() === 'home' ? 'nav-link active' : 'nav-link' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item p-2">
                    <a class="{{ Route::currentRouteName() === 'comics.index' || Route::currentRouteName() === 'comics.show' ? 'nav-link active' : 'nav-link' }}" href="{{ route('comics.index') }}">Comics</a>
                </li>
            </ul>
        </div>
    </nav>
</header>




