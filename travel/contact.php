

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travelix Project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	<link rel="icon" href="images/lifetravel-logo.png">

</head>

<body>

	<div class="super_container">

		<!-- Header -->
		<!-- Header -->
		<?php include_once('head.php');



		include_once('nav.php');

		?>




		<!-- Home -->

		<div class="home">
			<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact_background.jpg"></div>
			<div class="home_content">
				<div class="home_title">contact</div>
			</div>
		</div>

		<!-- Contact -->

		<div class="contact_form_section">
			<div class="container">
				<div class="row">
					<div class="col">
						<?php
						$servername = "localhost"; // Change if your server is different
						$username = "root"; // Your MySQL username
						$password = ""; // Your MySQL password
						$dbname = "travel"; // Database name

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);

						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}

						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$name = $_POST['name'];
							$email = $_POST['email'];
							$subject = $_POST['subject'];
							$message = $_POST['message'];

							$sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)";
							$stmt = $conn->prepare($sql);
							$stmt->bind_param("ssss", $name, $email, $subject, $message);

							if ($stmt->execute()) {
								echo "<div style='color: green;'><h3>Message sent successfully!</h3></div>";
							} else {
								echo "Error: " . $sql . "<br>" . $conn->error;
							}

							$stmt->close();
						}

						$conn->close();
						?>

						<!-- Contact Form -->
						<div class="contact_form_container">
							<div class="contact_title text-center">get in touch</div>
							<form action="contact.php" method="POST" id="contact_form" class="contact_form">
								<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" name="name" required="required">
								<input type="email" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" name="email" required="required">
								<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" name="subject" required="required">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required"></textarea>
								<button type="submit" id="form_submit_button" class="form_submit_button button" name="feedback">send message</button>
							</form>

						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- About -->


		<!-- Google Map 

		<div class="travelix_map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>-->
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15756.059846340815!2d80.64122515956512!3d9.153120804610808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afea8b505493e5b%3A0x894632ab77e184a5!2sOddusuddan!5e0!3m2!1sen!2slk!4v1732354557545!5m2!1sen!2slk"
			width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy"
			referrerpolicy="no-referrer-when-downgrade"></iframe>
		<!-- Footer -->


		<!-- Copyright -->

		<?PHP include_once('fotter.php') ?>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
	<script src="js/contact_custom.js"></script>

</body>

</html>