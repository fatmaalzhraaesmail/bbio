@extends('admin.master')


@section('content')





<h1 class="text-center">Algorithms</h1>


        <table class="table table-dark table-responsive">
            <thead>
                <tr>
                    <th>Algorithm Image</th>
                    <th>Algorithm Id</th>
                    <th>Algorithm Name</th>
                    <th>Algorithm Info</th>

                    <th>Update Algorithm</th>
                    <th>Delete Algorithm</th>
                </tr>
            </thead>

            <tbody>


               @foreach($algorithms as $algorithm)
                <tr>
                    <td style="width:50px; border: 1px solid #333;"><img class="card-img-top img-fluid" src="{{url('images',$algorithm->image)}}" width="50px" alt="Card image cap"></td>
                    <td style="width:50px;">{{$algorithm->id}} </td>
                    <td style="width:50px;">{{$algorithm->algorithm_name}} </td>
                    <td style="width:400px;">{{$algorithm->algorithm_info}} </td>




                    <td><a href="{{route('algorithmEditForm',$algorithm->id)}}" class="btn btn-success btn-small">Edit</a></td>

                    {!! Form::open(['method'=>'DELETE', 'action'=> ['App\Http\Controllers\AlgorithmsController@destroy', $algorithm->id]]) !!}


                      <td>  {!! Form::submit('Delete algorithm', ['class'=>'btn btn-danger col-sm-12']) !!}</td>

                    {!! Form::close() !!}
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>



 @endsection
