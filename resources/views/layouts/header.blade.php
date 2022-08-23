<header>
    <div class="card ustnav">
        <div class="card-body menu">
            <a href="{{route('dashboard')}}"><img src="{{URL::asset('images/logo.svg')}}" alt="logo" width="70px" class="mr-3"></a>
            <h1 class="header-menu-h1">Note Application</h1>
            
            @if (Auth::check())
            <script src="{{URL::asset('js/logout.js')}}"></script>
            <div class="logout-div">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>
                <img src="{{URL::asset('images/logout.svg')}}" alt="logout" width="25px" class="logout-img ml-1"  onclick="exit()" style="cursor: pointer;">
            </div>  
            @else
            <div class="noauthdiv">
                <ul class="d-flex nav text-center mb-3">
                    <li><a href="/login"><button type="button" class="btn btn-outline-primary ml-2">Login</button></a></li>
                    <li><a href="/register"><button type="button" class="btn btn-outline-primary ml-2">Register</button></a></li>
                </ul>
            </div>
            @endif
        </div>
    </div>
</header>