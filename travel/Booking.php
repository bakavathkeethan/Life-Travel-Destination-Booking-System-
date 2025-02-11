

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Booking</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travelix Project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
	<link rel="icon" href="images/lifetravel-logo.png">
	<link rel="stylesheet" href="styles/boo.css">
	

	<style>
		.btnn {
			height: 50px;
			width: 30%;
			background-color: #1d0b83;
			border: 0;
			border-radius: 15px;
			color: #fff;
			font-size: 18px;
			cursor: pointer;
			transition: all 0.3s;
			padding: 0 15px;
			margin: auto;
			margin-top: 25px;

		}

		.btnn:hover {
			opacity: 0.7;
		}
	</style>

</head>
<script>
		document.addEventListener("DOMContentLoaded", function() {
			const originalTitle = "Life Travel";

			// Function to maintain the title
			function maintainTitle() {
				document.title = originalTitle;
			}

			// Set the title initially
			maintainTitle();

			// Add event listener to all links
			const links = document.querySelectorAll("a");
			links.forEach(function(link) {
				link.addEventListener("click", function(event) {
					maintainTitle();
				});
			});

			// Override popstate for browser navigation
			window.addEventListener("popstate", maintainTitle);
		});
	</script>
<body>

	<div class="super_container">


		<?php include_once('head.php');
		include_once('nav.php');
		?>

		<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
			<h1>book now</h1>
		</div>

		<?php
		if (isset($_POST['send'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$location = $_POST['location'];
			$guests = $_POST['guests'];
			$arrivals = $_POST['arrivals'];
			$leaving = $_POST['leaving'];

			// Database connection
			$conn = new mysqli('localhost', 'root', '', 'travel');

			if ($conn->connect_error) {
				die('Connection Failed : ' . $conn->connect_error);
			} else {
				$stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
				$stmt->bind_param("ssississ", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);
				$stmt->execute();
				echo "<div style='color: green;'><h3>Booking successfully.</h3></div>";
				$stmt->close();
				$conn->close();
			}
		}
		?>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				document.querySelector('.book-form').addEventListener('submit', function(e) {
					// Assuming form submission was successful and page did not reload
					setTimeout(function() {
						// Clear all input fields
						document.querySelectorAll('.book-form input').forEach(input => input.value = '');
					}, 100); // Delay for smooth clearing after form submission
				});
			});
		</script>
		<section class="booking">

			<h1 class="heading-title">book your trip!</h1>

			<form method="post" class="book-form">

				<div class="flex">
					<div class="inputBox">
						<span>name :</span>
						<input type="text" placeholder="enter your name" name="name" required>
					</div>
					<div class="inputBox">
						<span>email :</span>
						<input type="email" placeholder="enter your email" name="email" required>
					</div>
					<div class="inputBox">
						<span>phone :</span>
						<input type="number" placeholder="enter your number" name="phone" required>
					</div>
					<div class="inputBox">
						<span>address :</span>
						<input type="text" placeholder="enter your address" name="address" required>
					</div>
					<div class="inputBox">
						<span>where to :</span>
						<input type="text" placeholder="place you want to visit" name="location" required>
					</div>
					<div class="inputBox">
						<span>how many :</span>
						<input type="number" placeholder="number of guests" name="guests" required>
					</div>
					<div class="inputBox">
						<span>arrivals :</span>
						<input type="date" name="arrivals" required>
					</div>
					<div class="inputBox">
						<span>leaving :</span>
						<input type="date" name="leaving" required>
					</div>
				</div>

				<input type="submit" value="submit" class="btnn" name="send">

			</form>

		</section>

		<?php include_once('fotter.php') ?>

	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/blog_custom.js"></script>
	<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the current date in the format yyyy-mm-dd
        let today = new Date().toISOString().split('T')[0];

        // Set the minimum attribute of the arrivals and leaving date inputs
        document.querySelector('input[name="arrivals"]').setAttribute('min', today);
        document.querySelector('input[name="leaving"]').setAttribute('min', today);

        // Additional validation to ensure the leaving date is not before the arrivals date
        document.querySelector('input[name="arrivals"]').addEventListener('change', function() {
            document.querySelector('input[name="leaving"]').setAttribute('min', this.value);
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const phoneInput = document.querySelector('input[name="phone"]');

        phoneInput.addEventListener('input', function() {
            const phoneNumber = phoneInput.value;
            const phonePattern = /^[+]?[0-9]{10,15}$/; // Generic pattern: allows optional '+' and 10-15 digits

            if (phonePattern.test(phoneNumber)) {
                phoneInput.setCustomValidity('');
            } else {
                phoneInput.setCustomValidity('Please enter a valid phone number (10 to 15 digits).');
            }
        });
    });


	const phonePattern = /^(\+1)?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/;
	


</script>



</body>

</html>