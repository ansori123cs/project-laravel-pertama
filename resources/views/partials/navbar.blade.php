<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <div class="container">
        <a class="navbar-brand fw-bold" href="/">My Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-3">
            <li class="nav-item">
              <a class="nav-link {{ ($title==="Home") ? 'active': '' }}"  href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title==="Posts") ? 'active': '' }}" href="/posts">Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title==="AboutMe") ? 'active': '' }}" href="/about">About Me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>