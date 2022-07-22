@extends('admin.master')


@section('content')





<h1 class="text-center ">Books</h1>



        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Book Image</th>
                    <th>Book Id</th>
                    <th>Book Name</th>
                    <th>Book Code</th>
                    <th>Book Author</th>
                    <th style="width:10px;">Book File</th>
                    <th>Book Info</th>

                    <th>Update Book</th>
                    <th>Delete Book</th>
                </tr>
            </thead>

            <tbody>


               @foreach($books as $book)
                <tr>
                    <td style="width:50px; border: 1px solid #333;"><img class="card-img-top img-fluid" src="{{url('images',$book->image)}}" width="50px" alt="Card image cap"></td>
                    <td style="width:50px;">{{$book->id}} </td>
                    <td style="width:50px;">{{$book->book_name}} </td>
                    <td style="width:20px;">{{$book->book_code}} </td>
                    <td style="width:20px;">{{$book->book_author}} </td>
                    <td style="width:50px;">{{$book->file}} </td>
                    <td style="width:400px;">{{$book->book_info}} </td>




                    <td><a href="{{route('bookEditForm',$book->id)}}" class="btn btn-success btn-small">Edit</a></td>

                    {!! Form::open(['method'=>'DELETE', 'action'=> ['App\Http\Controllers\BooksController@destroy', $book->id]]) !!}


                      <td>  {!! Form::submit('Delete book', ['class'=>'btn btn-danger col-sm-12']) !!}</td>

                    {!! Form::close() !!}
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>



 @endsection
