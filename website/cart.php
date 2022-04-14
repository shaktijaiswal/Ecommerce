<?php
session_start();
?>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />

<title>Add to cart</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap');
 *{
   margin: 0; 
 padding: 0;
 box-sizing: border-box; 
 font-family: 'Mulish', sans-serif; 
 }
:root { 
 --text-clr: #4f4f4f; 
    } 
    .icon-bar{
        background: grey;
    }
 .navbar{
 display:flex;
 align-items:center;
 padding:20px;
        }
nav{
 flex: 1;
 text-align: right;
}
nav ul{
 display:inline-block;
list-style-type:none;
        
}
nav ul li{
 display:inline-block;
 margin-right:20px;
 font-size: 20px;
        }
 a{
 text-decoration:none;
 color:#555;
}
p{
 color:#555
 }
 .container{
  max-width:1300px;
margin:auto;
 padding-left:1px;
 padding-right:1px;
        } 
a {
 text-decoration: none;
 color: var(--text-clr);
  } 
 a:hover {
 text-decoration: none; 
 color: var(--text-clr); 
 } 
 h2 {
color: var(--text-clr); 
font-size: 1.5rem;
 } 
 .main_cart { 
 background: #fff;
 } 
.card { 
  border: none; 
 }
 .product_img img 
{
 min-width: 200px;
max-height: 200px; 
 }
.product_name {
 color: black; 
 font-size: 1.4rem;
 text-transform: capitalize;
 font-weight: 500;
 } 
 .card-title p
   {
 font-size: 0.9rem;
font-weight: 500;
}
.remove-and-wish p
 {
font-size: 0.8rem;
 margin-bottom: 0;
 }
 .price-money h3 { 
 font-size: 1rem;
 font-weight: 600;
 }
.set_quantity
 {
 position: relative;
}
 .set_quantity::after {
  content: "(Note, 1 piece)";
 width: auto;
 height: auto; 
text-align: center;
 position: absolute;
 bottom: -20px;
right: 1.5rem; 
 font-size: 0.8rem; 
}
.page-link {
 line-height: 16px; 
 width: 45px;
 font-size: 1rem;
 display: flex; 
 justify-content: center;
 align-items: center;
  color: #495057; 
 } 
 .page-item input {
 line-height: 22px;
 padding: 3px;
 font-size: 15px;
  display: flex;
 justify-content: center;
 align-items: center;
  text-align: center;
  } 
 .page-link:hover
     { 
     text-decoration: none; 
        color: #495057;
     outline: none !important;
     }
 .page-link:focus { 
 box-shadow: none;
  }
      .price_indiv p { 
 font-size: 1.1rem; 
     }
 .fa-heart:hover {
   color: red; 
   }

   /*footer
  .footer{
      background-color: #000;
      color: #8a8a8a;
      font-size: 14px;
     padding: 60px 0 20px;
  }

  .footer p{
color:#8a8a8a;
  }
  .footer h3{
      color:#fff;
      margin-bottom:20px;
  }
  .footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
      min-width:250px;
      margin-bottom:20px;

  }
  .footer-col-1{
      flex-basis:30%
  }
  .footer-col-2{
      flex:1;
      text-align:center;
  }
  .footer-col-2 img{
      width:180px;
      margin-bottom: 20px;
  }*/

  .menu-icon{
      width:28px;
      margin-left:20px;
      display:none;

  }
  @media only screen and (max-width:800px){
      nav ul{
          position:absloute;
          top:70px;
          left:0;
          background: #333;
          width:100%;
          overflow:hidden;
          transition:max-height 0.5s;
      }
      nav ul li{
          display:block;
          margin-right:50px;
          margin-top:10px;
          margin-bottom:16px;
      }
      nav ul li a{
          color:#fff;
      }
      .menu-icon{
          display:block;
          cursor:pointer;
      }
  }

</style>
</head>
<body class="bg-light">
     <!-- start navbar-->
     <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="img/logo.png" alt="logo" width="250px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="cart.php">cart</a></li>
                    
                  
                    
                </ul>
            </nav>
            
        </div>
    </div>
    <!--end navbar-->

<div class="container-fluid">
       <div class="row">
            <div class="col-md-10 col-11 mx-auto">
<div class="row mt-5 gx-3">
          <!-- left side div -->
      <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">
 
 <?php
 foreach($_SESSION["shopping_cart"] as $keys => $values)
		{ 
 ?>
 <div class="card p-4">
<div class="row">
<!-- cart images div -->
<div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
<img src="<?=$values['item_img']?>" class="img-fluid" alt="cart img">
</div>
<!-- cart product details -->
<div class="col-md-7 col-11 mx-auto px-4 mt-2">
    <div class="row">
    <!-- product name  -->
    <div class="col-6 card-title">
    <h1 class="mb-4 product_name"><?=$values['item_name']?></h1>
    
    </div>
    <!-- quantity inc dec -->
 
    </div>
    <!-- //remover move and price -->
    <div class="row">
    
    <div class="col-4 d-flex justify-content-end price_money">
    <h3><span id="itemval"><?=$values['item_price']?>.00 </span></h3>
    </div>
    </div>
    </div>
    </div>
    </div>
    <hr/>
  <?php
  }
  ?>

	
	<!----------------------------->
    </div>
    <!-- right side div -->
    <div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
    <div class="right_side p-3 shadow bg-white">
    <h2 class="product_name mb-5">The Total Amount Of</h2>
   <?php
	
 foreach($_SESSION["shopping_cart"] as $keys => $values)
		{ 
		?>
	
	 <div class="price_indiv d-flex justify-content-between">
    <p><?=$values['item_name']?></p>
    <p><span id="product_total_amt"><?=$values['item_price']?></span></p>
	
    </div>
    <?php
	
		}
	?>
    <hr />
    <div class="total-amt d-flex justify-content-between font-weight-bold">
    <p>Total amount</p>
    <p><span id="total_cart_amt"> <?php
	$amount=0;
 foreach($_SESSION["shopping_cart"] as $keys => $values)
		{ 
		$amount+=$amount+((int)$values['item_price']);
		}
		echo $amount;
 ?></span></p>
    </div>
    <a href='checkout.php' class="btn btn-primary text-uppercase">Proceed To Checkout   <i class="fas fa-arrow-right"></i></a>
    
    </div>
   

    </div>
    </div>
    </div>
    </div>
    </div>
    <br><br><br>
<!--Footer section-->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone</p>
            </div>
            <div class="col-md-3">
                <img src="img/logo.png" style="width:100%;">
                <p>Our purpose Is To Sustainablt Make the Pleasure and Benefits of Sports Accessible to the Many</p>
            </div>
            <div class="col-md-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Blog Post</li>
                    <li>Blog Post</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Blog Post</li>
                    <li>Blog Post</li>
                </ul>
            </div>
          
        </div>
    </div>
</div>

















    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
   
    
    var product_total_amt = document.getElementById('product_total_amt');
    var shipping_charge = document.getElementById('shipping_charge');
    var total_cart_amt = document.getElementById('total_cart_amt');
    var discountCode = document.getElementById('discount_code1');
    const decreaseNumber = (incdec, itemprice) => {
    var itemval = document.getElementById(incdec);
    var itemprice = document.getElementById(itemprice);
    console.log( itemprice.innerHTML);
    // console.log(itemval.value);
    if(itemval.value <= 0){
    itemval.value = 0;
    alert('Negative quantity not allowed');
    }else{
    itemval.value = parseInt(itemval.value) - 1;
    itemval.style.background = '#fff';
    itemval.style.color = '#000';
    itemprice.innerHTML  = parseInt(itemprice.innerHTML) - 15;
    product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) - 15;
    total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
    }
    }
    const increaseNumber = (incdec, itemprice) => {
    var itemval = document.getElementById(incdec);
    var itemprice = document.getElementById(itemprice);
    // console.log(itemval.value);
    if(itemval.value >= 5){
    itemval.value = 5;
    alert('max 5 allowed');
    itemval.style.background = 'red';
    itemval.style.color = '#fff';
    }else{
    itemval.value = parseInt(itemval.value) + 1;
    itemprice.innerHTML  = parseInt(itemprice.innerHTML ) + 15;
    product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + 15;
    total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
    }
    }
    shopify
const  discount_code = () => {
let totalamtcurr = parseInt(total_cart_amt.innerHTML);
let error_trw = document.getElementById('error_trw');
if(discountCode.value === 'thapa'){
let newtotalamt = totalamtcurr - 15;
total_cart_amt.innerHTML = newtotalamt;
error_trw.innerHTML = "Hurray! code is valid";
}else{
error_trw.innerHTML = "Try Again! Valid code is thapa";
}
}
</script>
</body>
</html>