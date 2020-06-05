<?php include('functions.php') ?>


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


<body>

<form method="post" class="box" action="Register.php">
	<?php echo display_error(); ?>
	<h1>Register From</h1>
	
  <div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	<br>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
	</div>
</form>
	


</body>


