<!DOCTYPE html>

<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == "") {
    header("Location: admin-login.php");
} else {
?>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Admin Create Packages</title>
        <link rel="stylesheet" href="css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen">
        <link rel="stylesheet" href="css/prism/prism.css" media="screen"> <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen">
        <link rel="icon" href="images/lifetravel-logo.png">
        <script src="js/modernizr/modernizr.min.js"></script>
        <style>
            .errorWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #dd3d36;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }

            .succWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #5cb85c;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }
        </style>


    </head>

    <body class="top-navbar-fixed">



        <div class="toast" id="successToast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000" style="position: fixed; top: 20px; right: 20px;">
            <div class="toast-header">
                <strong class="mr-auto text-success">Success</strong>
                <small>Just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                New package created successfully!
            </div>
        </div>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'travel');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_POST['submit'])) {
            $classname = $_POST['classname'];
            $classnamenumeric = $_POST['classnamenumeric'];
            $section = $_POST['section'];
            $description = $_POST['description'];

            $imageNames = [];
            if (isset($_FILES['img']['name']) && is_array($_FILES['img']['name'])) {
                foreach ($_FILES['img']['name'] as $key => $name) {
                    if ($_FILES['img']['error'][$key] === UPLOAD_ERR_OK) {
                        $file_name = basename($name);
                        $file_tmp = $_FILES['img']['tmp_name'][$key];

                        $upload_dir = "uploads/";
                        $upload_file = $upload_dir . $file_name;

                        if (move_uploaded_file($file_tmp, $upload_file)) {
                            $imageNames[] = $file_name;
                        } else {
                            echo "Failed to upload file: $file_name";
                        }
                    } else {
                        echo "File upload error: " . $_FILES['img']['error'][$key];
                    }
                }
            }

            $images = implode(',', $imageNames);

            $sql = "INSERT INTO packages (package_name, package_price, rating, images, description) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            if ($stmt === false) {
                die("Prepare failed: " . $conn->error);
            }

            $stmt->bind_param('sssss', $classname, $classnamenumeric, $section, $images, $description);

            if ($stmt->execute()) {
                echo "<script>alert('New package created successfully!');</script>";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }

        $conn->close();
        ?>








        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <?php include('includes/topbar.php'); ?>
            <!-----End Top bar>
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
                                    <h2 class="title">Create Packages</h2>
                                </div>

                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li><a href="#">Packages</a></li>
                                        <li class="active">Create Packages</li>
                                    </ul>
                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">





                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Create Packages</h5>
                                                </div>
                                            </div>

                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    document.querySelector('.form-group').addEventListener('submit', function(e) {
                                                        // Assuming form submission was successful and page did not reload
                                                        setTimeout(function() {
                                                            // Clear all input fields
                                                            document.querySelectorAll('.form-group input').forEach(input => input.value = '');
                                                        }, 100); // Delay for smooth clearing after form submission
                                                    });
                                                });
                                            </script>

                                            <div class="panel-body">

                                                <form method="post">
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Packages Name</label>
                                                        <div class="">
                                                            <input type="text" name="classname" class="form-control" required="required" id="success">
                                                            <span class="help-block">Eg- kiththukala etc</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Packages price</label>
                                                        <div class="">
                                                            <input type="number" name="classnamenumeric" required="required" class="form-control" id="success">
                                                            <span class="help-block">Eg- LKR=250 etc</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Rating</label>
                                                        <div class="">
                                                            <input type="text" name="section" class="form-control" required="required" id="success">
                                                            <span class="help-block">Eg- **** etc</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-success">
                                                        <label for="" class="control-label">Images</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input rounded-circle" id="customFile" name="img[]" multiple accept="image/*" onchange="displayImg(this,$(this))" <?php if (isset($_FILES['img']['tmp_name'])) {
                                                                                                                                                                                                                        foreach ($_FILES['img']['tmp_name'] as $key => $tmp_name) {
                                                                                                                                                                                                                            // Your file handling code
                                                                                                                                                                                                                        }
                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                        // Handle the case where no files were uploaded
                                                                                                                                                                                                                        echo "No files uploaded.";
                                                                                                                                                                                                                    } ?>>


                                                        </div>
                                                    </div>
                                                    <div class="form-group has-success>                                                      <label for=" descriptio class="control-label">about</label>
                                                        <textarea name="description section" id="success" s="2" class="form-control form no-resize summernote"></textarea>
                                                    </div>
                                                    <div class="form-group has-success">

                                                        <div class="">
                                                            <button type="submit" name="submit" class="btn btn-success btn-labeled">Submit<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                        </div>



                                                </form>


                                            </div>
                                        </div>
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
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>



        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>

    </html>
<?php } ?>