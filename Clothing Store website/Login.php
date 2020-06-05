<?php include('functions.php') ?>

<!DOCTYPE HTML>  
<html>
<head>
<style >
	body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #7A46F1;;
}

.box{
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform:  translate(-50%,-50%);
  background: #1B90F5;
  text-align: center;
}
.box h1{
	color: white;
	text-align: upercase;
	font-weight: 500;

}

.box input[type = "text" ],.box input[type = "email"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #03A9F4;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;

}



.box input[type = "text" ],.box input[type = "password"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #03A9F4;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;

}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
width: 280px;
border-color: #4CAF50;
}
.box input[type = "submit"]{
    border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #4CAF50;
	padding: 14px 40px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
	cursor: pointer;

}
.box input[type="submit"]:hover{
background: #4CAF50;

}








</style>

  

	
	<form method="post" class="box" action="login.php">
         <h1>Login</h1>
		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>


 