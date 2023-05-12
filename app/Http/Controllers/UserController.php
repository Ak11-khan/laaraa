<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Debug\Dumper;

class UserController extends Controller
{


     public function index()
    {

        $users= User::all();

        return view('user_area.users.user_list',compact('users'));


    }

     public function create()
     {


         return view('user_area.users.user_registration');
     }


     public function store(Request $request)
     {
        // ($request->all());
        // $request->validate([
        //     'input_name' => 'unique:table_name,column_name',
        // ]);

        $validated =  $request->validate([
            'user' => 'required|unique:users,username',
            'user_email' => 'required|unique:users,email',
            // Other validation rules...
        ]);

        // dd($validated);
        // $data = $request->all();
        // var_dump($data['user']);

        $userEx = User::where('username', $request->user)->first();

    //    print_r($request->user);
        // ->orWhere('email', $request->user_email)


        // $userExists = User::where('username', 'meg')->first();

       // // var_dump($userExists);
        if ($userEx) {
        // // return redirect()->back()->with('error', 'Username or email already exists.');
        session()->flash('error', 'Username or email already exists.');

        return redirect()->route('users.create');
        } else {

        $user = new User;

        $user->username = $request->user;
        $user->email = $request->user_email;
        $user->password = $request->user_pass;
                     // image

        if($request->hasFile('user_img')){
            $destination='public/image/users';
            $images=$request->file('user_img');
            $image_names=$images->getClientOriginalName();
            $paths=$request->file('user_img')->storeAs($destination,$image_names);
            $user->user_image=$image_names;
        }
        $user->user_address=$request->user_add;
        $user->user_mobile=$request->user_contact;


        $user->save();

         // Flash a success message to the session
        //  session()->flash('success', 'User created successfully!');

        session()->flash('success', 'User created successfully!');

          return redirect()->route('users.index');

        }


     }


     public function show($id)
     {
         // return $id;
         // check if id exist in database
         // $User=User::find($id);
         // if(!$post){
         //     abort(404);
         // }
         // return view('posts.show',['User'=>$User]);
     }


     public function edit($id)
     {
         // return $id;
          // check if id exist in database than edit
        //   $User=User::find($id);
        //   if(!$User){
        //      abort(404);
        //   }
        //  return view('admin.Users.edit_Users',compact('User'));


     }


     public function update(Request $request, $id)
     {
         // return 'your updated id is '.$id;
         //taking about only 1 User thats why variable is $User
         // $User=User::find($id);
         // but for now $Users
        //  $User=User::find($id);
        //  if(!$User){
        //      abort(404);
        //  }
       // instance '$post' for update, 1 way of writing  $post->update($request)->all search for correct syntax
        //  $User->update([
             // request se title ki value coming
            //  'User_title' => $request->input('User_title')


         // redirect to same page
        //  return to_route('Users.index');

     }


     public function destroy($id)
     {
         //
     }

     public function here(){

     }

}
