<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top border-bottom-black">
  <a class="navbar-brand" href="/">
    Choral
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarDropdown">
    <ul class="navbar-nav">
      <li class="nav-item <?php if ($activeLink == 1) echo 'active'; ?>">
        <a class="nav-link" href='/'>Home</a>
      </li>
      <li class="nav-item <?php if ($activeLink == 2) echo 'active'; ?>">
        <a class="nav-link" href='/store.php'>Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='contact.php'>Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='author.php'>Author</a>
      </li>
    </ul>
  </div>
</nav>
