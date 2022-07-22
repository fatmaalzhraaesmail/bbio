<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Algorithm;
use App\Models\Book;
use App\Models\Comment;
use Illuminate\Contracts\Session\Session;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::all();
        return view('Admin.book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.book.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('image','file');

        $this->validate($request,[
            'book_name'=>'required',
            'book_code'=>'required',
            'book_author'=>'required',
            'book_info'=>'required',
            'image'=>'image|mimes:png,jpg,JPG,jpeg|max:10000|required',
            // 'file'=>'file|mimes:png,jpg,JPG,jpeg|max:10000|required',
            'file' => 'file|required|mimes:pdf,xlx,csv,ppt,doc|max:20000',


        ]);



        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

         $file=$request->file;
        // if($file){
        // $fileName = $file->getClientOriginalName();

        // $file->move('uploads', $fileName);
        // $formInput['file']=$fileName;
        // }

        $fileName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = $fileName. '.' . $extension;
        $fullPath = $filename;
        $file->move('uploads', $fullPath);

        $formInput['file']=$fullPath;


        Book::create($formInput);
         return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function bookEditForm($id) {


        $books = Book::findOrFail($id);


        return view('admin.book.editBook', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::findOrFail($id)->delete();

        return redirect()->back();
    }
    public function search(Request $request)
    {
    $query = $request->get('query');

    $books = Book::where('book_name', 'LIKE', "%$query%")->get();
    return view('front.search', compact('books'));
    }
    public function addComment(Request $request, $id){
        $this->validate($request,[
            'comment'=>'required|max:400'
        ]);
        $books = Book::findOrFail($id);
        $comment=new Comment();
        $comment->user_id=auth()->user()->id;
        $comment-> book_id =$request->id;
        $comment->comment=$request->input('comment');
        $comment->save();
         return view('front.books_details', compact('books'));



    }

    public function editBooks(Request $request, $id) {


        $books = DB::table('books')->where('id', '=', $id)->get();

       $bookId = $request->id;

       $book_name = $request->book_name;

       $book_info = $request->book_info;




       DB::table('books')->where('id', $bookId)->update([
           'book_name' => $book_name,
           'book_info' => $book_info,

       ]);
      return view('admin.book.index', compact('books'));


   }
}
