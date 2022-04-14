<?php
include "header.php";

?>

    <!-----carousal---->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider1.jpg"
                    width="600" height="450" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slider2.jpg"
                    width="600" height="450" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slider3.jpg"
                    width="600" height="450" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>





    <!--------------Feature  Products ----------->
    <div class="section">
        <div class="cards">
            <div class="new-arrival">
                <h2>Featured Products</h2>
            </div>
			<?php 
			 $sql = "SELECT * FROM `product` order by rand()";
					$result=mysqli_query($con,$sql);
					
					while($row=mysqli_fetch_array($result))
					{
			?>
            <div class="card">
                <div class="image-section">
                    <img src="admin/<?=$row['file']?>" style="width:100%;height:300px">
                </div>
                <div class="description">
                    <h1><?=$row['name']?></h1>
                    <p>Price <span>₹<?=$row['sprice']?><del>₹<?=$row['rprice']?></del></span></p>
                </div>
                <div class="button-group">
                    <a href="" class="buy">Buy</a>
                    <a href="index.php?id=<?=$row['id']?>&name=<?=$row['name']?>&img=admin/<?=$row['file']?>&price=<?=$row['sprice']?>&cart" class="card">Add To Card</a>
                </div>
                
            </div>
			<?php
					}
			?>
			
        </div>
    </div>
	
	<!---------------------- start Section 2------------->
	
	

	
	
	<!------------------- end Section 2-------------> 
    


<?php
include "footer.php";

?>



