<?php require_once '../partials/template.php'; ?>
<?php function get_page_content() { ?>
	<div class="container bg-warning rounded p-3 mt-5">
		<h1 class="text-center">Register</h1>
		<form id="register_form" action="../controllers/register_endpoint.php" method="POST">
			<div class="form-group">
				<label for="firstname">Firstname</label>
				<input type="text" name="firstname" id="firstname" class="form-control">
				<span></span>
			</div>
			<div class="form-group">
				<label for="lasstname">Lastname</label>
				<input type="text" name="lasstname" id="lasstname" class="form-control">
				<span></span>
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" class="form-control">
				<span></span>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
				<span></span>
			</div>
			<div class="form-group">
				<label for="confirm_password">Confirm_Password</label>
				<input type="confirm_password" name="confirm_password" id="confirm_password" class="form-control">
				<span></span>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control">
				<span></span>
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="address" name="address" id="address" class="form-control">
				<span></span>
			</div>
			<button id="registerBtn" type="button" class="btn btn-outline-dark btn-block mb-5">Register</button>
		</form>
	</div>

	<script>
		$('#registerBtn').click( () => {
			let errorFlag = false;
			const firstname = $('#firstname').val();

			if (firstname === 0) {
				$('#firstname').next().css('color','red');
				$('#firstname').next().css('this field is required');
				errorFlag = true;
			} else {
				$.ajax({
					url : '../controllers/check_firstname.php',
					method : 'POST',
					data : {firstname: firstname},
					asyn
				})
			}
		}
	</script>




<?php require_once '../controllers/connect.php';
	global $conn;
 ?>
<?php }	?>


