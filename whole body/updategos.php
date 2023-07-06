<?php
  $id=$_GET['id'];
  $connect=mysqli_connect("localhost","root","","bookyourtrek");
  $sel="SELECT * from gosaikunda WHERE id ='$id'";
  $run=mysqli_query($connect,$sel);
  $row=mysqli_fetch_assoc($run);
  ?>
  <form action ="updategos.php" method="post">
  	<input type ="hidden" name="id" value="<?php echo $row['id'] ?>">
    <input type ="text" name="a" value ="<?php echo $row['fullname'] ?>">
    <input type ="text" name="b" value ="<?php echo $row['address'] ?>">
    <input type ="text" name="c" value ="<?php echo $row['email'] ?>">
    <input type ="text" name="d" value ="<?php echo $row['number'] ?>">
    <input type ="submit" name="submit" value="update">
  </form>
    <?php
    if(isset($_POST['submit'])){
    	$id =$_POST['id'];
    	$or =$_POST['a'];
    	$q =$_POST['b'];
    	$r=$_POST['c'];
      $s=$_POST['d'];
    	$update="UPDATE gosaikunda SET fullname ='$or', address='$q', email='$r', number='$s' WHERE id='$id'";
      $result=mysqli_query($connect,$update);
      if($update){
        header("location:homelogin.php");
      }
      else{
        echo "data is not updated! error";
      }
}  
 ?>