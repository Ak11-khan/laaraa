
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

<style>
    /* Define a class for the product images */
    .image_pro {
      width: 100px; /* Set the width */
      height: 100px; /* Set the height */
      object-fit: cover; /* Scale and crop the image to fit */
      border: 1px solid #ccc; /* Add a border */
    }
  </style>
<h3 class="text_center text_success">All Products</h3>
@extends('layouts.adminlayout')
 @section('content')
<table class="center">

 <thead class="bg-info">

  <tr>
    <th>Product Id</th>
    <th>Product Title</th>
    <th>Product Image</th>
    <th>Product Image2</th>
    <th>Product Image3</th>
    <th>Product Price</th>

    <th>Edit</th>
    <th>Delete</th>
  </tr>
 </thead>
<tbody class="bg-secondary text-light">
     {{-- Define and initialize the $products variable --}}
    {{-- $products = App\Product::all(); --}}
    {{-- with controller foreach --}}

     @foreach($products as $product)
     <tr class='text-center'>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $product->product_title }}</td>
      {{-- <td><img src='./public.storage.image/{{ $product->product_image1}}' class='my-1 image_pro' alt=''></td> --}}
      <td> <img src="{{ asset('storage/image/products/'.$product->product_image1) }}" class="image_pro" alt="{{ $product->product_title }}"></td>
      <td><img src="{{ asset('storage/image/products/' . $product->product_image2) }}" class="image_pro" alt="{{ $product->product_title }}"></td>


      <td><img src="{{ asset('storage/image/products/'.$product->product_image3) }}" class="image_pro" alt="{{ $product->product_title }}"></td>
      <td><span>$</span>{{ $product->product_price }}</td>
      <td><a href='#' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
      <td><a href='#' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
    </tr>
    </tbody>

    @endforeach

</table>


@stop
