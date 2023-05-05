

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>E_commerce website using PHP and MySQL</title>
    <!-- bootstrap css link
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
<!-- font awesome  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">

  <style>
 *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: Arial;
  padding: 10px;
  background: #e7d8c9;
}
.header {
  width: 100%;
  padding: 15px;
  text-align: center;
  background: ccd5ae;
}
.topnav {

    padding: 20px 0;
    background-color:#b2967d;
    width: 100%;
    overflow: hidden;
  }
  img ,li {
  float: left;
  overflow: scroll;
}
.header .logo{
    display:flex;
    align-items: center;
}

  .nav_top li a{
    display:inline-block;
    text-decoration: none;
    padding: 10px 12px;
    cursor: pointer;
    /* text-align: center; */
  }
  .logo{
  height: 55px;
    width: 55px;
    position: relative;

}
.nav_bottom{
  padding: 5px 0;
    background-color:#6c757d;
    width: 98%;
    text-align: center;
    overflow: hidden;
    margin-left: 13px;
}
.logo-text h3{
margin-top: 22px;
text-align: center;
font-size: 30px;
font-weight: 600;
color: #e6beae;
}
.logo-text p{
  text-align: center;
  color: #6c757d;
  margin-bottom: 22px;
}
.row {
      display: flex;
      flex-wrap: wrap;
      margin: -8px;
      margin-bottom: 15px;;
    }
    .col-md-10 {
      /* margin-right: 5px; */
      width: 78.33%;
      padding: 18px;
      margin: auto;

    }
    .col-md-2 {
      width: 16.67%;
      padding: 5px;
      background-color: #eee4e1;
      text-align:center;
      height: 100%;
      margin: auto;
      /* z-index: 2; */
    }
    .col-md-2 li{


    height: 50px;
    list-style: none;
      }
      .col-md-2 a {
  text-decoration: none;
  padding: 10px 12px;
  color: black;
}

.side_nav1 {
  display: flex;
  flex-direction: column;


}
.side_nav2 {
  display: flex;
  flex-direction: column;

}
.product-card {
  width: 21rem;
  background-color: #eee4e1;
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  border-radius: 0.5rem;
  overflow: hidden;
  width: 100%;
  max-width: 20rem;
}

.product-image {
  height: 12rem;
  overflow: hidden;
}
.product-title {
  margin-bottom: 0.5rem;
  font-size: 1.25rem;
  font-weight: bold;
  background-clip: content-box;
  -webkit-background-clip: content-box;
  -moz-background-clip: content-box;
  background: -webkit-linear-gradient(45deg, #b2967d, #e6beae);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.product-description {
  margin-bottom: 1rem;
}

.product-price {
  margin-bottom: 0.5rem;
  font-size: 1.25rem;
  font-weight: bold;
  color:#545b62;
}

.product-price-add-to-cart {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-top: 1rem;
}

.btn {
  margin-top: 0.5rem;
  border-radius: 0.5rem;
  text-transform: uppercase;
  letter-spacing: 0.05rem;
  font-size: 0.875rem;
  font-weight: bold;
  padding: 0.5rem 1rem;
  transition: all 0.3s ease;
  text-decoration: none;

}

.btn-info {
  background-color: #e6beae;
  border-color: #e6beae;
  color: #fff;

}

.btn-info:hover {
  background-color: #e6beae;
  border-color: #e6beae;
}

.btn-secondary {
  background-color: #6c757d;
  border-color: #6c757d;
  color: #fff;
}

.btn-secondary:hover {
  background-color: #5a6268;
  border-color: #545b62;
}
#message{
  padding:1rem 1rem;
  background-color: #e6beae;
  /* color:#ffffff;
  font-size: 24px; */
}
@media screen and (max-width: 768px) {
    .product-card {
    width: 48%;
    }
    .sidebar {
    width: 100%;
    margin-top: 20px;
    }
    .card {
      margin-bottom: 20px;
      width: 100%;
    }
    }
    /* .header {
    max-width: 1300px;
    margin: 0 auto;
  } */



/* .logo {
  margin-right: 20px;
} */

.nav-toggle {
  display: none;
}

.nav-toggle-label {
  position: absolute;
  top: 20px;
  right: 20px;
  display: block;
  width: 40px;
  height: 40px;
  cursor: pointer;
  z-index: 2;
}

.nav-toggle-label span {
    display: block;
    width: 100%;
    height: 2px;
    background-color: #fff;
    position: relative;
    transition: transform 0.3s ease-in-out;
  }

.nav-toggle-label span:before,
.nav-toggle-label span:after {
    content: '';
    display: block;
    width: 100%;
    height: 2px;
    background-color: #fff;
    position: absolute;
      left: 0;
    transition: transform 0.3s ease-in-out;
}

.nav-toggle-label span:before {
top: -10px;
transition: transform 0.3s ease-in-out;
}

.nav-toggle-label span:after {
bottom: -10px;
transition: transform 0.3s ease-in-out;
}

  .nav-toggle:checked + .nav-toggle-label span:before {
transform: rotate(-45deg);
top: 0;
}

  .nav-toggle:checked + .nav-toggle-label span:after {
transform: rotate(45deg);
bottom: 0;
}

.nav_top {
margin-left: auto;
}

.nav_top .nav-item {
margin-left: 2rem;
}

.nav_top .nav-link {
color: #fff;
text-decoration: none;
padding-left: 15px;
}

.nav_top .nav-link:hover {
color: #fff;
border-bottom: 2px solid #fff;
}

/* .logo {
height: 50px;
margin-right: 1rem;
} */

.form-control {
margin-right: 1rem;
}

.btn-outline-light {
color: #fff;
border-color: #fff;
}

.btn-outline-light:hover {
background-color: #fff;
color: #000;
}

/* Add this to override the default bootstrap styles */
.navbar-collapse {
  justify-content: flex-end;
}


.card-img-top{
  width: 100%;
  height:200px;
  object-fit: contain;
  aspect-ratio: 16/9;
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
@media screen and (max-width: 800px) {
  .col-md-10 , .col-md-2{
      /* margin-right: 5px; */
      width: 100%;
      padding: 18px;
      margin: auto;
      padding: 0;
    }
    /* .header {
   display: grid;
   position: absolute;
   background:#6c757d;
   width:100%;

   } */


}
.active{
  background-color: #e7d8c9;
  border-radius: 5px;
  color: white;
}

@media screen and (max-width:675px){

   .header .topnav {
   display: grid;
   overflow: auto;
   position: absolute;
   background:#6c757d;
   width:100%;
   height: 25%;
   /* top:45px;
   left:0; */
    transform:translateY(-100%);
    z-index: -1;
   transition:.6s;
   }
   .nav_bottom{
    display: none;
   }
   .nav_top{
    display: grid;
    padding-left: 35px;
    position: absolute;
    top:45px;
   left:0;
   }
   .topnav li a{
    display: grid;
}
 /* .navbar-toggle{
  display:grid !important;
}
 .navbar-toggle{
  display:none;
  height:min-content;
  margin:18px -10px 0 0;

}
.navbar-toggle .bar{
  width:40px;

  height:5px;
  margin-bottom:10px ;
  background-color: #ffffff;
  border-radius: 10%;
  transition:.4s;
} */
.search-form{
  display: none;
}
}

  </style>
  </head>
  <body>
    <!--navbar -->

    <!-- responsive hamburger -->
    <input type="checkbox" class="nav-toggle" id="nav-toggle">
  <label for="nav-toggle" class="nav-toggle-label">
    <span></span>
  </label>
    <div class="header">
     <nav class="topnav">

      <span>
        <img src="./images/logo.png" alt="" class="logo">
      </span>

     <label class="navbar-toggle" for="toggle">
         <span class="bar"></span>
         <span class="bar"></span>
         <span class="bar"></span>
      </label>
      <ul class="nav_top" id="list">
        <li class="nav-item active">
          <a class="nav-link active" aria-current="page" href="{{ route('Ecomms.index') }}">Home</a>
          {{-- "{{ route('posts.show',$post->id) }}" --}}
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <?php
        if(isset($_SESSION['user'])){
          echo " <li class='nav-item'>
          <a class='nav-link' href='./users_area/profile.php'>My Account</a>
          </li>";
        }else{
          echo " <li class='nav-item'>
          <a class='nav-link' href='./users_area/user_registration.php'>Register</a>
          </li>";
        }
        ?>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i><sup></sup></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Subtotal: $</a>
          </li>
      </ul>
      <form class="search-form" role="search" action={{ route('search_product') }}  method="get">
        @csrf
        <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" value="search" class="btn" name="search_data_p">
      </form>
    </nav>
  </div>


<!-- calling cart function  -->


<!-- second child -->

<nav class="nav_bottom">
  <ul class="nav_top">
          <?php

       if(!isset($_SESSION['user'])){
        echo "<li class='nav-item'>
        <a class='nav-link ' aria-current='page' href='#'>Welcome Guest</a>
      </li>";

    }else{
            echo "<li class='nav-item'>
            <a class='nav-link ' aria-current='page' href='#'>Welcome ".$_SESSION['user']."</a></li>";
          }


        if(!isset($_SESSION['user'])){
      echo "<li class='nav-item'>
      <a class='nav-link'  href='./users_area/user_login.php'>Login</a>
    </li>";

  }else{
          echo "<li class='nav-item'>
          <a class='nav-link'  href='./users_area/logout.php'>Logout</a>
        </li>";
        }
    ?>
  </ul>
</nav>

<!-- Third child -->
<div class="text logo-text">
  <h3 class="heading1"> Coming Soon </h3>
  <p class="sub_heading"> Welcome to A Store</p>
  <div id="message"><?php

?></div>
</div>



<!-- fourth child -->
<div class="row px-1 gy-3">
  <div class="col-md-10">
 <!-- front products -->
  <div class="row">


<!-- fetching products  -->
<?php
// calling function

// $ip = getIPAddress();
// echo 'User Real IP Address - '.$ip;

?>

<!-- row end -->
</div>
<!-- column end -->
  </div>

<!-- sidenav -->
<div class="col-md-2">
  <!-- brand to be display -->
  <ul class="side_nav1">
    <li class="s-nav-item">
      <a href="#" class="nav-link "><h4>Brands</h4></a>
    </li>
 <?php
// calling function brand


 ?>
  </ul>

  <!-- category to be displayed -->
  <ul class="side_nav2">
  <li class="s-nav-item">
      <a href="#" class="nav-link "><h4>categories</h4></a>
    </li>

    <?php
    // calling function category


?>


  </ul>
</div>
</div>

    </div>
      </div>

<!-- last child -->
<!-- include footer -->

    </div>


    <!-- bootstrap js  link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

    //  var list=document.getElementById("list");
    //  var btns=list.getElementsByClassName("nav-item");
    //  var i;

    //  for(i=0;i<btns.length;i++){
    //     btns[i].addEventListener("click",function(){
    //     var current=document.getElementsByClassName("active");
    //     current[0].className=current[0].className.replace("active","");
    //     console.log(this.className);
    //     this.className+="active";
    //   })
    //  }


    </script>


  </body>
</html>




