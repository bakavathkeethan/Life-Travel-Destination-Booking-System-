<!DOCTYPE html>
<html lang="en">

<head>
    <title>LIFE TRAVEL</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="icon" href="images/lifetravel-logo.png">

    
</head>

<body>
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
    <div class="super_container">

    
        <?php
        include_once('head.php');
        include_once('nav.php');
        ?>
       
        </header>
      
        <div class="home">
        
            <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">
                    
                    <div class="owl-item home_slider_item">

                        <div class="home_slider_background" style="background-image:url(images/ADVA.png)"></div>

                        <div class="home_slider_content text-center">
                            <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                                <div class="button home_slider_button">

                                </div>
                            </div>
                        </div>
                    </div>

                  
                    <div class="owl-item home_slider_item">
                        <div class="home_slider_background" style="background-image:url(images/hq720.jpg)"></div>

                        <div class="home_slider_content text-center">
                            <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                                <h1>discover</h1>
                                <h1>the world</h1>
                                <div class="button home_slider_button">
                                    <div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    <div class="owl-item home_slider_item">
                        <div class="home_slider_background" style="background-image:url(images/adams-peak3.jpg)"></div>

                        <div class="home_slider_content text-center">
                            <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                                <h1>discover</h1>
                                <h1>the world</h1>
                                <div class="button home_slider_button">
                                    <div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home_slider_nav home_slider_prev">
                    <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                        <defs>
                            <linearGradient id='home_grad_prev'>
                                <stop offset='0%' stop-color='#fa9e1b' />
                                <stop offset='100%' stop-color='#8d4fff' />
                            </linearGradient>
                        </defs>
                        <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z" />
                        <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 " />
                    </svg>
                </div>

               
                <div class="home_slider_nav home_slider_next">
                    <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                        <defs>
                            <linearGradient id='home_grad_next'>
                                <stop offset='0%' stop-color='#fa9e1b' />
                                <stop offset='100%' stop-color='#8d4fff' />
                            </linearGradient>
                        </defs>
                        <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z" />
                        <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 " />
                    </svg>
                </div>

           

                <div class="home_slider_dots">

                    <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                        <li class="home_slider_custom_dot active">
                            <div></div>01.
                        </li>
                        <li class="home_slider_custom_dot">
                            <div></div>02.
                        </li>
                        <li class="home_slider_custom_dot">
                            <div></div>03.
                        </li>
                    </ul>
                </div>

            </div>

        </div>

   

        <div class="search">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#searchForm').on('submit', function(e) {
                        e.preventDefault();

                        var formData = $(this).serialize();

                        $.ajax({
                            url: 'search.php', // The server-side script that handles the request
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                $('#results').html(response);
                            },
                            error: function(xhr, status, error) {
                                console.error('Error: ' + error);
                            }
                        });
                    });
                });
            </script>


          

            <div class="container fill_height">
                <div class="row fill_height">
                    <div class="col fill_height">


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
                                <button class="button search_button">search<span></span><span></span><span></span></button>
                            </form>
                        </div>

                    

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


        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="intro_title text-center">We have the best tours</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="intro_text text-center">
                            </p>
                            <p>
                        </div>
                    </div>
                </div>
                <div class="row intro_items">

               

                    <div class="col-lg-4 intro_col">
                        <div class="intro_item">
                            <div class="intro_item_overlay"></div>
                          
                            <div class="intro_item_background" style="background-image:url(images/adams-peak3.jpg)"></div>
                            <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_date">Nov 14th - may 01st</div>
                                <div class="button intro_button">
                                    <div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a>
                                </div>
                                <div class="intro_center text-center">
                                    <h1>Adams-Peak</h1>
                                    <div class="intro_price">From $45</div>
                                    <div class="rating rating_4">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 intro_col">
                        <div class="intro_item">
                            <div class="intro_item_overlay"></div>
                  
                            <div class="intro_item_background" style="background-image:url(images/sogiria.jfif)"></div>
                            <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_date">May 25th - June 01st</div>
                                <div class="button intro_button">
                                    <div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a>
                                </div>
                                <div class="intro_center text-center">
                                    <h1>Sigiriya</h1>
                                    <div class="intro_price">From $35</div>
                                    <div class="rating rating_4">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

         

                    <div class="col-lg-4 intro_col">
                        <div class="intro_item">
                            <div class="intro_item_overlay"></div>
                            
                            <div class="intro_item_background" style="background-image:url(images/one\ tree\ hill1.jpg)"></div>
                            <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_date">May 25th - June 01st</div>
                                <div class="button intro_button">
                                    <div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a>
                                </div>
                                <div class="intro_center text-center">
                                    <h1>One Tree Hill</h1>
                                    <div class="intro_price">From $27</div>
                                    <div class="rating rating_4">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="cta">
        
            <div class="cta_background" style="background-image:url(images/cta.jpg)"></div>

            <div class="container">
                <div class="row">
                    <div class="col">

                   

                        <div class="cta_slider_container">
                            <div class="owl-carousel owl-theme cta_slider">

                              
                                <div class="owl-item cta_item text-center">
                                    <div class="cta_title">Water Rafting Kitulgala</div>
                                    <div class="rating_r rating_r_4">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <img src="images/rafting-sri-lanka-3.jpg" alt="">
                                    <p class="cta_text">Kitulgala is most famed for being the hub of exciting water
                                        sport activities; from white water rafting to abseiling and exploring
                                        waterfalls.</p>
                                    <div class="button cta_button">
                                        <div class="button_bcg"></div><a href="offers.php">explore
                                            now<span></span><span></span><span></span></a>
                                    </div>
                                </div>

                          
                                <div class="owl-item cta_item text-center">
                                    <div class="cta_title">Flying Ravana</div>
                                    <div class="rating_r rating_r_4">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <img src="images/WhatsApp Image 2024-11-04 at 9.50.10 PM.jpeg" alt="">
                                    <p class="cta_text">Flying Ravana Adventure park is one of a kind experience
                                        available in Sri Lanka, located amidst the luscious green estates of Ella.</p>
                                    <div class="button cta_button">
                                        <div class="button_bcg"></div><a href="offers.php">explore
                                            now<span></span><span></span><span></span></a>
                                    </div>
                                </div>

                                

                            </div>

                           
                            <div class="cta_slider_nav cta_slider_prev">
                                <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                                    <defs>
                                        <linearGradient id='cta_grad_prev'>
                                            <stop offset='0%' stop-color='#fa9e1b' />
                                            <stop offset='100%' stop-color='#8d4fff' />
                                        </linearGradient>
                                    </defs>
                                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z" />
                                    <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 " />
                                </svg>
                            </div>

                       
                            <div class="cta_slider_nav cta_slider_next">
                                <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                                    <defs>
                                        <linearGradient id='cta_grad_next'>
                                            <stop offset='0%' stop-color='#fa9e1b' />
                                            <stop offset='100%' stop-color='#8d4fff' />
                                        </linearGradient>
                                    </defs>
                                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z" />
                                    <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 " />
                                </svg>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

 

        <div class="offers">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="section_title">the best offers with rooms</h2>
                    </div>
                </div>
                <div class="row offers_items">

           
                    <div class="col-lg-6 offers_col">
                        <div class="offers_item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="offers_image_container">
                                       
                                        <div class="offers_image_background" style="background-image:url(images/98-acres-resort.jpg)"></div>
                                        <div class="offer_name"><a href="#">98-acres-resort</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="offers_content">
                                        <div class="offers_price">$12<span>per night</span></div>
                                        <div class="rating_r rating_r_4 offers_rating">
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                        </div>
                                        <p class="offers_text">Featuring the luxurious comforts of a boutique hotel,
                                            98 Acres Resort & Spa is set in Ella amidst a stunning landscape also
                                            known as the 98 acre tea estate.</p>
                                        <div class="offers_icons">
                                            <ul class="offers_icons_list">
                                                <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                            </ul>
                                        </div>
                                        <div class="offers_link"><a href="offers.html">read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 offers_col">
                        <div class="offers_item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="offers_image_container">
                                 
                                        <div class="offers_image_background" style="background-image:url(images/5bfe53d5865bafeffd841e7e_98\ acres\ resort\ and\ spa-min.jpg)"></div>
                                        <div class="offer_name"><a href="#">Maalu Maalu Resort</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="offers_content">
                                        <div class="offers_price">$22<span>per night</span></div>
                                        <div class="rating_r rating_r_4 offers_rating">
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                        </div>
                                        <p class="offers_text">The eco-friendly Maalu Maalu Resort & Spa - Thema
                                            Collection sits on the sandy shores of Passekudah Bay on the east coast of
                                            Sri Lanka.</p>
                                        <div class="offers_icons">
                                            <ul class="offers_icons_list">
                                                <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                            </ul>
                                        </div>
                                        <div class="offers_link"><a href="offers.html">read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                 
                    <div class="col-lg-6 offers_col">
                        <div class="offers_item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="offers_image_container">
                                       
                                        <div class="offers_image_background" style="background-image:url(images/th\ \(2\).jfif)"></div>
                                        <div class="offer_name"><a href="#">Taj, Bentota</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="offers_content">
                                        <div class="offers_price">$20<span>per night</span></div>
                                        <div class="rating_r rating_r_4 offers_rating">
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                        </div>
                                        <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                        <div class="offers_icons">
                                            <ul class="offers_icons_list">
                                                <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                            </ul>
                                        </div>
                                        <div class="offers_link"><a href="offers.html">read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    <div class="col-lg-6 offers_col">
                        <div class="offers_item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="offers_image_container">
                            
                                        <div class="offers_image_background" style="background-image:url(images/th\ \(1\).jfif)"></div>
                                        <div class="offer_name"><a href="#">Anantaya Resort & Spa Chillaw</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="offers_content">
                                        <div class="offers_price">$30<span>per night</span></div>
                                        <div class="rating_r rating_r_4 offers_rating">
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                        </div>
                                        <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor
                                            sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                        <div class="offers_icons">
                                            <ul class="offers_icons_list">
                                                <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                            </ul>
                                        </div>
                                        <div class="offers_link"><a href="offers.html">read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="testimonials">
            <div class="test_border"></div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="section_title">what our clients say about us</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                         <div class="test_slider_container">
                            <div class="owl-carousel owl-theme test_slider">

                         
                                <div class="owl-item">
                                    <div class="test_item">
                                        <div class="test_image"><img src="images/bakavath.jpeg" alt="https://unsplash.com/@anniegray"></div>
                                        <div class="test_icon"><img src="images/backpack.png" alt=""></div>
                                        <div class="test_content_container">
                                            <div class="test_content">
                                                <div class="test_item_info">
                                                    <div class="test_name">Bakavath</div>

                                                </div>
                                                <div class="test_quote_title">" Best holliday ever "</div>
                                                <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        
                                <div class="owl-item">
                                    <div class="test_item">
                                        <div class="test_image"><img src="images/sarankan.jpeg" alt="https://unsplash.com/@tschax"></div>
                                        <div class="test_icon"><img src="images/island_t.png" alt=""></div>
                                        <div class="test_content_container">
                                            <div class="test_content">
                                                <div class="test_item_info">
                                                    <div class="test_name">Sarankan</div>

                                                </div>
                                                <div class="test_quote_title">" Best holliday ever "</div>
                                                <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="owl-item">
                                    <div class="test_item">
                                        <div class="test_image"><img src="images/imesh.jpeg" alt="https://unsplash.com/@seefromthesky"></div>
                                        <div class="test_icon"><img src="images/kayak.png" alt=""></div>
                                        <div class="test_content_container">
                                            <div class="test_content">
                                                <div class="test_item_info">
                                                    <div class="test_name">IMESH</div>

                                                </div>
                                                <div class="test_quote_title">" Best holliday ever "</div>
                                                <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                     <div class="owl-item">
                                    <div class="test_item">
                                        <div class="test_image"><img src="images/shalu.jpeg" alt=""></div>
                                        <div class="test_icon"><img src="images/island_t.png" alt=""></div>
                                        <div class="test_content_container">
                                            <div class="test_content">
                                                <div class="test_item_info">
                                                    <div class="test_name">Sharuk</div>

                                                </div>
                                                <div class="test_quote_title">" Best holliday ever "</div>
                                                <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="owl-item">
                                    <div class="test_item">
                                        <div class="test_image"><img src="images/pavi.jpeg" alt=""></div>
                                        <div class="test_icon"><img src="images/backpack.png" alt=""></div>
                                        <div class="test_content_container">
                                            <div class="test_content">
                                                <div class="test_item_info">
                                                    <div class="test_name">Pavith</div>

                                                </div>
                                                <div class="test_quote_title">" Best holliday ever "</div>
                                                <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                          
                                <div class="owl-item">
                                    <div class="test_item">
                                        <div class="test_image"><img src="images/piradeep.jpeg" alt=""></div>
                                        <div class="test_icon"><img src="images/kayak.png" alt=""></div>
                                        <div class="test_content_container">
                                            <div class="test_content">
                                                <div class="test_item_info">
                                                    <div class="test_name">Piradeep</div>

                                                </div>
                                                <div class="test_quote_title">" Best holliday ever "</div>
                                                <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                          
                            <div class="test_slider_nav test_slider_prev">
                                <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                                    <defs>
                                        <linearGradient id='test_grad_prev'>
                                            <stop offset='0%' stop-color='#fa9e1b' />
                                            <stop offset='100%' stop-color='#8d4fff' />
                                        </linearGradient>
                                    </defs>
                                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z" />
                                    <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 " />
                                </svg>
                            </div>

                      
                            <div class="test_slider_nav test_slider_next">
                                <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                                    <defs>
                                        <linearGradient id='test_grad_next'>
                                            <stop offset='0%' stop-color='#fa9e1b' />
                                            <stop offset='100%' stop-color='#8d4fff' />
                                        </linearGradient>
                                    </defs>
                                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z" />
                                    <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 " />
                                </svg>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="trending">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="section_title">trending now</h2>
                    </div>
                </div>
                <div class="row trending_container">

                 
                    <div class="col-lg-3 col-sm-6">
                        <div class="trending_item clearfix">
                            <div class="trending_image"><img src="images/karpaha-sands.jpg" alt="https://unsplash.com/@fransaraco"></div>
                            <div class="trending_content">
                                <div class="trending_title"><a href="#">KARPAHA-SANDS</a></div>
                                <div class="trending_price">From $18</div>
                                <div class="trending_location">pasikuda,batticaloa</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="trending_item clearfix">
                            <div class="trending_image"><img src="images/marino-beach.webp" alt="https://unsplash.com/@grovemade"></div>
                            <div class="trending_content">
                                <div class="trending_title"><a href="#">MARINO-BEACH</a></div>
                                <div class="trending_price">From $24</div>
                                <div class="trending_location">590 Marine Drive, Colombo</div>
                            </div>
                        </div>
                    </div>

         
                    <div class="col-lg-3 col-sm-6">
                        <div class="trending_item clearfix">
                            <div class="trending_image"><img src="images/calm-resort.jpg" alt="https://unsplash.com/@jbriscoe"></div>
                            <div class="trending_content">
                                <div class="trending_title"><a href="#">CALM-RESORT</a></div>
                                <div class="trending_price">From $182</div>
                                <div class="trending_location">pasikuda, batticaloa</div>
                            </div>
                        </div>
                    </div>

                  
                    <div class="col-lg-3 col-sm-6">
                        <div class="trending_item clearfix">
                            <div class="trending_image"><img src="images/high-garden-hotel.jpg" alt="https://unsplash.com/@oowgnuj"></div>
                            <div class="trending_content">
                                <div class="trending_title"><a href="#">HIGH-GARDEN</a></div>
                                <div class="trending_price">From $12</div>
                                <div class="trending_location">Nuwara Eliya</div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
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

        <div class="contact">
            <div class="contact_background" style="background-image:url(images/)"></div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="contact_image">

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact_form_container">
                            <div class="contact_title">get in touch</div>
                            <form  method="POST" id="contact_form" class="contact_form">
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

     

        <?php include_once('fotter.php') ?>
      


    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>