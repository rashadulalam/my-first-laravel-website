<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('images/logo.png') }}" alt="" class="w-50" /></a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/services')}}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/portfolio')}}">Portfolio</a>
            </li>
            </ul>
        </div>
    </div>
</nav>