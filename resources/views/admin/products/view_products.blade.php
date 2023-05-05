

<h3 class="text_center text_success">All Products</h3>
<table class="center">

 <thead class="bg-info">

  <tr>
    <th>Product Id</th>
    <th>Product Title</th>
    <th>Product Image</th>
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
      <td><img src='./public.storage.image/{{ $product->product_image1}}' class='my-1 image_pro' alt=''></td>
      <td><span>$</span>{{ $product->product_price }}</td>
      <td><a href='#' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
      <td><a href='#' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
    </tr>
    </tbody>

    @endforeach

</table>


