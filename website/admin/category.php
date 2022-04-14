<?php
session_start();
if(isset($_SESSION['user']))
{
include "header.php";
?>
<center><h1>Add Category </h1></center>

<div class='container'>
	<div class='row d-flex justify-content-center'>
		<div class='col-md-6 p-4' style='background:white; box-shadow:5px 10px 5px black;'>
			<form action='action.php' method='post'>
			<div class='row'>
				<div class='col-md-4 mb-2'><b>Category Name</b></div>
				
				<div class='col-md-8 mb-2'><input type="text" name='name' class='form-control'></div>
			
			
				<div class='col-md-4 mb-2'><b>Category Description</b></div>
				
				<div class='col-md-8 mb-2'><input type="text" name='description' class='form-control'></div>
				</div>
				<input class='btn btn-success' name='add_cate' value='Add Category' type="submit">
			</form>
	 </div>
	</div>
	

</div>


<?php
include "footer.php";
}
else
{
	header('Location:index.php');
}
?>