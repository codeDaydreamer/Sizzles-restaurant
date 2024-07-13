<nav class="navbar">
    <div class="logo">
        <a href="{{ route('home') }}">
            <span class="logo-text">Sizzles</span> <!-- Replace with your logo text -->
        </a>
    </div>
    <ul class="nav-links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('menu') }}">Menu</a></li>
        <li><a href="{{ route('book.table') }}">Book a Table</a></li>
        <li><a href="{{ route('contact') }}">Contact Us</a></li>
    </ul>
</nav>
