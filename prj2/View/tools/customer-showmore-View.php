<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bảng tin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> 
    <link href="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/flaticon/font/flaticon.css" rel="stylesheet"> 
    <link href="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo SITE_ROOT?>/Layout/front_end_layout/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="far fa-clock"></i>
                            <h2>8:00 - 9:00</h2>
                            <p>Mon - Fri</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <h2>+123 456 7890</h2>
                            <p>For Appointment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Y<span>oo</span>ga</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="price.html" class="nav-item nav-link">Price</a>
                    <a href="class.html" class="nav-item nav-link">Class</a>
                    <a href="team.html" class="nav-item nav-link">Trainer</a>
                    <a href="portfolio.html" class="nav-item nav-link">Pose</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Xem chi tiết thông tin khách hàng</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <h2>Chi tiết thông tin khách hàng</h2>
                    </div><br><br>

                    <div class="about-img">
                        <?php echo $data['customer_showmore']['img_profile']; ?>
                    </div>

                    <div class="about-text">
                        <h3>Username của khách hàng:</h3>
                        <p>
                           <?php echo $data['customer_showmore']['customer_username']; ?>
                           
                       </p>
                       <h3>Tên khách hàng:</h3>
                       <p>
                        <?php echo $data['customer_showmore']['customer_name']; ?>
                    </p>
                    <h3>Password:</h3>
                    <p>
                        <?php echo $data['customer_showmore']['password']; ?>
                    </p>
                    <h3>Ngày sinh:</h3>
                    <p>
                        <?php echo $data['customer_showmore']['date_of_birth']; ?>
                    </p>
                    <h3>Địa chỉ:</h3>
                    <p>
                        <?php echo $data['customer_showmore']['address']; ?>
                    </p>
                    <h3>Số điện thoại:</h3>
                    <p>
                        <?php echo $data['customer_showmore']['phone']; ?>
                    </p>
                    <h3>Email:</h3>
                    <p>
                        <?php echo $data['customer_showmore']['email']; ?>
                    </p>
                    <h3>Quốc tịch:</h3>
                    <p>
                        <?php echo $data['customer_showmore']['nationality']; ?>
                    </p>

                    <h3>Ghi chú:</h3>
                    <p>
                        <?php echo $data['customer_showmore']['note']; ?>
                    </p>

                    <a class="btn" href="https://localhost/prj2/Staff/manageCustomer">Go Back</a>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Start -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container-fluid">
        <div class="container">
            <div class="footer-info">
                <a href="index.html" class="footer-logo">Y<span>oo</span>ga</a>
                <h3>123 Street, New York, USA</h3>
                <div class="footer-menu">
                    <p>+012 345 67890</p>
                    <p>info@example.com</p>
                </div>
                <div class="footer-social">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                </div>
                <div class="col-md-6">
                    <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/easing/easing.min.js"></script>
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/wow/wow.min.js"></script>
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/mail/jqBootstrapValidation.min.js"></script>
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/js/main.js"></script>
</body>
</html>
