
{{-- @extends('admin.products.view_products') --}}

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Admin Area</title>
 <!-- bootstrap css link -->
 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
 <!-- font awesome  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
  body {
  font-family: Arial;
  padding: 10px;
  background: #e7d8c9;
}
@media (max-width: 768){


}
.image_pro{

width: 50px;
height: 50px;
}
.image_peo{

width: 60px;
height: 60px;
}
.admin_image{
  width: 100px;
  object-fit: contain;
}
.img1
{
  width: 50px;
height: 50px;
}
/* Global styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Navbar styles */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #b2967d;
  color: #fff;
  padding: 0.5rem;
}

.navbar .logo {
  height: 3rem;
}
.logo{
  height: 55px;
    width: 55px;
    position: relative;

}
.nav {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  list-style-type: none;
  margin-right: 1rem;
}

.nav-item {
  margin-right: 1rem;
}

.nav-link {
  color: #fff;
  text-decoration: none;
  font-weight: bold;
  font-size: 1rem;
  padding: 0.5rem;
  background-color: #e6beae;
  border-radius: 0.5rem;
}

.nav-link:hover {
  color: #fff;
  background-color: #e6beae;
  border-radius: 0.25rem;
  transition: background-color 0.2s ease-in-out;
}
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
    background-color: #b2967d;
    padding: 15px;
}
table, th, td {
  border: 1px solid;
}
table {
  width: 50%;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
td {
  text-align: center;
}
.sub_heading{
  text-align: center;
  padding: 15px;
}
.admin{
  padding-bottom: 5px;
  margin-bottom: 15px;
}
.buttoncss{
  margin-top: 15px;
}
</style>
</head>
<body>
<!-- navbar -->
<div class="container" >
  <!-- first child -->
  <nav class="navbar">
    <div class="navbar-container">
      <img src="../images/logo.png" alt="" class="logo">
      <nav class="navbar-secondary" >
        <ul class="nav">
          <li class="nav-item">
           <a href="" class="">Welcome Admin</a>
          </li>
        </ul>
      </nav>
    </div>
  </nav>
</div>
  <!-- second child -->
  <div class="sub_heading">
       <h3>Manage Items</h3>
</div>

<!-- third child -->
<div class="row">
  <div class="col md-12 ">
   <div class="p-3">
    <a href="#"><img src='./public.storage.image/Apple_cut_web.pn' alt="" class="admin_image"></a>
    <p class="admin">Admin</p>
   </div>
   <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
   <div class="buttoncss text-center">

    {{-- products index  --}}

        {{-- products index coming from name of web.php route --}}
        {{-- eg:Route::get('/products/create', [ProductController::class, 'create'])->name('product.create'); --}}
   <button><a href="{{ route('products.index') }}" class="nav-link ">View Product</a></button>


    {{-- products create --}}
    <button><a href="{{ route('products.create') }}" class="nav-link ">Insert Product</a></button>



    <!-- get variable index.php?insert_categories -->
    <button><a href="{{ route('categories.create') }}" class="nav-link ">Insert categories</a></button>
    <button><a href="{{ route('categories.index') }}" class="nav-link ">View categories</a></button>
    <button><a href="{{ route('brands.create') }}" class="nav-link ">Insert Brand</a></button>
    <button><a href="{{ route('brands.index') }}" class="nav-link ">View Brand</a></button>
    {{-- <button><a href="index.php?list_orders" class="nav-link ">All Orders</a></button>
    <button><a href="index.php?list_payments" class="nav-link ">All payments</a></button>
    <button><a href="index.php?list_users" class="nav-link ">List users</a></button>
    <button><a href="index.php?front_page" class="nav-link ">Front Page</a></button>
    <button><a href="../users_area/logout.php" class="nav-link ">Logout</a></button>
   </div> --}}
  </div>
</div>
</div>

<!-- Fourth child -->

<div class="container my-3">


</div>





<!-- last child -->



 <!-- bootstrap js  link  -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>


</html>
