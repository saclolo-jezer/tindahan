<?php require_once '../partials/template.php'; ?>
<?php function get_page_content() { 
	global $conn;	?>

	<div class="container">
		<div class="jumbotron bg-warning text-dark text-center mt-5">			
			<h4>Register</h4>				
		</div><!-- end jumbo -->
		
		<form>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="firstname">Firstname</label>
						<input type="text" id="firstname" class="form-control" name="firstname" placeholder="Enter your firstname here">
						<span class="validation"></span>
					</div>
					<div class="form-group">
						<label for="lastname">Lastname</label>
						<input type="text" id="lastname" class="form-control" name="lastname" placeholder="Enter your lastname here">
						<span class="validation"></span>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" id="email" class="form-control" name="email" placeholder="Enter your email here">
						<span class="validation"></span>
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" id="address" class="form-control" name="address" placeholder="Enter your address here">
						<span class="validation"></span>
					</div>

				</div><!-- end of left side -->
				<div class="col-sm-6">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" id="username" class="form-control" name="username" placeholder="Enter your username here">
						<span class="validation"></span>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" class="form-control" name="password" placeholder="Enter your password here">
						<span class="validation"></span>
					</div>
					<div class="form-group">
						<label for="confirm_password">Confirm_Password</label>
						<input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="Enter your confirm_password here">
						<span class="validation"></span>
					</div>
				</div><!-- end of right side -->
			</div><!-- end of row -->
		</form>

			<div class="text-center py-4 mb-5">
				<a href="./login.php" class="btn btn-secondary">Login</a>
				<button id="add_user" type="button" class="btn btn-danger">Register</button>
			</div>
	</div><!-- end of container -->


<?php } ?> 


