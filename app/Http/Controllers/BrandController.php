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
        // $brand=Brand::find($id);
        // if(!$post){
        //     abort(404);
        // }
        // return view('posts.show',['brand'=>$brand]);
    }


    public function edit($id)
    {
        // return $id;
         // check if id exist in database than edit
         $brand=Brand::find($id);
         if(!$brand){
            abort(404);
         }
        return view('admin.brands.edit_brands',compact('brand'));


    }


    public function update(Request $request, $id)
    {
        // return 'your updated id is '.$id;
        //taking about only 1 brand thats why variable is $brand
        // $brand=Brand::find($id);
        // but for now $brands
        $brand=Brand::find($id);
        if(!$brand){
            abort(404);
        }
      // instance '$post' for update, 1 way of writing  $post->update($request)->all search for correct syntax
        $brand->update([
            // request se title ki value coming
            'brand_title' => $request->input('brand_title')

        ]);
        // redirect to same page
        return to_route('brands.index');

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



