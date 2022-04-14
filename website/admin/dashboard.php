<?php
session_start();
if(isset($_SESSION['user']))
{
include "header.php";

?>

<center><h1>Welcome <?php echo $_SESSION['user']; ?></h1>


</center>
<?php
include "footer.php";
}
else
{
	header('Location:index.php');
}
?>