<aside class="sidebar">
    <nav>
        <ul>
            <li><a href="#"><span>&#9776;</span></a></li>
            <li><a href="#"><span>&#8962;</span></a></li>
            <li><a href="#"><span>&#128100;</span></a></li>
            <li><a href="#"><span>&#128179;</span></a></li>
            <li><a href="#"><span>&#128188;</span></a></li>
            <li><a href="#"><span>&#9881;</span></a></li>
        </ul>
    </nav>
    <form method="POST" action="{{ route('logout') }}" class="logout-form">
        @csrf
        <button type="submit" class="logout-btn" title="Logout">
            <span style="font-size: 28px;">&#128682;</span>
        </button>
    </form>
</aside>