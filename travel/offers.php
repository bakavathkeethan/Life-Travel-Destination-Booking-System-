<!DOCTYPE html>
<html lang="en">

<head>
	<title>Offers</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travelix Project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
	<link rel="icon" href="images/lifetravel-logo.png">
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
			<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/adams-peak3"></div>
			<div class="home_content">
				<div class="home_title">our offers</div>
			</div>
		</div>

		<!-- Offers -->

		<div class="offers">

			<!-- Search -->

			<div class="search">
				<div class="search_inner">

					<!-- Search Contents -->

					<div class="container fill_height no-padding">
						<div class="row fill_height no-margin">
							<div class="col fill_height no-padding">

								<!-- Search Tabs -->

								<div class="search_tabs_container">
									<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
										<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>hotels</span></div>
										<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">car rentals</div>
										<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
										<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">trips</div>
										<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">cruises</div>
										<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">activities</div>
									</div>
								</div>

								<!-- Search Panel -->

								<div class="search_panel active">
									<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
										<div class="search_item">
											<div>destination</div>
											<input type="text" class="destination search_input" required="required">
										</div>
										<div class="search_item">
											<div>check in</div>
											<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
										</div>
										<div class="search_item">
											<div>check out</div>
											<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
										</div>
										<div class="search_item">
											<div>adults</div>
											<select name="adults" id="adults_1" class="dropdown_item_select search_input">
												<option>01</option>
												<option>02</option>
												<option>03</option>
											</select>
										</div>
										<div class="search_item">
											<div>children</div>
											<select name="children" id="children_1" class="dropdown_item_select search_input">
												<option>0</option>
												<option>02</option>
												<option>03</option>
											</select>
										</div>
										<div class="extras">
											<ul class="search_extras clearfix">
												<li class="search_extras_item">
													<div class="clearfix">
														<input type="checkbox" id="search_extras_1" class="search_extras_cb">
														<label for="search_extras_1">Pet Friendly</label>
													</div>
												</li>
												<li class="search_extras_item">
													<div class="clearfix">
														<input type="checkbox" id="search_extras_2" class="search_extras_cb">
														<label for="search_extras_2">Car Parking</label>
													</div>
												</li>
												<li class="search_extras_item">
													<div class="clearfix">
														<input type="checkbox" id="search_extras_3" class="search_extras_cb">
														<label for="search_extras_3">Wireless Internet</label>
													</div>
												</li>
												<li class="search_extras_item">
													<div class="clearfix">
														<input type="checkbox" id="search_extras_4" class="search_extras_cb">
														<label for="search_extras_4">Reservations</label>
													</div>
												</li>
												<li class="search_extras_item">
													<div class="clearfix">
														<input type="checkbox" id="search_extras_5" class="search_extras_cb">
														<label for="search_extras_5">Private Parking</label>
													</div>
												</li>
												<li class="search_extras_item">
													<div class="clearfix">
														<input type="checkbox" id="search_extras_6" class="search_extras_cb">
														<label for="search_extras_6">Smoking Area</label>
													</div>
												</li>
												<li class="search_extras_item">
													<div class="clearfix">
														<input type="checkbox" id="search_extras_7" class="search_extras_cb">
														<label for="search_extras_7">Wheelchair Accessible</label>
													</div>
												</li>
												<li class="search_extras_item">
													<div class="clearfix">
														<input type="checkbox" id="search_extras_8" class="search_extras_cb">
														<label for="search_extras_8">Pool</label>
													</div>
												</li>
											</ul>
										</div>
										<div class="more_options">
											<div class="more_options_trigger">
												<a href="#">load more options</a>
											</div>
											<ul class="more_options_list clearfix">
												<li class="more_options_item">
													<div class="clearfix">
														<input type="checkbox" id="more_options_1" class="search_extras_cb">
														<label for="more_options_1">Pet Friendly</label>
													</div>
												</li>
												<li class="more_options_item">
													<div class="clearfix">
														<input type="checkbox" id="more_options_2" class="search_extras_cb">
														<label for="more_options_2">Car Parking</label>
													</div>
												</li>
											</ul>
										</div>
										<button class="button search_button">search<span></span><span></span><span></span></button>
									</form>
								</div>

								<!-- Search Panel -->

								<div class="search_panel">
									<form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
										<div class="search_item">
											<div>destination</div>
											<input type="text" class="destination search_input" required="required">
										</div>
										<div class="search_item">
											<div>check in</div>
											<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
										</div>
										<div class="search_item">
											<div>check out</div>
											<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
										</div>
										<div class="search_item">
											<div>adults</div>
											<select name="adults" id="adults_2" class="dropdown_item_select search_input">
												<option>01</option>
												<option>02</option>
												<option>03</option>
											</select>
										</div>
										<div class="search_item">
											<div>children</div>
											<select name="children" id="children_2" class="dropdown_item_select search_input">
												<option>0</option>
												<option>02</option>
												<option>03</option>
											</select>
										</div>
										<button class="button search_button">search<span></span><span></span><span></span></button>
									</form>
								</div>

								<!-- Search Panel -->

								<div class="search_panel">
									<form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
										<div class="search_item">
											<div>destination</div>
											<input type="text" class="destination search_input" required="required">
										</div>
										<div class="search_item">
											<div>check in</div>
											<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
										</div>
										<div class="search_item">
											<div>check out</div>
											<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
										</div>
										<div class="search_item">
											<div>adults</div>
											<select name="adults" id="adults_3" class="dropdown_item_select search_input">
												<option>01</option>
												<option>02</option>
												<option>03</option>
											</select>
										</div>
										<div class="search_item">
											<div>children</div>
											<select name="children" id="children_3" class="dropdown_item_select search_input">
												<option>0</option>
												<option>02</option>
												<option>03</option>
											</select>
										</div>
										<button class="button search_button">search<span></span><span></span><span></span></button>
									</form>
								</div>

								<!-- Search Panel -->

								<div class="search_panel">
									<form action="#" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
										<div class="search_item">
											<div>destination</div>
											<input type="text" class="destination search_input" required="required">
										</div>
										<div class="search_item">
											<div>check in</div>
											<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
										</div>
										<div class="search_item">
											<div>check out</div>
											<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
										</div>
										<div class="search_item">
											<div>adults</div>
											<select name="adults" id="adults_4" class="dropdown_item_select search_input">
												<option>01</option>
												<option>02</option>
												<option>03</option>
											</select>
										</div>
										<div class="search_item">
											<div>children</div>
											<select name="children" id="children_4" class="dropdown_item_select search_input">
												<option>0</option>
												<option>02</option>
												<option>03</option>
											</select>
										</div>
										<button class="button search_button">search<span></span><span></span><span></span></button>
									</form>
								</div>

								<!-- Search Panel -->

								<div class="search_panel">
									<form action="#" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
										<div class="search_item">
											<div>destination</div>
											<input type="text" class="destination search_input" required="required">
										</div>
										<div class="search_item">
											<div>check in</div>
											<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
										</div>
										<div class="search_item">
											<div>check out</div>
											<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
										</div>
										<div class="search_item">
											<div>adults</div>
											<select name="adults" id="adults_5" class="dropdown_item_select search_input">
												<option>01</option>
												<option>02</option>
												<option>03</option>
											</select>
										</div>
										<div class="search_item">
											<div>children</div>
											<select name="children" id="children_5" class="dropdown_item_select search_input">
												<option>0</option>
												<option>02</option>
												<option>03</option>
											</select>
										</div>
										<button class="button search_button">search<span></span><span></span><span></span></button>
									</form>
								</div>

								<!-- Search Panel -->

								<div class="search_panel">
									<form action="#" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
										<div class="search_item">
											<div>destination</div>
											<input type="text" class="destination search_input" required="required">
										</div>
										<div class="search_item">
											<div>check in</div>
											<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
										</div>
										<div class="search_item">
											<div>check out</div>
											<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
										</div>
										<div class="search_item">
											<div>adults</div>
											<select name="adults" id="adults_6" class="dropdown_item_select search_input">
												<option>01</option>
												<option>02</option>
												<option>03</option>
											</select>
										</div>
										<div class="search_item">
											<div>children</div>
											<select name="children" id="children_6" class="dropdown_item_select search_input">
												<option>0</option>
												<option>02</option>
												<option>03</option>
											</select>
										</div>
										<button class="button search_button">search<span></span><span></span><span></span></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Offers -->

			<div class="container">
				<div class="row">
					<div class="col-lg-1 temp_col"></div>
					<div class="col-lg-11">

						<!-- Offers Sorting -->
						<div class="offers_sorting_container">
							<ul class="offers_sorting">
								<li>
									<span class="sorting_text">price</span>
									<i class="fa fa-chevron-down"></i>
									<ul>
										<li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }' data-parent=".price_sorting"><span>show all</span></li>
										<li class="sort_btn" data-isotope-option='{ "sortBy": "price" }' data-parent=".price_sorting"><span>ascending</span></li>
									</ul>
								</li>
								<li>
									<span class="sorting_text">location</span>
									<i class="fa fa-chevron-down"></i>
									<ul>
										<li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>default</span></li>
										<li class="sort_btn" data-isotope-option='{ "sortBy": "name" }'><span>alphabetical</span></li>
									</ul>
								</li>
								<li>
									<span class="sorting_text">stars</span>
									<i class="fa fa-chevron-down"></i>
									<ul>
										<li class="filter_btn" data-filter="*"><span>show all</span></li>
										<li class="sort_btn" data-isotope-option='{ "sortBy": "stars" }'><span>ascending</span></li>
										<li class="filter_btn" data-filter=".rating_3"><span>3</span></li>
										<li class="filter_btn" data-filter=".rating_4"><span>4</span></li>
										<li class="filter_btn" data-filter=".rating_5"><span>5</span></li>
									</ul>
								</li>
								<li class="distance_item">
									<span class="sorting_text">distance from center</span>
									<i class="fa fa-chevron-down"></i>
									<ul>
										<li class="num_sorting_btn"><span>distance</span></li>
										<li class="num_sorting_btn"><span>distance</span></li>
										<li class="num_sorting_btn"><span>distance</span></li>
									</ul>
								</li>
								<li>
									<span class="sorting_text">reviews</span>
									<i class="fa fa-chevron-down"></i>
									<ul>
										<li class="num_sorting_btn"><span>review</span></li>
										<li class="num_sorting_btn"><span>review</span></li>
										<li class="num_sorting_btn"><span>review</span></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-12">
						<!-- Offers Grid -->

						<div class="offers_grid">

							<!-- Offers Item -->

							<div class="offers_item rating_4">

								<div class="row">
									<?php
									// Database connection
									$conn = new mysqli("localhost", "root", "", "travel");

									// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									}

									// Fetch offers from the database

									$sql = "SELECT * FROM packages";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {
											$image_path = isset($row['image_path']) ? $row['image_path'] : 'default_image.jpg'; // Default image path
											$name = isset($row['name']) ? $row['name'] : 'Unnamed Package'; // Default name
											$price = isset($row['price']) ? $row['price'] : '0.00'; // Default price

											echo '<div class="offers_item rating_' . $row['rating'] . '">';
											echo '<div class="row">';
											echo '<div class="col-lg-1 temp_col"></div>';
											echo '<div class="col-lg-3 col-1680-4">';
											echo '<div class="offers_image_container">';
											echo '<div class="offers_image_background" style="background-image:url(' . $image_path . ')"></div>';
											echo '<div class="offer_name"><a href="single_listing.html">' . $name . '</a></div>';
											echo '</div></div>';
											echo '<div class="col-lg-8">';
											echo '<div class="offers_content">';
											echo '<div class="offers_price">$' . $price . '<span></span></div>';
											echo '<div class="rating_r rating_r_' . $row['rating'] . ' offers_rating" data-rating="' . $row['rating'] . '">';
											for ($i = 0; $i < $row['rating']; $i++) {
												echo '<i></i>';
											}
											for ($i = $row['rating']; $i < 5; $i++) {
												echo '<i class="inactive"></i>';
											}
											echo '</div>';
											echo '<p class="offers_text">' . $row['description'] . '</p>';
											echo '<div class="button book_button"><a href="Booking.php">book<span></span><span></span><span></span></a></div>';
											echo '</div></div></div></div>';
										}
									} else {
										echo "No offers available.";
									}

									$conn->close();

									?>


									<div class="col-lg-1 temp_col"></div>
									<div class="col-lg-3 col-1680-4">
										<div class="offers_image_container">
											<!-- Image by https://unsplash.com/@kensuarez -->
											<div class="offers_image_background" style="background-image:url(images/adams-peak3.jpg)"></div>
											<div class="offer_name"><a href="single_listing.html">Adams-Peak</a></div>
										</div>
									</div>
									<div class="col-lg-8">
										<div class="offers_content">
											<div class="offers_price">$20<span></span></div>
											<div class="rating_r rating_r_4 offers_rating" data-rating="4">
												<i></i>
												<i></i>
												<i></i>
												<i></i>
												<i></i>
											</div>
											<p class="offers_text">Adam’s Peak (Sri Pada) is also known as the “butterfly
												mountain”. At an elevation of 2,243 metres (7,359 ft) it is
												a stunning tall conical mountain. in Hindu
												tradition that of Shiva. We will organize an experienced
												guide to walk up with you.</p>
											<!--	<div class="offers_icons">
												<ul class="offers_icons_list">
													<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
													<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
													<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
													<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
												</ul>
											</div>-->

											<?php if (!isset($_SESSION['username'])) {

											?>
												<div class="user_box ml-auto">
													<div class="button book_button"><a href="login.php">book<span></span><span></span><span></span></a></div>
												</div>
											<?php
											} else {

											?>

												<div class="button book_button"><a href="Booking.php">book<span></span><span></span><span></span></a></div>
										</div>
									<?php
											}
									?>



									<!--<div class="offer_reviews">
										<div class="offer_reviews_content">
											<div class="offer_reviews_title">very good</div>
											<div class="offer_reviews_subtitle">100 reviews</div>
										</div>
										<div class="offer_reviews_rating text-center">8.1</div>
									</div>-->
									</div>
								</div>
							</div>
						</div>
						<br><br>


						\

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->


	<!-- Copyright -->

	<?php include_once('fotter.php') ?>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/offers_custom.js"></script>

</body>

</html>