@extends('admin.master')


@section('content')

 <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <canvas class="my-4 w-100"  width="100" height="2"></canvas>

<h1 class="text-center ">Algorithms</h1>
  <div class="row">

              <div class="col-md-8 text-center mx-auto">

                {!! Form::model($algorithms, ['method'=>'post', 'action'=> ['App\Http\Controllers\AlgorithmsController@editAlgorithms', $algorithms->id], 'files'=>true]) !!}


                <img class="card-img-top w-75 h-50 mb-2  img-fluid" src="{{url('images',$algorithms->image)}}"  alt="Card image cap">


                <div class="form-group d-flex">
                 {!! Form::label('algorithm_name', 'Name:') !!}
                 {!! Form::text('algorithm_name', null, ['class'=>'form-control'])!!}
               </div>






               <div class="form-group d-flex">
                 {!! Form::label('algorithm_info', 'algorithm Info:') !!}
                 {!! Form::text('algorithm_info', null, ['class'=>'form-control'])!!}
               </div>




            {{ Form::submit('Update', array('class' => 'btn go text-white mt-1 d-block btn-lg px-4 mx-auto')) }}
   {!! Form::close() !!}

              </div><!-- col-md-4 -->










 </div><!-- row -->



 </main>



  @endsection








