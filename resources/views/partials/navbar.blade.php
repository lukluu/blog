<nav class="navbar navbar-expand-lg text-white bg-info">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">MVC Blog</a>
        <div class="collapse navbar-collapse  d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav text-light">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'home') ? 'active fw-medium' : '' }} " href="/">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link {{ ($active === 'about') ? 'active fw-medium' : '' }}" href="/about">About</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'posts') ? 'active fw-medium' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'categories') ? 'active fw-medium' : '' }}" href="/categories">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'author') ? 'active fw-medium' : '' }}" href="/authors">Author</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link {{ ($active === 'saya') ? 'active fw-medium' : '' }}" href="/saya">Saya</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>