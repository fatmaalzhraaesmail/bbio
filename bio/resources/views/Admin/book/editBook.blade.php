@extends('admin.master')


@section('content')

 <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

<h1 class=" text-center">Books</h1>
  <div class="row">

              <div class="col-md-8 mx-auto">

                {!! Form::model($books, ['method'=>'post', 'action'=> ['App\Http\Controllers\BooksController@editBooks', $books->id], 'files'=>true]) !!}



                <div class="form-group d-flex">
                 {!! Form::label('book_name', 'Name:') !!}
                 {!! Form::text('book_name', null, ['class'=>'form-control'])!!}
               </div>




                <div class="form-group d-flex">
                 {!! Form::label('book_code', 'book Code:') !!}
                 {!! Form::text('book_code', null, ['class'=>'form-control'])!!}
               </div>

               <div class="form-group d-flex">
                {{ Form::label('file', 'File:') }}
                {{ Form::file('file',array('class' =>'form-control')) }}

                <span style="color:red">{{ $errors->first('file') }}</span>

            </div>
               <div class="form-group d-flex">
                {{ Form::label('image', 'Image:') }}
                {{ Form::file('file',array('class' =>'form-control')) }}

                <span style="color:red">{{ $errors->first('image') }}</span>

            </div>






                <img class="card-img-top img-fluid" src="{{url('images',$books->image)}}" style="width:50px" alt="Card image cap">



               <div class="form-group d-flex">
                 {!! Form::label('book_info', 'book Info:') !!}
                 {!! Form::text('book_info', null, ['class'=>'form-control'])!!}
               </div>



               <div class="form-group d-flex">

            {{ Form::submit('Update', array('class' => 'btn go text-white mx-auto d-block mt-1 px-5 btn-lg')) }}
               </div>
            {!! Form::close() !!}

              </div><!-- col-md-4 -->










 </div><!-- row -->



 </main>



  @endsection
