<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand logo" href="{{ route('home') }}">
            Nasza<span> witryna www</span>
            <!-- <img src="images/logo.png" alt=""> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? "active" : "" }}" href="{{ route('home') }}">Start</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? "active" : "" }}" href="{{ route('about') }}">O nas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('services') ? "active" : "" }}" href="{{ route('services') }}">Usługi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portfolio.html">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>