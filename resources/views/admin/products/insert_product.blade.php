
{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Product- Admin Dashboard</title>
  <!-- bootstrap css link -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <!-- font awesome  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light"> --}}
<style>
body {
  font-family: Arial;
  padding: 10px;
  background: #e7d8c9;
}
/* Center the heading and add spacing */


/* Center the form and add some spacing */
.container {
  margin-left: 350px;
  display: flex;
  justify-content: center;
  height: 100vh;
  flex-direction: column;
}



/* Style the form inputs */

/* Form title */
h1.text-center {
        font-size: 2rem;
        font-weight: bold;
        text-transform: uppercase;
        color:#e6beae;
        margin-left: 100px;
      }

form {
  background-color: #eee4e1;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
  padding: 30px;
  max-width: 600px;
  width: 100%;
  margin-top: 200px;
}

form label {
  display: block;
  font-size: 1.2rem;
  margin-bottom: 10px;
}

form input[type="text"],
form input[type="file"],
form select {
  border-radius: 5px;
  border: 1px solid #ccc;
  padding: 10px;
  width: 100%;
  font-size: 1.2rem;
  margin-bottom: 20px;
}

form select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="%23333" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6z"/></svg>');
  background-repeat: no-repeat;
  background-position: right 10px center;
  background-size: 20px;
}

form input[type="submit"] {
  background-color: #e6beae;
  border: none;
  color: #fff;
  font-size: 1.2rem;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

/* Style the form on smaller screens */
@media screen and (max-width: 768px) {
  form {
    max-width: 400px;
  }
}

</style>

<div class="container mt-3" >
  <h1 class="text-center">Insert Products</h1>
  {{-- @extends('layouts.adminlayout')
  @section('content') --}}
  <!-- form enctype for images  -->
  <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    <!-- title -->
    @csrf
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_title" class="form-label">Product Title</label>
      <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
    </div>
    <!-- description -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="description" class="form-label">Product Description</label>
      <input type="text" name="description" id="description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required="required">
    </div>
    <!-- product keyword -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_keywords" class="form-label">Product Keywords</label>
      <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Product Keywords" autocomplete="off" required="required">
    </div>
   <!-- categories -->
    <div class="form-outline mb-4 w-50 m-auto">
     <select name="product_category" id="product_category" class="form-select">
      <option value="">Select a Category</option>
       @foreach($categories as $category)

      {{-- important read again and understand --}}
      <option value='{{ $category->id }}'>{{ $category->category_title }}</option>
       @endforeach
    </select>
    </div>

     <!-- brands -->
     <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_brands" id="product_brands" class="form-select">
         <option value="">Select a Brands</option>
          @foreach($brands as $brand)

         {{-- important read again and understand --}}
         <option value='{{ $brand->id }}'>{{ $brand->brand_title }}</option>
          @endforeach
       </select>
       </div>
    <!-- images -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_images1" class="form-label">Product Image 1</label>
      <input type="file" name="product_images1" id="product_images1" class="form-control"  required="required">
    </div>
    <!-- image 2 -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_images2" class="form-label">Product Image 2</label>
      <input type="file" name="product_images2" id="product_images2" class="form-control"  required="required">
    </div>
    <!-- image 3 -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_images3" class="form-label">Product Image 3</label>
      <input type="file" name="product_images3" id="product_images3" class="form-control"  required="required">
    </div>

    <!-- price -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_price" class="form-label">Product Price</label>
      <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product price" autocomplete="off" required="required">
    </div>

    <!-- price -->
    <div class="form-outline mb-4 w-50 m-auto">
     <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value ="Insert Products">
  </form>
{{-- @stop --}}
  <!--
echo sys_get_temp_dir();
  -->

</div>
</body>
</html>
