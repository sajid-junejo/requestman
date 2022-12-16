<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item {{ Request::is('request/create') ? 'active' : '' }}">
            <a class="nav-link" href="request/create">Insert Items</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>