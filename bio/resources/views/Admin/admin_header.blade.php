<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top navBar mx-auto">
        <div class="container">

      <a class="navbar-brand" href="#">
          <i class="fas fa-users-cog fa-2x text-warning logo"></i>
        <span class="brand">Admin</span>
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav main-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('admin.index')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('algorithm.create')}}">Add Algorithmes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{route('algorithm.index')}}">Edit algorithmes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('book.create')}}">Add New Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('book.index')}}">Edit Books</a>
          </li>
        </ul>

      </div>
    </div><!-- container -->
    </nav>
  </header>
