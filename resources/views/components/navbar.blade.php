<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mr-5" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>       
          </li>          
          <li class="nav-item">           
            <a class="nav-link active" aria-current="page" href="/about">About</a>
          </li>          
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/create">Add Post</a>
          </li>          
          <li class="nav-item">
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="nav-link px-3 bg-dark border-0">Logout</button>
            </form>
          </li>          
        </ul>
       
      </div>
    </div>
  </nav>