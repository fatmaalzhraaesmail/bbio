<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Algorithm;
use App\Models\Book;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $algorithms=Algorithm::all();
        $books=Book::all();
        return view('front.home',compact('books','algorithms'));
    }

    public function algorithm_details($id)
    {
 $algorithms=Algorithm::findOrFail($id);
  return view('front.algorithms_details', compact('algorithms'));


    }
    public function book_details($id)
    {
      $books=Book::findOrFail($id);
      return view('front.books_details', compact('books'));


    }
    public function wishlist(Request $request) {

        $wishList = new Wishlist;
        $wishList->user_id = Auth::user()->id;
        $wishList->book_id = $request->book_id;

        $wishList->save();

        $books = DB::table('books')->where('id', $request->book_id)->get();

          return back();

    }

    public function View_wishList() {

        $books = DB::table('wishlist')->leftJoin('books', 'wishlist.book_id', '=', 'books.id')->get();
        return view('front.wishList', compact('books'));
    }

    public function removeWishList($id) {

        DB::table('wishlist')->where('book_id', '=', $id)->delete();

        return  back()->with('msg', 'Item Removed from Wishlist');
    }

   




     }


