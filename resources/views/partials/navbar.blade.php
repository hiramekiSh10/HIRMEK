<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="/">D1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "about") ? 'active' : '' }}" href="/about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Mahasiswa") ? 'active' : '' }}" href="/Mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "profile") ? 'active' : '' }}" href="/profile">profile</a>
        </li>
          <div>
         </div>
        </li>
      </ul>
    </div>
  </div>
</nav>