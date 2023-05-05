<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
        $post=Category::find($id);
        if(!$post){
            abort(404);
        }
        return view('posts.show',['post'=>$post]);
    }


    public function edit($id)
    {
        // return $id;
         // check if id exist in database than edit
         $post=Category::find($id);
         if(!$post){
            abort(404);
         }
        return view('posts.edit',compact('post'));

    }


    public function update(Request $request, $id)
    {
        // return 'your updated id is '.$id;

        $post=Category::find($id);
        if(!$post){
            abort(404);
        }
      // instance '$post' for update, 1 way of writing  $post->update($request)->all search for correct syntax
        $post->update([
            // request se title ki value coming
            'title' => $request->title,
            'description' => $request->description,
            'is_publish' => $request->is_publish

        ]);
        // redirect to same page
        return to_route('posts.index');

    }


    public function destroy($id)
    {
        //
    }

    public function here(){

    }
}



