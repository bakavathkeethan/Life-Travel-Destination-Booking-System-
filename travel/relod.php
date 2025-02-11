<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head content as before -->
</head>

<body>

    <div class="super_container">
        <!-- Content as before -->
        <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
            <h1>Booking successful!</h1>
        </div>

        <!-- Booking form and other sections -->

        <?php include_once('fotter.php'); ?>
    </div>

    <!-- Existing scripts -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/blog_custom.js"></script>

    <!-- Auto Page Reload Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if the booking was successful
            if (document.querySelector('.heading h1').textContent === "Booking successful!") {
                // Set a timeout to reload the page after 3 seconds
                setTimeout(function() {
                    location.reload();
                }, 3000); // 3000 milliseconds = 3 seconds
            }
        });
    </script>

</body>

</html>
