
<!DOCTYPE html>
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
<body class="bg-light">


<div class="container mt-3" >
  <h1 class="text-center">Insert Products</h1>

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

  <!--
echo sys_get_temp_dir();
  -->

</div>
</body>
</html>
