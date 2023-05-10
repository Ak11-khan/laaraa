


{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Admin Area</title>
 <!-- bootstrap css link -->
 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
 <!-- font awesome  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}



 @extends('layouts.adminlayout')
 @section('content')
 <h3 class="text-center text-success">All Categories</h3>
<table class="center">

<thead class="bg-info text-center">
  <tr>
    <th>Ser #</th>
    <th>Category Title</th>
    <th>Edit</th>
    <th>Delete</th>
     </tr>
</thead>
<tbody class="bg-secondary text-light text-center">
    @foreach($categories as $category)
<tr>
 <td>{{ $loop->iteration }}</td>
 <td>{{ $category->category_title }}</td>
 <td><a href='{{ route('categories.edit',$category->id) }}' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
<td><a href='#' class='text-light'><i class='fa-solid fa-trash'></i></a></td>


</tr>
<!-- for including all number and all in php  -->

@endforeach
</tbody>
</table>
@stop
