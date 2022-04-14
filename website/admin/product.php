<?php
session_start();

if(isset($_SESSION['user']))
{
require "connection.php";
include "header.php";

function cate($id)
{
$id=(int)$id;
$sql = "SELECT * FROM `category` where id=$id";
$result=mysqli_query($GLOBALS['con'],$sql);
						
$row=mysqli_fetch_assoc($result);
					
return $row['name'];
						
						
}

?>
<?php
if(isset($_GET['add_product']))
{
?>
<center><h1>Add Product</h1></center>
<div class='container'>
	<div class='row d-flex justify-content-center'>
		<div class='col-md-6 p-4' style='background:white; box-shadow:5px 10px 5px black;'>
		 <a href='product.php?manage_product' class='btn btn-primary'>Manage Product</a>
			<form class='mt-4' action='action.php' method='post' enctype="multipart/form-data">
			<div class='row'>
				<div class='col-md-4 mb-2'><b>Name</b></div>
				
				<div class='col-md-8 mb-2'><input type="text" name='name' class='form-control'></div>
			</div>
			<div class='row'>
				<div class='col-md-4 mb-2'><b>Category</b></div>
				
				<div class='col-md-8 mb-2'>
					<select class='form-control' name='category'>
					<option>Select Any</option>
					<?php
				    $sql = "SELECT * FROM `category` order by id DESC";
					$result=mysqli_query($con,$sql);
					
					while($row=mysqli_fetch_array($result))
					{
						echo "<option value='$row[id]'>".$row['name']."</option>";
						
					}
					
					?>
					</select>
				</div>
				</div>
				
				<div class='row'>
				<div class='col-md-4 mb-2'><b>Regular Price</b></div>
				
				<div class='col-md-8 mb-2'>
					<div class='col-md-8 mb-2'><input type="number" name='regular' class='form-control'></div>
				</div>
				</div>
				<div class='row'>
				<div class='col-md-4 mb-2'><b>Sell Price</b></div>
				
				<div class='col-md-8 mb-2'>
					<div class='col-md-8 mb-2'><input type="number" name='sell' class='form-control'></div>
				</div>
				</div>
				
				<div class='row'>
				<div class='col-md-4 mb-2'><b>Image</b></div>
				
				<div class='col-md-8 mb-2'>
					<input type="file" name='file' class='form-control'>
				</div>
				</div>
				<input name="addproduct" class='btn btn-success' value='Add Product' type="submit">
			</form>
	 </div>
	</div>
	

</div>

<?php
}
?>

<?php
if(isset($_GET['manage_product']))
{
?>

<center><h1>Manage Product</h1></center>
<div class='container'>
	<div class='row d-flex justify-content-center'>
		<div class='col-md-8 p-4' style='background:white; box-shadow:5px 10px 5px black;'>
		 <a href='product.php?add_product' class='btn btn-primary'>Add Product</a>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Regular Price</th>
	  <th scope="col">Sell Price</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  
  $sql = "SELECT * FROM `product` order by id DESC";
					$result=mysqli_query($con,$sql);
					$i=1;
					while($row=mysqli_fetch_array($result))
					{
					
  ?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$row['name']?></td>
      <td><?=cate($row['category'])?></td>
      <td><?=$row['rprice']?></td>
	  <td><?=$row['sprice']?></td>
      <td><a href="action.php?prid=<?=$row['id']?>&prdel" class='btn btn-danger'>Delete</a></td>
    </tr>
<?php
$i++;
}
?>
  </tbody>
</table>
		
	 </div>
	</div>
	

</div>
<?php
}
?>

<?php
include "footer.php";
}
else
{
	header('Location:index.php');
}
?>