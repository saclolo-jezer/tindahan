<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { 
	if(isset($_SESSION['user']) &&  $_SESSION['user']['roles_id'] == 1) {
		global $conn;
	?>

	<div class="container">
		<div>
			<h4>Orders Admin Page</h4>
			<div>
				<div class="col-sm-10 offset-sm-1">
					<table class="table table-striped">
						<thead>
							<th>Transaction code</th>
							<th>Status</th>
							<th>Actions</th>
						</thead>
						<tbody>
							<?php 
							$order_query = "SELECT o.id, o.transaction_code, o.status_id, s.name AS status FROM orders o JOIN statuses s ON (o.status_id = s.id); ";
							$orders = mysqli_query($conn, $order_query);
							foreach($orders as $order) {
							 ?>

							 <tr>
							 	<td><?php echo $order['transaction_code']; ?></td>
							 	<td><?php echo $order['status']; ?></td>
							 	<td>
							 		<?php if($order['status']=="pending") { ?>
							 			<a href="../controllers/complete_order.php?id=<?php echo $order['id']; ?>" class="btn btn-success">Complete Order</a>
							 			<a href="../controllers/cancel_order.php?id=<?php echo $order['id']; ?>" class="btn btn-danger">Cancle Order</a>
							 		<?php } ?>
							 	</td>
							 </tr>
							<?php } ?>
						</tbody>
					</table><!-- end of table -->
				</div><!-- end of cols -->
			</div><!-- end of row -->
		</div>
	</div><!-- end of container -->

<?php } else {
	header('location: ./error.php');
} ?>

<?php } ?>