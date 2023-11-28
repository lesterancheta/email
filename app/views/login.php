<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../public/vendors/feather/feather.css">
    <link rel="stylesheet" href="../public/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../public/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../public/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../public/images/favicon.png" />

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-scroller {
            background-color: #f8f9fa;
        }

        .auth-form-light {
            background-color: #fdfdfd;
            border-radius: 5px;
             box-shadow: 0px 0px 10px #888888;
            padding: 20px;
        }

        .auth-form-light h4 {
            color: #495057;
        }

        .auth-form-light h6 {
            color: #6c757d;
        }

        .form-control-lg {
            height: 50px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .text-primary {
            color: #007bff;
        }

        .alert {
            margin-top: 15px;
        }

    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <h4 class="text-center">Hello! Let's get started</h4>
                            <h6 class="font-weight-light text-center">Sign in to continue.</h6>
                            <?php $LAVA =& lava_instance(); ?>
                            <?php echo $LAVA->form_validation->errors(); ?>
                            <?php if (isset($error_message)) { ?>
                                <div class="alert alert-danger"><?php echo $error_message; ?></div>
                            <?php } ?>
                            <?php if (isset($success_message)) { ?>
                                <div class="alert alert-success"><?php echo $success_message; ?></div>
                            <?php } ?>
                            <form action="<?= site_url('validate_login'); ?> " method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
                                </div>
                                <div class="mt-3 d-flex justify-content-center">
                                    <div><input type="submit" value="Login" class="btn btn-primary" /></div>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="register" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../public/js/off-canvas.js"></script>
    <script src="../public/js/hoverable-collapse.js"></script>
    <script src="../public/js/template.js"></script>
    <script src="../public/js/settings.js"></script>
    <script src="../public/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
