<?php
session_start();
if(!isset($_SESSION['user']))
{
include "header.php";
?>
<div class='container'>
	<div class='row d-flex justify-content-center'>
		<div class='col-md-6 p-4' style='background:white; box-shadow:5px 10px 5px black;'>
			<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="user" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
  </div>

  <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>
	 </div>
	</div>
	

</div>

<?php
include "footer.php";
if(isset($_REQUEST['login']))
{
	$user=$_REQUEST['user'];
	$pass=$_REQUEST['pass'];
	
	if($user=="admin@gmail.com" && $pass="admin123")
	{
		//echo "correct user and password";
		$_SESSION['user']=$user;
		header('Location:dashboard.php');
	}
	else
	{
		echo "Invalid!";
	}
		
}
}
else
{
	header('Location:dashboard.php');
}
?>