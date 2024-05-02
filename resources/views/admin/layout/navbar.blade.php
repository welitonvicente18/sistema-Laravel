<nav id="navBar"class="shadow-sm">

    <ul>
        <li>
            <a href="{{route('user.edit', Auth::user()->id)}}">
                <i class="bi bi-person-fill"></i>{{ Auth::user()->name }}
            </a>
        </li>
        <li>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <i class="bi bi-box-arrow-right"></i>Sair
                </a>
            </form>
        </li>
    </ul>
</nav>