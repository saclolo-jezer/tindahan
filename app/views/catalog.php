<?php require_once '../partials/template.php'; ?>
<?php function get_page_content() {
	if(!isset($_SESSION['user']) || (isset($_SESSION['user'])) && $_SESSION['user']['roles_id'] == 2) {
 ?>

<?php require_once '../controllers/connect.php'; 
	  global $conn; 
?>

<div class="container">
	<div class="row">
		<!-- categories -->
		<div class="col-sm-2">
			<!-- display categories -->
			<h2>Categories</h2>
			<ul class="list-group">
				<a href="catalog.php">
					<li class="list-group-item"> All </li>
				</a>
				<?php 
					$sql = "SELECT * FROM categories";
					$categories = mysqli_query($conn,$sql);
					foreach ($categories as $category) { ?>
						<a href="catalog.php?category_id=<?php echo $category['id'] ; ?>">
							<li class="list-group-item">
							<?php echo $category['name']; ?>
							</li>
						</a>
				 <?php } ?>
			</ul>

			<!-- set a get request on click of the achor tag -->
			<h2>Sort</h2>
			<ul class="list-group border">
				<a href="../controllers/sort.php?sort=asc">
					<li class="list-group-item">
						Price(Lowest to Highest)
					</li>
				</a>
				<a href="../controllers/sort.php?sort=desc">
					<li class="list-group-item">
						Price(Highest to Lowest)
					</li>
				</a>
				
			</ul>
			
		</div><!-- end of categories -->
		<!-- items -->
		<div class="col-sm-10">
			<div class="container">
				<?php 
					$sql2 ="SELECT * FROM items";
					// filter via category
					if(isset($_GET['category_id'])) {
						$sql2 .=" WHERE category_id=" .$_GET['category_id'];
					}

					if(isset($_SESSION['sort'])) {
						$sql2 .= $_SESSION['sort']; 
					}

					$items = mysqli_query($conn,$sql2);
					

					echo "<div class='row'>";
					foreach ($items as $item) { ?>
						<div class="col-sm-3">
							<div class="card h-100">
								<img class="card-img-top" src="<?php echo $item['image_path']; ?>">
								<div class="card-body">
									<h4 class="card-title">
										<?php echo $item['name']; ?>
									</h4>
									<p class="card-text">
										<?php echo $item['description']; ?>
										<br>
										<?php echo $item['price']; ?>
									</p>
									
								</div>

								<!-- add to cart -->
								<div class="card-footer">
									<input type="number" class="form-control" value="1" min="1">
									<button type="submit" class="btn btn-block btn-outline-primary add-to-cart" data-id="<?php echo $item['id']; ?>"> Add to cart</button>
									
								</div><!-- end of card footer -->



							</div>
						</div> <!-- end card -->
					<?php } echo"</div>"?>
			</div>
		</div><!-- end items -->
	</div><!-- end row -->
</div>

<?php } else {
	header('Location: ./error.php');
} ?>

<?php }	?>
