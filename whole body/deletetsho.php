<?php
$c=mysqli_connect("localhost","root","","bookyourtrek");
$id=$_GET['id'];
$q="DELETE from tshorolpa WHERE id='$id'";
$run=mysqli_query($c,$q);
?>