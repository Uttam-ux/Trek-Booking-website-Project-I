<!DOCTYPE html>
<html>
<head>
  <title>Bookyourtrek</title>

  <link rel="stylesheet" type="text/css" href="css/insertinstsho.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="jquery-3.6.4.min.js"></script>
</head>
<body>
  <header>
    <h1>BookYourTrek</h1>
    <div class="slide">
      <button id="slideToggle">...</button>
    </div>
    <div class="logo">
      <img src="logo1.jpg"><a href="index.html"></a>
    </div>
    <div class="main" id="main">
      <ul>
        
        <li><a href="index.html">Home</a></li>
        <li class="active"><a href="Packages.html">Packages</a></li>
        <li><a href="aboutUs.html">About Us</a></li>
        <li><a href="loginadmin.php">Login</a></li>
      </ul>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
    $('#slideToggle').click(function(){
      $('.main').slideToggle(function(){
      });
        });
  });
    </script>
  </header>
  <div class="php">
<?php
  $con = mysqli_connect("localhost","root","","bookyourtrek");
  $f=$_POST['fullname'];
  $a=$_POST['address'];
  $e=$_POST['email'];
  $n=$_POST['number'];

  $insert="INSERT into tshorolpa(fullname,address,email,number) values('$f','$a','$e','$n')";
  $run=mysqli_query($con,$insert);
  echo"We have received your data successfully. Thank you for choosing us ";
  ?>
   <a href="index.html">Browse More</a>
</div>
  <footer>
<div class="footer-content">
  <h3>Contact Us</h3>
  <p> Contact no:01-4813218<br>
  Email:Bookyourtrek@gmail.com</p>
  <ul class="socials">
    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i><</a></li>
    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
  </ul>
</div>
<div class="footer-bottom">
  <p>copyright &copy;2023Bookyourtrek. designed by <span>admin</span></p>
</div>
</footer>
  </body>
</html>
