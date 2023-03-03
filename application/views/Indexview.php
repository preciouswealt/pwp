<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Precious wealth property</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url(); ?>assets/img/PreciousWP-LOGOv1.jpg" rel="icon">
    <link href="<?php echo base_url(); ?>assets/img/PreciousWP-LOGOv1.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@400&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="<?php echo base_url(); ?>assets/vendors/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/owlcarousel/owl.carousel.js"></script>
    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- Template sweetalert -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sweetalert.css" />
    <script src="<?php echo base_url(); ?>assets/sweetalert.js"></script>
    <!-- Template select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/select2.min.css" />
    <script src="<?php echo base_url(); ?>assets/select2.min.js"></script>

    <!-- Template step form -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/jquery-steps.css">
    <script src="<?php echo base_url(); ?>assets/dist/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/jquery-steps.js"></script>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->


    <!-- <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script> -->
    <style type="text/css">
        body {
            font-family: 'Mitr', sans-serif;
        }

        hr {
            border: 0;
            border-top: 3px solid #049bba;
            ;
            border-bottom: 1px solid #fff;
        }

        main {
            flex: 1;
        }

        .wrapper {
            display: block;
            min-height: 100%;
            /* real browsers */
            height: auto !important;
            /* real browsers */
            height: 100%;
            /* IE6 bug */
            margin-bottom: -20px;
            /* กำหนด margin-bottom ให้ติดลบเท่ากับความสูงของ footer */
        }

        .footer {
            height: 20px;
            /* ความสูงของ footer */
            display: block;
            text-align: center;
        }

        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php $this->load->view('Menu'); ?>
    </div>
    <main>
        <br />
        <div class="content-wrapper">
            <?php $this->load->view($ShowPage) ?>
        </div>
    </main>
    <!-- ======= Footer ======= -->
    <div class="footer">
        <footer id="footer" style="background: rgb(34,193,195);
background: linear-gradient(160deg, rgba(34,193,195,1) 0%, rgba(8,94,172,1) 100%);">
            <div class="container">
                <h3><span style="color:#fefefe;">Precious</span> <span class="text-warning">wealth property</span></h3>
                <p></p>
                <div class="social-links">
                    <a href="https://web.facebook.com/preciouswealthproperty" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.youtube.com/@preciouswealthproperty" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
                    <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=909odigl"  target="_blank" class="line"><i class="bi bi-line"></i></a>

                </div>
                <div class="copyright">
                    &copy; Copyright <strong><span><span style="color:#049bba;">Precious</span> <span class="text-warning">wealth property</span></span></strong>
                </div>
                <div class="credits">
                </div>
            </div>
        </footer>
    </div>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background: rgb(84,162,255);
background: radial-gradient(circle, rgba(84,162,255,1) 0%, rgba(148,187,233,1) 100%);"><i class="bi bi-arrow-up-short"></i></a>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Vendor JS Files -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"  style="text-align:center; font-weight: 400; font-size: 20px; line-height: 17px; color: rgb(111, 114, 122);" id="exampleModalLabel">กรอกข้อมูลเพื่อเข้าสู่ระบบ</h3>
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modallogin__body">
                        <div style="text-align:center; font-weight: 400; font-size: 12px; line-height: 17px; color: rgb(111, 114, 122);">เรารักษาข้อมูลของคุณเป็นความลับสูงสุด
                        </div>
                        <form autocomplete="off" class="ant-form ant-form-vertical ant-form-hide-required-mark">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="text" name="Email" id="Email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Password</label>
                                        <input type="phone" class="form-control" name="Password" id="Password" required>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo site_url('Register') ?>">ยังไม่ได้ลงทะเบียน</a>
                    <button type="button" class="btn btn-primary">เข้าสู่ระบบ</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<script>
    $('.owl-carousel').owlCarousel({
        items: 5,
        // singleItem: true,
        loop: false,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 1000,
        autoplayHoverPause: false,
        responsiveClass: false,
        rtl: false,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3
            },
            1500: {
                items: 5
            }
        }
    })
</script>