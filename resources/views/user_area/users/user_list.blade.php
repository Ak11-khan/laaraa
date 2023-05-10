

@extends('layouts.adminlayout')
 @section('content')
 <div class="container">
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<h3 class="text-center text-success">All users</h3>
@if(count($users)>0)
<table class="center">

<thead class="bg-info">
<tr>
<th>Ser No</th>
<th>Username</th>
<th>User Email</th>
<th>User Image</th>
<th>User Address</th>
<th>User Mobile</th>
<th>Delete</th>
</tr>
</thead>
<tbody class='bg-secondary text-center text-light'>

@foreach($users as $user)

 <tr>
  <td> {{ $loop->iteration }}</td>
  <td> {{ $user->username }} </td>
  <td> {{ $user->email }}  </td>
  <td> <img src='{{ asset('storage/image/users/'.$user->user_image) }}' class='my-1 image_peo' alt=' {{ $user->username }}'></td> </td>
  <td> {{ $user->user_address }}  </td>
  <td> {{ $user->user_mobile}}  </td>
    <td><a href='' class='text-light'>
<i class='fa-solid fa-trash'></i></a></td>
 </tr>

 @endforeach
</tbody>
</table>
@else
  <p>User Already exist .</p>
@endif

</div>
@stop
