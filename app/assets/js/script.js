$(document).ready( () => {
	function validate_registration_form(){
		let errors = 0;
		let	username = $("#username").val();
		let	password = $("#password").val();
		let	firstname = $("#firstname").val();
		let	lastname = $("#lastname").val();
		let	email = $("#email").val();
		let	address = $("#address").val();

		//username should be greater than or equal to 10 characters

		if(username.length < 10) {
			$("#username").next().css('color','red')
			$("#username").next().html("Username should be at least 10 characters");
			errors++;
		}else{
			$('#username').next().html(' ');
		}

		//password should be atleast 8 characters
		if(password.length < 8) {
			$("#password").next().css('color','red')
			$("#password").next().html("Please provide a stronger password");
			errors++;
		}else{
			$("#password").next().html(' ');
		}

		//email should include @ symbol
		if(!email.includes("@")) {
			$("#email").next().css('color','red')
			$("#email").next().html("Please provide a valid email");
			errors++;
		}else{
			$("#email").next().html(' ');
		}

		if(!address !="") {
			$("#address").next().css('color','red')
			$("#address").next().html("Please provide a valid address");
			errors++;
		}else{
			$("#address").next().html(' ');
		}

		//firstname
		if (!firstname !="") {
			$("#firstname").next().css('color','red')
			$("#firstname").next().html("Please provide a valid firstname");
		}else{
			$("#firstname").next().html('');
		}
		//lastname
		if (!firstname !="") {
			$("#lastname").next().css('color','red')
			$("#lastname").next().html("Please provide a valid lastname");
		}else{
			$("#lastname").next().html('');
		}
		//confirm password
		if(password !== $("#confirm_password").val()) {
			$("#confirm_password").next().css('color','red')
			$("#confirm_password").next().html("Password should match");
			errors++;
		}else{
			$("#confirm_password").next().html('');
		}

		if(errors > 0) {
			return false;//this means there are errors
		}else{
			return true;
		}


	}




//ok go na pasok na tong mga data ilagay na sa table
	$("#add_user").click( (e) => {
		if(validate_registration_form()) {
			let	username = $("#username").val();
			let	password = $("#password").val();
			let	firstname = $("#firstname").val();
			let	lastname = $("#lastname").val();
			let	email = $("#email").val();
			let	address = $("#address").val();

			$.ajax({
				"url" : '../controllers/create_user.php',
				"method" : "POST",
				"data" : {
					'username' : username,
					'password' : password,
					'firstname' : firstname,
					'lastname' : lastname,
					'email' : email,
					'address' : address
				},
				"succes":(data) => {
					if(data == "user_exists") {
						$("#username").next().html("Username already exists");
					}else{
						alert("user created successfully");
						//redirect browser
						window.location.replace("../../index.php")	
					}
				}
			});
		}
	});









	//login and session
	$("#login").click( (e) => {
		let username = $("#username").val();
		let password = $("#password").val();



		$.ajax({
			"url" : "../controllers/authenticate.php",
			"method" : "POST",
			"data" : {
				'username':username,
				'password':password
			},
			"success":(data) => {
				if(data == "login_failed") {
					$("#username").next().css('color', 'red');
					$("#username").next().html("Please provide correct");
				}else{
					window.location.replace("../views/home.php");
				}
			}
		})
	});

	//prep for add to cart

	$(document).on('click', '.add-to-cart', (e) => {
		//to prevent default behavior and to override it with our own
		e.preventDefault();
		//prevent parent elements to be triggered ,,jquery bubling
		e.stopPropagation();
		//target is the one who triggered event
		let item_id = $(e.target).attr("data-id");
		let item_quantity = parseInt($(e.target).prev().val());

		$.ajax({
			"url" : "../controllers/update_cart.php",
			"method" : "POST",
			"data" : {
				'item_id':item_id,
				'item_quantity':item_quantity
			},
			"success" : (data) => {
				$("#cart-count").html(data);
			}
		});
	});





});
