<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../public/images/favicon.png" />
    <style>
        body {
            background-color: #f9f9fa;
        }

        .container-scroller {
            height: 100vh;
        }

        .full-page-wrapper {
            display: flex;
            align-items: center;
        }

        .auth-form-light {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #888888;
        }

        .form-control-lg {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
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
                            <h4 class="text-center">register here</h4>
                    
                            <?php $LAVA =& lava_instance(); ?>
                            <?php echo $LAVA->form_validation->errors(); ?>
                            <form action="<?= site_url('validate_reg'); ?> " method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="name" placeholder="Username" value="" size="50">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="" size="50">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" value="" size="50">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="confpassword" placeholder="Confirm Password" value="" size="50">
                                </div>
                                <div class="mt-3 d-flex justify-content-center">
                                    <div><input type="submit" value="Sign Up" class="btn btn-primary" /></div>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="login" class="text-primary">Login</a>
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
    
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
