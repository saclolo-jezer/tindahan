<?php 
session_start();
	
	function getCartCount() {
		return array_sum($_SESSION['cart']);
	}
	
	$item_id = $_POST['item_id'];
	$item_quantity = $_POST['item_quantity'];


	// $_SESSION['cart'][$item_id] = $item_quantity;

	if($item_quantity == "0") {
		unset($_SESSION['cart'][$item_id]);
	} else {
		if(isset($_SESSION['cart'][$item_id])) {
			$update_flag = $_POST['update_from_cart_page'];
			if ($update_flag == 0) {
				//add the item_quantity as the new value
				//in catalog page , add as there is an existing value
				$_SESSION['cart'][$item_id] += $item_quantity;
			} else {
			//if there is no value, assign $_SESSION['cart'][$item_id] as the value of $_SESSION['cart'][$item_id]
			//in cart page, reassign new value
			$_SESSION['cart'][$item_id] = $item_quantity;
			}
		} else {
			//assign as there is no value yet
			$_SESSION['cart'][$item_id] = $item_quantity;
		}
	}
	echo getCartCount();
 ?>