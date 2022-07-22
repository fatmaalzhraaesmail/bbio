@extends('front.master')
@section('content')


<main role="main">
    <canvas class="my-4 w-100"  width="100" height="3"></canvas>

<section id="dishes">

    <div class="album py-5 ">
      <div class="container">
        <h1 class=" text-center ">Search<span>Books </span> </h1>

        <div class="row">
@forelse ($books as $book)

<div class="col-md-4 ">
  <div class="card card1 mb-4 shadow-sm">


   <div class="card-body">
      <img src="{{url('images', $book->image)}}" class="card-img-top " alt="card image cap">
      <h5 class="card-text text-bold text-center">{{$book->book_name}}</h5>
      <h5 class="mx-5 text-center">{{$book->book_author}}</h5>


          <button type="button" class="btn btn-card w-100 btn-lg ">
              <a href="{{url('/book_details')}}/<?php echo $book->id; ?>"
                  class=" text-white ">View Book</a>
          </button>




    </div><!-- card-body -->
  </div><!-- card -->
</div><!-- col-md-4 -->
@empty
<h3>No Books</h3>
@endforelse
</div><!-- row -->

</div><!-- container -->
</div>
</section>
</main>


@endsection






