{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User- registration</title>
      <!-- bootstrap css link -->
      <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
      <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}" /> --}}
<style>

body {
        font-family: Arial;
        padding: 10px;
        background: #e7d8c9;
      }
              /* Form container */
      .container-fluid {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        /* padding: 0 15px; */

      }

      /* Form title */
      h2.text-center {
        font-size: 2rem;
        font-weight: bold;
        text-transform: uppercase;
        color:#e6beae;
      }

      /* Form wrapper */
      form {
        background-color: #eee4e1;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      }
      /* div style */
      .form-outline{
        margin-bottom:16px ;
      }
      /* Form input labels */
      .form-label{
        font-size: 1.1rem;
        font-weight: bold;
        text-transform: uppercase;
        background-clip: content-box;
        -webkit-background-clip: content-box;
        -moz-background-clip: content-box;
        background: -webkit-linear-gradient(45deg, #b2967d, #e6beae);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;

      }

      /* Form input fields */
      .form-control {
        display: block;
        width: 100%;
        padding:5px 10px;
        font-size: 1rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s;
      }

      .form-control:focus {
        border-color: #6c757d;
      }

      /* Submit button */
      .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: bold;
        text-transform: uppercase;
        color: #fff;
        background-color: #e6beae;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 9px;
      }

      .btn:hover {
        background-color: #e6beae;
      }

      /* Small text */
      .small {
        font-size: 0.8rem;
        color: #6c757d;
      }

      /* Link */
      .text-danger {
        color: brown;
        text-decoration: none;
      }

      .text-danger:hover {
        text-decoration: underline;
      }


</style>

</head>
<body>
  <div class="container-fluid">
    <!-- my for top bottom margin no right and left -->

  @extends('layouts.adminlayout')
 @section('content')
 <h2 class="text-center my-3">
    New User Registration
  </h2>
  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-lg-12 col-xl-6">
  <form action="{{ route('users.store') }}" method="post" class="" enctype="multipart/form-data">
    @csrf
  <div class="form-outline mb-4">
    <!-- username -->

  <label for="user" class="form-label">Username</label>
  <input type="text" id="user" name="user" class="form-control" placeholder="Enter your username" required="required" autocomplete="off">
  </div>
<!-- email -->
<div class="form-outline ">
  <label for="user_email" class="form-label">Email</label>
  <input type="email" id="user_email" name="user_email"  class="form-control" placeholder="Enter your E-mail" required="required">
  </div>
  <!-- password -->
  <div class="form-outline ">
    <label for="user_pass" class="form-label">Password</label>
    <input type="password" id="user_pass" name="user_pass" class="form-control" placeholder="Enter your password" required="required" autocomplete="off">
    </div>
  <!-- image -->
  <div class="form-outline ">
  <label for="user_img" class="form-label">User Image</label>
  <input type="file" id="user_img" name="user_img" class="form-control"  required="required">
  </div>


  <!-- address -->
<div class="form-outline ">
  <label for="user_add" class="form-label">Address</label>
  <input type="text" id="user_add" name="user_add" class="form-control" placeholder="Enter your Address" required="required" autocomplete="off">
  </div>

   <!-- contact -->
<div class="form-outline ">
  <label for="user_contact" class="form-label">Contact</label>
  <input type="text" id="user_contact" name="user_contact" class="form-control" placeholder="Enter your Mobile Number" required="required" autocomplete="off">
  </div>
   <!-- submit-->
   <div class="mt-4 pt-2">
  <input type="submit" name="user_register" class="btn btn-info mb-3 px-3" value ="Register">
  <p class="small fw-bold mt-2 pt-1" >Already have an account ? <a href="user_login.php" class="text-danger"> Login</a></p>
   </div>
  </form>
  </div>
  </div>
  </div>

</body>
</html>
@stop
