<?php
  include_once'fh/header.php'
?>



<?php   

include ('db.inc.php');

$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products_c3140` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>







 	<link rel="stylesheet" href="css/style.css" >

  <section >
  





<?php

$result = mysqli_query($con,"SELECT * FROM `products_c3140`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div style='
	padding: 10px;
	text-align: center;'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div style='display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;'><img src='".$row['image']."' /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>$".$row['price']."</div>
			  <button type='submit' style='text-transform: uppercase;
    background: #F68B1E;
    border: 1px solid #F68B1E;
    cursor: pointer;
    color: #fff;
    padding: 8px 40px;
    margin-top: 10px;'>Buy Now</button>
			  </form>
		   	  </div>";
        }
mysqli_close($con);
?>
		
			

     

<div style="clear:both;"></div>

<div class="message_box" style="margin:20px 0px;">
<?php echo $status; ?>
</div>
</div>

<br /><br />

</div>
</section>


<?php
  include_once'fh/foot.php'
?>
