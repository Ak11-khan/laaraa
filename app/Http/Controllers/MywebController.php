<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myweb;

class MywebController extends Controller
{

    // compact,with,array
    public function index()
    {
        $users = Myweb::all();
        // $course="ms office";
        // $name="john";
        // return view('user/index',compact('course','name'));
        // return view('user.index')->with(['emp1'=>'john','emp2'=>'hannah','emp3'=>'farah']);

        // return view('user.index',['pro1'=>'hp','pro2'=>'sam','pro3'=>'iphone']);

    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        Myweb::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    public function edit(Myweb $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request,Myweb $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|min:6'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password
        ]);

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }

    public function destroy(Myweb $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }
}
