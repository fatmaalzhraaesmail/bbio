@extends('front.master')
@section('content')


<section>
<div class="container">

    <canvas class="my-4 w-100"  width="100" height="3"></canvas>


  <div class="row">
    <h1 class=" text-bold  text-center">Details Page</h1>

        <div class="col-sm-6">

            <img src="{{url('images',$books->image)}}" class="h-70 w-50" alt="cardImagecap" >
        </div><!-- col-sm-6 -->

        <div class="col-sm-6">
            <a href="/" class="" style="text-decoration: none;"><h3 >Go Back</h3></a>
            <h2><?php echo ucwords($books->book_name) ?></h2>
            <h5>Details:  {{$books->book_info}}</h5>
            <h5>Book Author:  {{$books->book_author}}</h5>
<br><br>

        </div><!-- col-sm-6 -->
    </div><!-- row -->
</div><!-- container -->
</section>

<section id="iFrame">


        <div class="container mt-3">
            <h2 class="text-center mb-2 ">You Can See Article.</h2>
        <iframe src="{{url('uploads' , $books->file) }}" height="700" width="900" class="mx-auto" frameborder="0"></iframe>
        </div><!-- container -->
</section>

<section class="mt-4 pt-4">

    <div class="container">
        <h2 class="text-center ">Display Comments</h2>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <table class="table" style="background-color: rgb(167, 146, 146);">
                <thead>
                    <tr>
                        <th>comment Id</th>
                        <th>user Name</th>
                        <th>user Email</th>
                        <th>comment</th>
                    </tr>

                </thead>

                <tbody style="color: rgb(77, 16, 16);" >



            @forelse( $books->comments as $comment )
            <tr>
           <td> <strong class="">{{ $comment->id }}</strong></td>
           <td> <strong class="">{{ Auth::user()->name}}</strong></td>
           <td><p class="text-bold "> {{Auth::user()->email}}</p></td>
            <td><h5 class="text-bold ">{{$comment->comment}}</h5></td>
             </tr>
             </tbody>


         @empty
    <h3 class="text-danger text-center">No Comments Yet .</h3>

    @endforelse
</table>


        </div><!-- col-md-10 -->
    </div><!-- row -->

    </div><!-- container -->


</section>


{{-- <ul>
    @foreach($comments as $comment)
        <li>{{ $comment->comment_text }}</li>
        @if ($comment->sender) // or other relation
            <a> {{$comment->sender->name}}<a> // relation name and column name must be fix yourself
        @endif
    @endforeach
    </ul> --}}

<div class="container my-4">
    <div class="row">

<h2 class=" text-center">You Can Add Comment Here</h2>
        <div class="col-md-8 col-sm-9 d-block mx-auto ">
            <div class="panel-body  ">


                {!! Form::open(['method'=>'post', 'route'=>['comment',$books->id]]) !!}
              <div class="form-group d-flex mb-2">
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}

                </div>


                <div class="form-group d-flex mb-2">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, array('class' => 'form-control')) }}

                </div>

                <div class="form-group d-flex mb-2">
                    {{ Form::label('comment', 'Comment:') }}
                    {{ Form::textarea('comment', null, array('class' => 'form-control','rows'=>'5' )) }}

                </div>


                <div class="form-group d-flex">
                {{ Form::submit('Add Comment', array('class' => 'btn d-block go px-4 mt-3 mx-auto go text-white text-bold ')) }}
                </div>

            {!! Form::close() !!}

            </div>

        </div><!-- col-md-8 -->
    </div><!-- row -->

</div><!-- container -->


@endsection
