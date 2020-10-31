 <!-- <?php
session_start();
if(isset($_SESSION['is_login'])){
  $username = $_SESSION['username'];
}else{
  echo "<script> location.href='login.php'</script>";

}
?>  -->




<!doctype html>



<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>vehicle service</title>
    <link rel="stylesheet" type="text/css" href="../css/all.css" >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/home.css" >
  </head>
  <body>
	<div class="cust-container">
  <!--navbar start  -->
  <nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #03DAC6;">
  <a class="navbar-brand" href="#">Service</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../php/home.php"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
</svg>home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../php/user_input.php">Ragistration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../php/package.php">Package</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../php/user_change_pass.php">Change Password</a>
      </li>    
    </ul>
  </div>  
  
</nav>
</div>
<!-- end navbar-->
<div>
<form class="form-inline search_form" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</div>

<!-- Start Header Jumbotron-->
<header class="jumbotron back-image" style="background-image: url(img/background.jpg);">
    <div class="myclass mainHeading">
      <h1 class="text-uppercase text-danger font-weight-bold">Welcome to Service center</h1>
      <p class="font-italic">Customer's Happiness is our Aim</p>
      <a href="user_input.php" class="btn btn-success mr-4">Ragistration</a>
      <a href="package.php" class="btn btn-danger mr-4">Package</a>
    </div>
  </header> <!-- End Header Jumbotron -->

<!-- start service introduction -->
<div class="container">
    
    <div class="jumbotron">
      <h3 class="text-center">Service Center</h3>
      <p>
        Auto services is India’s leading chain of multi-brand car and bike service center
        wide array of services. We focus on enhancing your uses experience by offering world-class
        services.
        Appliances maintenance services. Our sole mission is “To provide best Auto service in web
        services to
        keep the devices fit and healthy and customers happy and smiling”.

        With well-equipped services Appliances service centres and fully trained mechanics, we
        provide quality
        services with excellent packages that are designed to offer you great savings.

        Our state-of-art workshops are conveniently located in many cities across the country. Now you
        can book
        your service online by doing Registration.
      </p>

    </div>
  </div>

<!-- End service introduction -->

<!-- start contact us -->
<div class= "container contact">
  <h2 class= "text-center mb-4">Contact us</h2>
    <div class="row">
      <div class ="col-md-8">   
        <form action="contact_us.php" method="post">
           <input type="text" class="form-control" name="name" placeholder="Name"><br>
           <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
           <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
           <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
           <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
        </form>
      </div>
</div>
</div>
<!-- End contact us -->
<div class="jumbotron bg-danger">
  <div class="conttainer">
    <h2 class="text-center text-white">Team</h2>
      <div class="row mt-5">
          <div class="col-sm-6 col-sx-12">
            <div class="card shadow-lg mb-3">
              <div class="card-body text-center">
                <img src="" alt="" class="imf-fluid" style="border-radius: 100px;">
                <h4 class="card-title">Himanshu Dabhi</h4> 
                <p class="card-text">
                Elon Musk User Profile designed by Kostia Osadchy.
                 Connect with them on Dribbble; the global community
                  for designers and creative professionals.
                  Elon Musk User Profile designed by Kostia Osadchy.
                 Connect with them on Dribbble.
                 </p>
                 </div>
                 

            </div>

          </div>
          <div class="col-sm-6 col-sx-12">
            <div class="card shadow-lg mb-3">
              <div class="card-body text-center">
                <img src="" alt="" class="imf-fluid" style="border-radius: 100px;">
                <h4 class="card-title">Fenil Kanjiya</h4> 
                <p class="card-text">
                Elon Musk User Profile designed by Kostia Osadchy.
                 Connect with them on Dribbble; the global community
                  for designers and creative professionals.
                  Elon Musk User Profile designed by Kostia Osadchy.
                 Connect with them on Dribbble.
                 </p>
                 </div>
                 

            </div>

          </div>

      </div>
  </div>
</div>
 <!-- Start Footer-->
 <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by fenil & himanshu &copy; 2020.
          </small>
          <small class="ml-2"><a href="admin_login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>