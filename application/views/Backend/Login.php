<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
    <link href="<?php echo base_url(); ?>assets/img/PreciousWP-LOGOv1.jpg" rel="icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Precious wealth property</title>

    <link href="<?php echo base_url(); ?>/assets/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                    <?php $this->session->flashdata('msgerr') ?>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="<?php echo site_url('Control_admin/validlogin'); ?>">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="username" name="username" type="text" placeholder="username" />
                                            <label for="username">user</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" name ="password" type="password" placeholder="Password" />
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/assets/js/scripts.js"></script>
</body>

</html>