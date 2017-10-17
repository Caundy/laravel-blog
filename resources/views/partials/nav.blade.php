<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/posts">All posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/posts/1">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/posts/create">New post!</a>
            </li>
            @if(!Auth::check())
                <li class="nav-item ml-auto">
                  <a class="nav-link" href="/login" style="color: dodgerblue">
                      Log in!
                  </a>
                </li>
                <li class="nav-item ml-auto">
                  <a class="nav-link" href="/register" style="color: dodgerblue">
                      Register
                  </a>
                </li>
            @endif
            @if(Auth::check())
                <li class="nav-item ml-auto">
                  <a class="nav-link" href="contact.html" style="color: green">
                      {{ Auth::user()->name }}
                  </a>
                </li>
                <li class="nav-item ml-auto">
                  <a class="nav-link" href="/logout" style="color: dodgerblue">
                      Log out!
                  </a>
                </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>