<?php require_once '../partials/template.php'; ?>
<?php function get_page_content() { ?>
	
	<div class="container">
		<div class="jumbotron bg-warning text-dark text-center mt-5">
			<h4>Login</h4>
		</div>
		<form>
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
				<span></span>
			</div>
			
		</form>
			<div class="text-center py-4">
				<a href="./register.php" class="btn btn-secondary">Register</a>
				<button type="submit" class="btn btn-warning" id="login">Login</button>
			</div>
		
	</div>

<?php } ?>