<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
</head>
<body>
	<div class="regform">
		<div class="reg">
			<p>This Page is for admin only<br> If you are not a admin Please <a href="index.html">Go Back</a></p>
	 <h1>Login for Admin</h1>
    <form action="authenticatelogin.php" method="post">
        <input type="text" id="username" name="username" placeholder="Username" required><br><br>
        <input type="password" id="password" name="password" placeholder="Password" required><br><br>
        <input type="submit" value="Login">
    </form>
</div>
</div>
</body>
</html>