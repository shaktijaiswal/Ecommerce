<?php
session_start();
require "admin/connection.php";

if(isset($_POST['placeorder']))
{
	$name=$_POST['fullname'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$order='';
 foreach($_SESSION["shopping_cart"] as $keys => $values)
		{ 
		$order=$order.$values['item_id'];
		}

	
	$query = "INSERT INTO `order` (name, city,address,number,order_id) VALUES ('$name','$city','$address','$phone','$order')";

$result=mysqli_query($con,$query);
if($result)
{
//echo "Data Inserted";	
header('Location:success.php');
}
else
{
	echo "Data not Inserted";
	echo mysqli_error($con);
}

}



?>