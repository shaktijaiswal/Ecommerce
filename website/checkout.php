<?php
include "header.php";
?>


<div class='container mt-4 mb-4'>
	<div class='row'>
	<div class='col-md-8'>
		<form action='action.php' method='post'>
		<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" class="form-control" name='fullname' required id="exampleInputEmail1" aria-describedby="emailHelp">   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">City</label>
    <input type="text" class="form-control" name='city' required id="exampleInputEmail1" aria-describedby="emailHelp">   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" class="form-control" required name='address' id="exampleInputEmail1" aria-describedby="emailHelp">   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="text" class="form-control" name='phone' required id="exampleInputEmail1" aria-describedby="emailHelp">   
  </div>

 
  

	</div>
	
	<div class='col-md-4'>
		<div class='row'>
	<div class='col-md-12 mt-3'>
		<h1>Total Amount</h1>
		<h4 class='text-center'>₹ <?php
	$amount=0;
 foreach($_SESSION["shopping_cart"] as $keys => $values)
		{ 
		$amount+=$amount+((int)$values['item_price']);
		}
		echo $amount;
 ?></h4>
		<button type="submit" name='placeorder' class="btn btn-primary">Place Order</button>
	</div>
	</div>
	</div>
	</form>
	</div>

</div>

<?php
include "footer.php";
?>


