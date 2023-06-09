<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
public function index()
    {
        // get all posts from database
        // if we want to pass data from database to view ,first we make variable to pass data
        // passing with array
        $categories= Category::all();

        return view('admin.category.view_categories',compact('categories'));
    }


    public function create()
    {
        return view('admin.category.insert_categories');
    }


    public function store(Request $request)
    {
        $request->validate([

            'cat_title' => 'required|max:255'
        ]);

        Category::create([
            'category_title' => $request->input('cat_title')
        ]);

//    $request->session()->flash('alert-success', 'post saved');


         return redirect()->route('categories.index');


        //return redirect()->route('post.create');
        // Session::flash('alert-success');

        // if(Session::get('alert-success')){
        //     return 'set';
        // }
        // else
        // {
        //     return 'no';
        // }

    }


    public function show($id)
    {
        // return $id;
        // check if id exist in database
        // $post=Category::find($id);
        // if(!$post){
        //     abort(404);
        // }
        // return view('posts.show',['post'=>$post]);
    }


    public function edit($category)
    {
        // return $category;
         // check if id exist in database than edit
         $category=Category::find($category);
         if(!$category){
            abort(404);
         }
        return view('admin.category.edit_categories',compact('category'));

    }


    public function update(Request $request, $id)
    {
        // return 'your updated id is '.$id;

        $category=Category::find($id);
        if(!$category){
            abort(404);
        }
      // instance '$post' for update, 1 way of writing  $post->update($request)->all search for correct syntax
        $category->update([
            // request se title ki value coming
            'category_title' => $request->input('cat_title')

        ]);
        // redirect to same page
        return to_route('categories.index');

    }


    public function destroy($id)
    {
        //
    }

    public function here(){

    }
}



