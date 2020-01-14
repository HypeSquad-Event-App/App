<nav class="navbar is-transparent is-bold" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
                <img src='{{ asset('img/discord_logo.png') }}'>
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
               data-target="events">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="events" class="navbar-menu">

            <a class="navbar-item" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="navbar-item" href="{{ route('new_event') }}">Event manager</a>
            <a class="navbar-item" href="{{ route('map') }}">Map</a>

            <div class="navbar-end">
                @auth

                    <div class="navbar-item has-dropdown is-hoverable">
                        <div class="navbar-link has-icon">
                            <span class="icon"><i class="fab fa-discord fa-fw"></i></span>
                            <span>{{ Auth::user()->username }}</span>
                        </div>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="{{ route('logout') }}">
                                <div class="navbar-content">
                                    <p>Logout</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @else
                    <a class="navbar-item" href="{{ route('login') }}">
                        <img src="{{ asset('img/language.png') }}" height="28">
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>

@section ('js')
    <script type="text/javascript">
        $(function () {
            $('.navbar-burger').click(function () {
                $(".navbar-burger").toggleClass("is-active")
                $(".navbar-menu").toggleClass("is-active")
            })
        })
    </script>
@endsection
