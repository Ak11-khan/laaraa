<?php

namespace App\Http\Controllers;

use App\Models\UserTable;
use Illuminate\Http\Request;

class UserTableController extends Controller
{
    public function index()
    {
        // get all posts from database
        // if we want to pass data from database to view ,first we make variable to pass data
        // passing with array
        $posts = UserTable::all();

        return view('posts.index',['posts'=>$posts]);
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:15',
            'description' => 'required',
            'is_publish' => 'required'

        ]);
        UserTable::create([
            'title' => $request->title,
            'description' => $request->description,
            'is_publish' => $request->is_publish
        ]);

//    $request->session()->flash('alert-success', 'post saved');


         return redirect()->route('posts.create');


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
        $post=UserTable::find($id);
        if(!$post){
            abort(404);
        }
        return view('posts.show',['post'=>$post]);
    }


    public function edit($id)
    {
        // return $id;
         // check if id exist in database than edit
         $post=UserTable::find($id);
         if(!$post){
            abort(404);
         }
        return view('posts.edit',compact('post'));

    }


    public function update(Request $request, $id)
    {
        // return 'your updated id is '.$id;

        $post=UserTable::find($id);
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
