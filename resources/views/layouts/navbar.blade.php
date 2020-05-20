   <!-- Navbar -->
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed">
    <a class="navbar-brand" href="{{ url('/')  }}">Home</a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    @php( $about = DB::table('abouts')->get())
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/portofolio') }}">Portofolio </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/skills') }}">Skills </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        </li>
        <li class="nav-item">
            @foreach($about as $s_about)
          <a class="nav-link" href="{{ $s_about->resume ?? '#'}}">My resume</a>
          @endforeach
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar -->
