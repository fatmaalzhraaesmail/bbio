
 <nav class="navbar navbar-expand-md navbar-dark bg-dark Nav fixed-top ">
      <div class="container">
        <img src="{{asset('dist/img/1422840.png')}}" class="logo" alt="">

    <a href="{{'/'}}" class="navbar-brand">
         <span class="brand">Bio Informatics</span>
    </a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav main-nav mx-auto">
        <li class="nav-item ">
          <a class="nav-link " href="{{url('/')}}">Home </a>
        <li class="nav-item">
          <a class="nav-link  " href="{{url('/')}}#books">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{url('/')}}#algorithms">Algorithms</a>
        </li>



        <li class="nav-item">
            <a class="nav-link " href="{{url('/')}}#review">Review</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{url('/wishlist')}}">WhisList</a>
          </li>










    </ul>




     {!! Form::open(['route' => 'search']) !!}

    {!! Form::text('query',) !!}
    {!! Form::submit('Search' ) !!}
    {!! Form::close() !!}




    <ul class="navbar-nav  ">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
     {{-- <img src="uploads\avatars\{{ Auth::user()->avatar }}"  class="img-fluid rounded-circle" alt=""> --}}

     <img src="../uploads/avatars/{{ Auth::user()->avatar }}"  class=" rounded-circle mr-5 " style="width: 43px; height:40px;" alt="">
                        {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest

    </ul>



















    </div><!-- container -->
</nav>










