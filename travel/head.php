<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <title>Travelix</title>
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
<style>
    .drop{
        background-color: rgba(92, 4, 112, 0.01);
        border: none;
        padding-top: 4px;
        color: white;
        margin-left: 200px;

    }
    .drop1{
        color: black;
    }

    .profile{
        margin-left: 200px;
    }
</style>
<body>
    <?php

    ?>

    <div class="super_container">

        <div>

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="phone">076-49-52-611</div>
                            <div class="social">
                                <ul class="social_list">
                                    <li class="social_list_item"><a href="https://www.instagram.com/mr.keeth__of__bakavath/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="https://www.facebook.com/share/1C2wk5oKdR/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="https://x.com/bakavathkeethan"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="https://api.whatsapp.com/qr/IPW22TSBWIZBG1?autoload=1&app_absent=0"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="https://github.com/bakavathkeethan"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="https://www.linkedin.com/in/mathiyalakan-bakavathkeethan-1087b5345/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                   
                                </ul> 
                            </div>
                            <?php if (!isset($_SESSION['username'])) {

                            ?>
                                <div class="user_box ml-auto">
                                    <div class="user_box_login user_box_link"><a href="login.php">login</a></div>
                                    <div class="user_box_register user_box_link"><a href="sigup.php">register</a></div>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="user_box ml-auto drop ">
                                
                                    <select name="" id="userMenu" onchange="handleMenuChange()" class="drop">
                                        <option value="" class="drop1"><?php echo htmlspecialchars($_SESSION['username']); ?> </option>
                                        <option value="logout.php" class="drop1">Logout</option>
                                        <option value="404error.php" class="drop1">My Account</option>
                                    </select>
                                </div>

                               
                        </div>
                    <?php
                            }
                    ?>
                    <script>
                        function handleMenuChange() {
                            const selectedValue = document.getElementById('userMenu').value;
                            if (selectedValue) {
                                window.location.href = selectedValue;
                            }
                        }
                    </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>