<header class="nav">
    <div class="nav__left">
        <a href="#"><img class="nav__logo" src="{{ asset('images/logo.png') }}" alt="logo"></a>
        <nav class="nav__links">
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Work</a>
            <a href="/htmls/contact.html">Contact</a>
        </nav>
    </div>

    @auth
        <!-- Links for authenticated users -->
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <img src="{{ asset('icons/account.svg') }}" alt="Account Icon">
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @else
        <!-- Links for guest users -->
        <a href="{{ route('login') }}"><img src="{{ asset('icons/account.svg') }}" alt="Account Icon"></a>
    @endauth
</header>
