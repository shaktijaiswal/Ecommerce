<?php
require "connection.php";
if(isset($_POST['add_cate']))
{
	$name=$_POST['name'];
	$description=$_POST['description'];
	
	$query = "INSERT INTO `category` (name, description) VALUES ('$name','$description')";

$result=mysqli_query($con,$query);
if($result)
{
//echo "Data Inserted";	
header('Location:category.php');
}
else
{
	echo "Data not Inserted";
}

}


if(isset($_POST['addproduct']))
{
	$name=$_POST['name'];
	$cate=(int)$_POST['category'];
	$rprice=(int)$_POST['regular'];
	$sprice=(int)$_POST['sell'];
	$file=$_FILES['file']['name'];
	$tmpf=$_FILES['file']['tmp_name'];
	
	move_uploaded_file($tmpf,"upload/".$file);
	$file="upload/".$_FILES['file']['name'];
	$query = "INSERT INTO `product` (name, category,rprice,sprice,file) VALUES ('$name',$cate,$rprice,$sprice,'$file')";

$result=mysqli_query($con,$query);
if($result)
{
//echo "Data Inserted";	
header('Location:product.php?manage_product');
}
else
{
	echo "Data not Inserted";
}

}

if(isset($_GET['prdel']))
{
	$id=(int)$_GET['prid'];
	
$query = "DELETE FROM `product` WHERE id = $id";
	
$result=mysqli_query($con,$query);
if($result)
{
//echo "Data Inserted";	
header('Location:product.php?manage_product');
}
else
{
	echo "Data not Inserted";
}
}

?>