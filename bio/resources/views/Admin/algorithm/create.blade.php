@extends('admin.master')
@section('content')

            <h1 class=" text-center">Add New Algorithm</h1>

         <div class="col-md-2" >
        </div>
             <div class="col-md-6 col-sm-9 d-block mx-auto ">
            <div class="panel-body  ">



            {!! Form::open(['route' => 'algorithm.store', 'method' => 'post', 'files' => true]) !!}

              <div class="form-group d-flex">
                    {{ Form::label('AlgorithmName', 'Name:') }}
                    {{ Form::text('algorithm_name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}

                       <span style="color:red">{{ $errors->first('algorithm_name') }}</span>
                </div>





                 <div class="form-group d-flex">
                    {{ Form::label('Description', 'Description:') }}
                    {{ Form::text('algorithm_info', null, array('class' => 'form-control')) }}

                       <span style="color:red">{{ $errors->first('algorithm_info') }}</span>
                </div>

           <div class="form-group d-flex">
                {{ Form::label('image', 'Image:') }}
                {{ Form::file('image',array('class' => 'form-control')) }}

                       <span style="color:red">{{ $errors->first('image') }}</span>

            </div>



                <div class="form-group d-flex">


                {{ Form::submit('Submit', array('class' => 'btn d-block  px-4 mt-3 mx-auto go text-white text-bold ')) }}
                </div>
     {!! Form::close() !!}

            </div>
            </div>
    {{-- </div><!-- row -->

</div><!-- container-fluid --> --}}


@endsection
