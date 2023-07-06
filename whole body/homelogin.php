<!DOCTYPE html>
<html>
<head>
	<title>Bookyourtrek</title>

	<link rel="stylesheet" type="text/css" href="css/stylehome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="jquery-3.6.4.min.js"></script>
</head>
<body>
	<header>
		<h1>BookYourTrek Admin Panel</h1>
		<div class="slide">
			<button id="slideToggle">...</button>
		</div>
		<div class="logo">
			<img src="logo1.jpg"><a href="index.html"></a>
		</div>
		<div class="main" id="main">
			<ul>
				
				<li class="active"><a href="logoutadmin.php">Logout</a></li>
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
	<div class="regform">
	<div class="box">
		<h3>Our Bookings</h3>
		<ul>
			<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['username'])) {
    header("Location: loginadmin.php"); // Redirect to login page if not authenticated
    exit();
}
?>
			<a href="#gos"><li><span>1</span> Gosaikunda Lake</li></a>
			<a href="#ebc"><li><span>2</span> Everest Base Camp</li></a>
			<a href="#abc"><li><span>3</span> Annapurna Base Camp</li></a>
			<a href="#shey"><li><span>4</span> Shey Phoksundo Lake</li></a>
			<a href="#tsho"><li><span>5</span> Tsho Rolpa</li></a>

		</ul>
	</div>
</div>
<div id="gos">
	<h2>Gosaikunda</h2>
	<table>
	<?php
$connect=Mysqli_connect("localhost","root","","bookyourtrek");
$select="SELECT * from gosaikunda ORDER BY id desc";
$run=mysqli_query($connect,$select);
while($row=mysqli_fetch_assoc($run)){
?>
<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['fullname'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['number'];?></td>
	<td><a href="updategos.php?id=<?php echo $row['id']?>">edit</a></td>
	<td><a href="deletegos.php?id=<?php echo $row['id']?>">delete</a></td>
</tr>
<?php
}
?>
</table>
</div>
<hr>
<div id="ebc">
	<h2>Everest Base Camp</h2>
	<table>
	<?php
$connect=Mysqli_connect("localhost","root","","bookyourtrek");
$select="SELECT * from ebc ORDER BY id desc";
$run=mysqli_query($connect,$select);
while($row=mysqli_fetch_assoc($run)){
?>
<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['fullname'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['number'];?></td>
	<td><a href="updateebc.php?id=<?php echo $row['id']?>">edit</a></td>
	<td><a href="deleteebc.php?id=<?php echo $row['id']?>">delete</a></td>
</tr>
<?php
}
?>
</table>
</div>
<hr>
<div id="abc">
	<h2>Annapurna Base Camp</h2>
	<table>
	<?php
$connect=Mysqli_connect("localhost","root","","bookyourtrek");
$select="SELECT * from abc ORDER BY id desc";
$run=mysqli_query($connect,$select);
while($row=mysqli_fetch_assoc($run)){
?>
<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['fullname'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['number'];?></td>
	<td><a href="updateabc.php?id=<?php echo $row['id']?>">edit</a></td>
	<td><a href="deleteabc.php?id=<?php echo $row['id']?>">delete</a></td>
</tr>
<?php
}
?>
</table>
</div>
<hr>
<div id="shey">
	<h2>Shey Phoksundo Lake</h2>
	<table>
	<?php
$connect=Mysqli_connect("localhost","root","","bookyourtrek");
$select="SELECT * from sheyphoksundo ORDER BY id desc";
$run=mysqli_query($connect,$select);
while($row=mysqli_fetch_assoc($run)){
?>
<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['fullname'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['number'];?></td>
	<td><a href="updateshey.php?id=<?php echo $row['id']?>">edit</a></td>
	<td><a href="deleteshey.php?id=<?php echo $row['id']?>">delete</a></td>
</tr>
<?php
}
?>
</table>
</div>
<hr>
<div id="tsho">
	<h2>Tsho Rolpa Lake</h2>
	<table>
	<?php
$connect=Mysqli_connect("localhost","root","","bookyourtrek");
$select="SELECT * from tshorolpa ORDER BY id desc";
$run=mysqli_query($connect,$select);
while($row=mysqli_fetch_assoc($run)){
?>
<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['fullname'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['number'];?></td>
	<td><a href="updatetsho.php?id=<?php echo $row['id']?>">edit</a></td>
	<td><a href="deletetsho.php?id=<?php echo $row['id']?>">delete</a></td>
</tr>
<?php
}
?>
</table>
</div>
	</body>
</html>

