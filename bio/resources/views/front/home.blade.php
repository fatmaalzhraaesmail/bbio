@extends('front.master')
@section('content')


<main role="main">
<section class="mt-4 py-4 ">

    <div class="row">

        <div class="col-sm-12  ">

          <div id="myCarousel" class="carousel slide bg-dark" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner  ">
                <div class="carousel-item  active">
                    <img src="{{asset('dist/img/project4.jpeg')}}" class="d-block img-fluid  "  alt="...">
                </div>

                <div class="carousel-item  ">
                 <img src="{{asset('dist/img/Bioinformatics.jpg')}}" class="d-block img-fluid bg-dark bg-opacity-100" alt="...">
                 </div>

               <div class="carousel-item  ">
                 <img src="{{asset('dist/img/istockphoto-1297657670-612x612.jpg')}}" class="d-block img-fluid bg-dark bg-opacity-75" alt="...">
                </div>

            </div>
             <div class="carousel-caption d-block text-white text-sm-right  ">

                        <h4 class=" text-bold ">BioMedical DATA SCIENCE TRAINING</h4>
                        <h2 class="text-bold text-white">FOR EVERYONE</h2>
                        <h5 class="text-bold  ">Bioinformatics is an interdisciplinary
                             field that develops methods and software tools for understanding
                              biological data,
                             in particular when the data sets are large and complex..</h5>
            </div>




            <a class="carousel-control-prev " href="#myCarousel" role="button"  data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div><!-- col-sm-12 -->


    </div><!-- row -->
</section>




<section id="books" class="pt-4">
  <div class="container py-2">
    <h1 class=" text-center  mb-4"> Special <span>BOOKS</span> </h1>

 <div class="row ">


        <div class="swiper product-slider  ">

            <div class="swiper-wrapper mb-3  ">


        @forelse ($books as $book)
                    <div class="swiper-slide  ">

                <div class="card card1 mb-4 shadow-sm">
                    <div class="card-body ">

                        <?php
                        $wishData = DB::table('wishlist')->rightJoin('books','wishlist.book_id', '=', 'books.id')->where('wishlist.book_id', '=', $book->id)->get();
                         $count = App\Models\Wishlist::where(['book_id' => $book->id])->count();
                         ?>

                   <?php if($count=="0"){?>
                {!! Form::open(['route' => 'addToWishList', 'method' => 'post']) !!}
                          <div class=" align-content-center">
                           <input type="hidden" value="{{$book->id}}" name="book_id"/>
                           <button type="submit" class="btn bg-transparent card-button ">
                              <i class="fas fa-heart fa-2x text-center " style="color: rgb(197, 161, 161)"></i>
                          </button>
                          </div>
                          {!! Form::close() !!}

                          <?php } else {?>
                        <i class="fas fa-heart fa-2x text-center  card-button" style="color:rgb(121, 28, 44); "></i>
                             {{-- <h6 class="text-small ">Already Added to Wishlist <a href="{{url('/wishlist')}}"
                                 class="bg-transparent"  style="color:rgb(121, 28, 44);"> wishlist</a></h6> --}}
                        <?php }?>

                      <img src="{{url('images', $book->image)}}" class="card-img  w-100  " alt="card image cap">
                      <h5 class="card-text text-bold text-center">{{$book->book_name}}</h5>
                        <h5 class="mx-5 text-center">{{$book->book_author}}</h5>


                        <button type="button" class="btn btn-lg d-block btn-card w-100 ">
                            <a href="{{url('/book_details')}}/<?php echo $book->id; ?>">View book</a>
                        </button>

               </div><!-- card-body -->
             </div><!-- card -->
            </div><!-- swiper-slider -->

               @empty
            <h3>No Books</h3>

        @endforelse
    </div><!-- swiper-wrapper-->
    <div class="swiper-button-prev  "></div>
    <div class="swiper-button-next  "></div>
      <div class="swiper-pagination "></div>

        </div><!-- swiper -->
     </div><!-- row -->
  </div> <!-- container -->




 </section>













 <section id="algorithms">
      <div class="container py-5">
        <h1 class=" text-center mb-4 "> All <span>Algorithms</span> </h1>

     <div class="row ">


            @forelse ($algorithms as $algorithm)
                    <div class="col-md-4">
                    <div class="card card1 mb-4 ">
                        <div class="card-body ">

                          <img src="{{url('images', $algorithm->image)}}" class="card-img  w-100  " alt="card image cap">
                          <p class=" text-bold text-center">{{$algorithm->algorithm_name}}</p>

                          {{-- <p class="mx-5  text-bold text-center">{{$algorithm->algorithm_info}}</p> --}}
                            <div class="text-center mb-2 " style="color: rgb(116, 26, 26);">
                          <i class=" fas fa-star "></i>
                            <i class=" fas fa-star "></i>
                            <i class=" fas fa-star "></i>
                            <i class=" fas fa-star "></i>
                            <i class=" fas fa-star "></i>
                           </div>


                            <button type="button" class="btn btn-lg w-100 btn-card d-block ">
                                <a href="{{url('/algorithm_details')}}/<?php echo $algorithm->id; ?>">View algorithm</a>
                            </button>


                   </div><!-- card-body -->
                 </div><!-- card -->
                </div>

                   @empty
                <h3>No Algorithms</h3>

            @endforelse


    </div><!-- row -->
      </div> <!-- container -->




     </section>
</main>








<section id="about_Us" class="m-2">
    <div class="container">
        <h1 class=" text-center">About<span> BioInformatics</span></h1>
        <h3 class=" text-center pb-2">Why <span>Choose This Field ?</span></h3>
        <div class="row">

         <div class="col-md-6 col-sm-12">
             <img src="{{asset('dist/img/istockphoto-1218309340-612x612.jpg')}}" class="w-100 h-75 mt-5" alt="">
             </div><!-- col-md-6 -->

             <div class="col-md-6">
                 <h2 class="text-center text-bold  pt-4"> Overview Of BioInformatics</h2>
                 <p class="lead">Bioinformatics is the application of tools of computation and analysis to the capture and interpretation of biological data

                    Bioinformatics is essential for management of data in modern biology and medicine

                    The bioinformatics toolbox includes computer software programs such as BLAST and Ensembl, which depend on the availability of the internet

                    Analysis of genome sequence data, particularly the analysis of the human genome project, is one of the main achievements of bioinformatics to date

                    Prospects in the field of bioinformatics include its future contribution to functional understanding of the human genome, leading to enhanced discovery of drug targets and individualised therapy</p>


             <button class="btn btn-aboutUs  text-bold d-block mt-2 mx-auto px-5">Learn More</button>

            </div><!-- col-md-6 -->


        </div><!-- row -->
    </div><!-- container -->



</section>














<section class="review mt-5 mb-5" id="review">
    <div class="container">



    <h1 class="text-center"> Medical Informatics Engineering <span>review</span> </h1>

    <div class="row">

                      <div class="col-md-4">
                    <div class="card card2 mb-4 shadow-sm">
                        <div class="card-body text-center">
                            <img src="{{asset('dist/img/pic-1.png')}}" class="img-fluid rounded-circle w-50" alt="">
                            <p class="card-text text-center">Youssef</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <div class="d-flex justify-content-around">
                                <div class="p-3"> <a href="#"> <i class="fab fa-facebook fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-twitter fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-instagram fa-2x"></a></i> </div>
                            </div>


                        </div>
                    </div>
                </div>


                   <div class="col-md-4">
                   <div class="card card2 mb-4 shadow-sm">
                        <div class="card-body text-center">
                            <img src="{{asset('dist/img/person2.jpg')}}" class="img-fluid rounded-circle w-50" alt="">
                            <p class="card-text text-center">Shimaa</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <div class="d-flex justify-content-around">
                                <div class="p-3"> <a href="#"> <i class="fab fa-facebook fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-twitter fa-2x"></a></i> </div>
                                <div class="p-3"> <a href="#"> <i class="fab fa-instagram fa-2x"></a></i> </div>
                            </div>

                   </div><!-- card-body -->
                 </div><!-- card -->
                </div>





                     <div class="col-md-4">
                        <div class="card card2  mb-4 shadow-sm">
                            <div class="card-body text-center ">
                                <img src="{{asset('dist/img/pic-2.png')}}" class="img-fluid rounded-circle w-50 align-content-center" alt="">
                                <p class="card-text">Shimaaa</p>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                <div class="d-flex justify-content-around">
                                    <div class="p-3"> <a href="#"> <i class="fab fa-facebook fa-2x"></a></i> </div>
                                    <div class="p-3"> <a href="#"> <i class="fab fa-twitter fa-2x"></a></i> </div>
                                    <div class="p-3"> <a href="#"> <i class="fab fa-instagram fa-2x"></a></i> </div>
                                </div>

                       </div><!-- card-body -->
                     </div><!-- card -->
                     </div>

    </div><!-- row -->
      </div> <!-- container -->


</section>








@endsection





































@section('scripts')
<script>
    var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      800: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },


    },
    pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
//   scrollbar: {
//     el: '.swiper-scrollbar',
//   },
});

 </script>



@endsection







