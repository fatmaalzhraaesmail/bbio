@extends('admin.master')
@section('content')
{{-- <canvas class="my-4 w-100"  width="100" height="5"></canvas> --}}

    <div class="container">
        <div class="row align-center mt-5">



            <div class="col-md-4 mb-3">
          <a href="{{route('algorithm.create')}}" class="btn btn-lg btn-block   text-white action">
          <img src="{{asset('dist/img/algorithm.jpg')}}" class="  mb-1" alt="">
          <i class="fas fa-plus"></i>
            Create New algorithm</a>
            </div>


            <div class="col-md-4 mb-3">
                <a href="{{route('algorithm.index')}}" class="btn btn-lg btn-block  text-white action">
                    <img src="{{asset('dist/img/adtargeting.2e16d0ba.fill-1200x630.png')}}"
                    class=" mb-1" alt="">
                    <i class="fas fa-eye"></i>
                    Display all algorithms</a>

            </div>
            <div class="col-md-4 mb-3">
                <a href="{{route('book.create')}}" class="btn btn-lg btn-block  text-white action">
                    <img src="{{asset('dist/img/book.jpg')}}"
                    class=" mb-1" alt="">
                    <i class="fas fa-plus"></i>
                    Create An Article</a>

            </div>










            </div><!-- row -->
        </div><!-- container -->





@endsection

