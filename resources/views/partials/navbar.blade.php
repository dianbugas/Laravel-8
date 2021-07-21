<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">Blog Ku</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ $title === 'Home' ? 'active' : '' }}">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Blog' ? 'active' : '' }}" href="blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="about">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
