<?php session_start();
ob_start();
 require 'include/config.php';


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
	<?php echo $tag_line;?>
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php include('include/header.php')?>
<?php
	
	// $cart = array();
?>
	<div id="main">
		<div id="products">
			<?php foreach($products as $val){ ?>
				<form action="?" method="post" enctype="multipart/form-data">
				<div id="product-101" class="product">
					<img src=<?php echo $val['image'] ?>>
					<h3 class="title"><a href="#"><?php echo $val['name'] ?></a></h3>
					<span><?php echo $val['price'] ?></span>
					<a name="cart"  class="add-to-cart" href="?action=add-to-cart&product_name=<?php echo $val['name']; ?>&product_price=<?php echo $val['price']?>&product_image=<?php echo $val['image'];?>&product_id=<?php echo $val['price']?>">Add To Cart</a>
				</div>
			</form>
			<?php } ?>
		</div>
	</div>

	<?php
	if(isset($_GET['action'])){
		$item = array(
			"name" => $_GET['product_name'],
			"image" => $_GET['product_image'],
			"price" => $_GET['product_price']
		);
		$_SESSION[$_GET['product_name']]= $item;
		 header('location:products.php');
		// print_r($_SESSION);
		// foreach ($_SESSION as $i => $value) {
		// 	unset($_SESSION[$i]);
		// }
	// 
	}
	?>
	<div class="out" >
		<h1>Cart Items</h1><br><br>
		<table id="tab">
			<tr id="out2">
				<th id="out2">Name</th>
				<th id="out2">Image</th>
				<th id="out2">Price</th>
			</tr>
			<?php foreach($_SESSION as $val) {?>
			<tr id="out2">
				<td id="out2"><?php echo $val['name'];?></td>
				<td id="out2"><img id="img" src=<?php echo $val['image'];?> alt=""></td>
				<td id="out2"><?php echo $val['price'];?></td>

			</tr>
			<?php } ?>
		</table>
		<a name="cart"  class="add-to-cart" href="?delete=delete-to-cart">Empty Cart</a>
	</div>
	
	<?php 
		if(isset($_GET['delete'])){
			session_destroy();
			header('location:products.php');
		}	
	?>
	
	<?php include('include/footer.php')?>
	
</body>
</html>