
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == "") {
    header("Location: admin-login.php");
} else {
?>
   


<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'travel');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the package ID from URL
if (isset($_GET['classid'])) {
    $classid = $_GET['classid'];

    // Fetch existing package data
    $sql = "SELECT * FROM packages WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $classid);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $package = $result->fetch_assoc();
    } else {
        echo "Package not found.";
        exit;
    }

    // Update package if the form is submitted
    if (isset($_POST['update'])) {
        $classname = $_POST['classname'];
        $classnamenumeric = $_POST['classnamenumeric'];
        $section = $_POST['section'];
        $description = $_POST['description'];

        // Handle image upload (if any)
        $imageNames = [];
        if (isset($_FILES['img']['tmp_name'])) {
            foreach ($_FILES['img']['tmp_name'] as $key => $tmp_name) {
                $file_name = $_FILES['img']['name'][$key];
                $file_tmp = $_FILES['img']['tmp_name'][$key];
                $upload_dir = "uploads/";
                $upload_file = $upload_dir . basename($file_name);
                if (move_uploaded_file($file_tmp, $upload_file)) {
                    $imageNames[] = $file_name;
                }
            }
        }

        $images = implode(',', $imageNames);

        // Update the package in the database
        $update_sql = "UPDATE packages SET package_name = ?, package_price = ?, rating = ?, images = ?, description = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param('sssssi', $classname, $classnamenumeric, $section, $images, $description, $classid);

        if ($update_stmt->execute()) {
            echo "<script>alert('Package updated successfully!');</script>";
        } else {
            echo "Error: " . $update_stmt->error;
        }
    }
} else {
    echo "No package ID provided.";
    exit;
}

// Close the connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMS Admin Update Packages</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen">
    <link rel="stylesheet" href="css/prism/prism.css" media="screen">
    <link rel="stylesheet" href="css/main.css" media="screen">
    <link rel="icon" href="images/lifetravel-logo.png">
    <script src="js/modernizr/modernizr.min.js"></script>
</head>

<body class="top-navbar-fixed">
    <div class="main-wrapper">

        <!-- ========== TOP NAVBAR ========== -->
        <?php include('includes/topbar.php'); ?>

        <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
        <div class="content-wrapper">
            <div class="content-container">
                <!-- ========== LEFT SIDEBAR ========== -->
                <?php include('includes/leftbar.php'); ?>
                <!-- /.left-sidebar -->

                <div class="main-page">
                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-md-6">
                                <h2 class="title">Update Packages</h2>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row breadcrumb-div">
                            <div class="col-md-6">
                                <ul class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                    <li><a href="#">Packages</a></li>
                                    <li class="active">Update Packages</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                    <section class="section">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h5>Update Packages </h5>
                                            </div>
                                        </div>


                                        <div class="panel-body">
                                            <form method="post" enctype="multipart/form-data">
                                                <div class="form-group has-success">
                                                    <label for="success" class="control-label">Packages Name</label>
                                                    <div class="">
                                                        <input type="text" name="classname" class="form-control" required="required" id="success" value="<?php echo $package['package_name']; ?>">
                                                        <span class="help-block">Eg- kiththukala etc</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="success" class="control-label">Packages price</label>
                                                    <div class="">
                                                        <input type="number" name="classnamenumeric" required="required" class="form-control" id="success" value="<?php echo $package['package_price']; ?>">
                                                        <span class="help-block">Eg- LKR=250 etc</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="success" class="control-label">Rating</label>
                                                    <div class="">
                                                        <input type="text" name="section" class="form-control" required="required" id="success" value="<?php echo $package['rating']; ?>">
                                                        <span class="help-block">Eg- **** etc</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="img" class="control-label">Images</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input rounded-circle" id="customFile" name="img[]" multiple accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="description" class="control-label">Description</label>
                                                    <textarea name="description" id="success" class="form-control form no-resize summernote"><?php echo $package['description']; ?></textarea>
                                                </div>
                                                <div class="form-group has-success">
                                                    <div class="">
                                                        <button type="submit" name="update" class="btn btn-success btn-labeled">Update<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('form').addEventListener('submit', function(e) {
        // Allow the form to submit normally for updating
        // You can check for successful update response using an AJAX request or server-side logic
        
        // Clear fields after a short delay
        setTimeout(function() {
            // Clear text and number inputs
            document.querySelectorAll('input[type="text"], input[type="number"]').forEach(input => input.value = '');
            // Clear textarea fields
            document.querySelectorAll('textarea').forEach(textarea => textarea.value = '');
            // Clear file input (optional)
            document.querySelector('input[type="file"]').value = '';
        }, 100); // Delay for smooth clearing
    });
});
</script>





                                </div>
                                <!-- /.col-md-8 col-md-offset-2 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                    </section>
                    <!-- /.section -->
                </div>
                <!-- /.main-page -->
            </div>
            <!-- /.content-container -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /.main-wrapper -->

    <!-- ========== COMMON JS FILES ========== -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/pace/pace.min.js"></script>
    <script src="js/lobipanel/lobipanel.min.js"></script>
    <script src="js/iscroll/iscroll.js"></script>

    <!-- ========== THEME JS ========== -->
    <script src="js/main.js"></script>
</body>

</html><?php } ?>