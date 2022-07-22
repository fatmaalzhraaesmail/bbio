@extends('front.master')

@section('content')

<canvas class="my-4 w-100"  width="100" height="3"></canvas>



<section>
    <div class="container">
        <div class="row">
           

                    <h2 class="title text-center  mb-3">
                        <?php if (isset($msg)) {
                            echo $msg;
                        } else { ?>
                            WishList  <span>Itemes</span> 
                                
                        <?php } ?> 
                    </h2>

                    <?php if ($books->isEmpty()) { ?>
                        <h2 class=" text-danger text-center">sorry, books not found</h2>
                       <?php } else { ?>

                        @foreach($books as $book)
                        <div class="col-md-4">
                          
                 <a href="{{url('/books_details')}}">
            <img src="{{url('images',$book->image)}}" class="h-50 w-100" alt="" />
                     </a>
                         </div>

                         <div class="col-md-4 d-block text-center">
                          <h2 class="text-success">Author<?php echo $book->book_author; ?></h2>

                        <h4 ><a class="text-success" href="{{url('/books_details')}}"><?php echo $book->book_name; ?></a></h4>
                        </div><!-- col-md-4 -->

                        <div class="col-md-4">
                   <a href="{{url('/')}}/removeWishList/{{$book->id}}" style="color:red" class="btn btn-default btn-block"><i class="fa fa-minus-square"></i>Remove from wishlist</a></li>
                           </div><!-- col-md-4 -->

                               
                        @endforeach

                              
<?php } ?>
                                 
                      



             
    </div>
</div>
</section>















@endsection

