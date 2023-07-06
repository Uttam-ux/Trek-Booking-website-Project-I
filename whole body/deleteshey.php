<?php
$c=mysqli_connect("localhost","root","","bookyourtrek");
$id=$_GET['id'];
$q="DELETE from sheyphoksundo WHERE id='$id'";
$run=mysqli_query($c,$q);
?>