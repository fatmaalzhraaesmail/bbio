<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Algorithm;
use App\Models\Book;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class AlgorithmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $algorithms=Algorithm::all();
        return view('Admin.algorithm.index',compact('algorithms'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.algorithm.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('image');

        $this->validate($request,[
            'algorithm_name'=>'required',
            'algorithm_info'=>'required',
            'image'=>'image|mimes:png,jpg,JPG,jpeg|max:10000|required',

        ]);



        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

        Algorithm::create($formInput);
         return redirect()->route('algorithm.index');
        //return redirect()->back();

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

    public function algorithmEditForm($id) {


        $algorithms = Algorithm::findOrFail($id);


        return view('admin.algorithm.editAlgorithm', compact('algorithms'));
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
        Algorithm::findOrFail($id)->delete();

         return redirect()->back();
    }

    public function editAlgorithms(Request $request, $id) {


        $algorithms = DB::table('algorithms')->where('id', '=', $id)->get();

       $algorithmId = $request->id;

       $algorithm_name = $request->algorithm_name;

       $algorithm_info = $request->algorithm_info;




       DB::table('algorithms')->where('id', $algorithmId)->update([
           'algorithm_name' => $algorithm_name,
           'algorithm_info' => $algorithm_info,

       ]);
      return view('admin.algorithm.index', compact('algorithms'));


   }
}
