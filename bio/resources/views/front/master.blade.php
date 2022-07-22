
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Bioinformatics</title>

    <!-- Bootstrap core CSS -->

    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('dist/css/album.css')}}" rel="stylesheet">
     <link href="{{asset('dist/css/swiper-bundle.min.css')}}" rel="stylesheet">

     <link href="{{asset('dist/css/animate.css')}}" rel="stylesheet">
  </head>
  <body>

    @include('front.menu')


     @yield('content')

<canvas class="my-4 w-100"  width="100" height="7"></canvas>
<section class=" mb-0">
<footer class=" ">

    <div class="container mb-0 pb-2">
        <div class="row mb-0 pt-0">
            <div class="col-md-6">
                <ul class="footer-nav pt-3">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Shop </a></li>
                    <li><a href="#">Menu </a></li>
                    <li><a href="#">Wish List </a></li>
                    <li><a href="#">Order Now </a></li>
                </ul>
            </div><!-- footer-nav -->
            <div class="col-md-3 ">
                <p class="text-center pt-3">Copyright &copy by fatma</p>

            </div>
            <div class="col-md-3">
                <ul class="social-nav pt-2">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter "></i></a></li>
                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>



        </div><!-- row -->

    </div><!-- container -->

</footer>
</section>
<script src="{{asset('dist/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/js/bootstrap.js')}}"></script>
<script src="{{asset('dist/js/jquery.js')}}"></script>
<script src="{{asset('dist/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('dist/js/wow.min.js')}}"></script>
@yield('scripts')

<script>
new WOW().init();
</script>
  </body>
</html>
