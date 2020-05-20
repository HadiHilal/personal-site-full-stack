<ul class="nav">
    <li class="nav-item">
        <a class="sidebar-btn"> <i class="fas fa-bars"></i> </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('myhome') }}"><i class="fas fa-home"></i> Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('user.index') }}"><i class="fas fa-tools"></i> Account Settings </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('message.index') }}"><i class="fas fa-envelope-open"></i> Messages </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt"></i>  {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>

</ul>
