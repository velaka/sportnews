<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home')}}">Sport News</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home')}}">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>

          <li class="nav-item">
              <a class="nav-link" href="{{url('/contact')}}">Contact</a>
          </li>
        @if (Auth::check())
              <li class="nav-item">
                <a class="nav-link" href="{{route('posts.create')}}">Create Post</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">{{Auth::user()->name}}</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('logout')}}">Log out</a>
              </li>

            @else  
              <li class="nav-item">
                <a class="nav-link" href="{{url('/register')}}">Sign up</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('/login')}}">Log in</a>
              </li>
            @endif

      </ul>
    </div>
  </div>
</nav>