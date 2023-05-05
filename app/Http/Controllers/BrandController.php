<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    // compact,with,array
    public function index()
    {
        // get all posts from database
        // if we want to pass data from database to view ,first we make variable to pass data
        // passing with array
        $brands= Brand::all();

        return view('admin.brands.view_brand',compact('brands'));
    }


    public function create()
    {


        return view('admin.brands.insert_brand');
    }


    public function store(Request $request)
    {
        $request->validate([

            'brand_title' => 'required|max:255'
        ]);

        Brand::create([
            'brand_title' => $request->input('brand_title')
        ]);


        // Flash a success message to the session
    session()->flash('success', 'Brand created successfully!');



         return redirect()->route('brands.index');




    }


    public function show($id)
    {
        // return $id;
        // check if id exist in database
        // $post=Brand::find($id);
        // if(!$post){
        //     abort(404);
        // }
        // return view('posts.show',['post'=>$post]);
    }


    public function edit($id)
    {
        // return $id;
         // check if id exist in database than edit
        //  $post=Brand::find($id);
        //  if(!$post){
        //     abort(404);
        //  }
        // return view('posts.edit',compact('post'));

    }


    public function update(Request $request, $id)
    {
        // return 'your updated id is '.$id;

        // $post=Brand::find($id);
        // if(!$post){
        //     abort(404);
        // }
      // instance '$post' for update, 1 way of writing  $post->update($request)->all search for correct syntax
        // $post->update([
            // request se title ki value coming
            // 'title' => $request->title,
            // 'description' => $request->description,
            // 'is_publish' => $request->is_publish

        // ]);
        // redirect to same page
        // return to_route('posts.index');

    }


    public function destroy($id)
    {
        //
    }

    public function here(){

    }

    public function insertBrand(Request $request)
{
  $brand_title = $request->input('brand-title');

  // select data from database
  $select_query = DB::table('brands')->where('brand_title', '=', $brand_title)->get();

  $number = count($select_query);

  if ($number > 0) {
    return redirect()->back()->with('error', 'This brand already exists in the database.');
  } else {
    DB::table('brands')->insert([
      'brand_title' => $brand_title,
    ]);
    return redirect()->back()->with('success', 'Brand inserted successfully.');
  }
}
}



