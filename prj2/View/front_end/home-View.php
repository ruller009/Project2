<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ruller Hospital Website - Home</title>
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
                <a href="http://localhost/prj2/" class="navbar-brand">R<span>ul</span>ler Ho<span>spi</span>tal</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="http://localhost/prj2/News" class="nav-item nav-link active">News</a>

                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Diseases</a>
                            <div class="dropdown-menu">
                                <a href="https://localhost/prj2/ShowPost/Basic/diseases1" class="dropdown-item">B???nh nhi???m tr??ng</a>
                                <a href="https://localhost/prj2/ShowPost/Basic/diseases2" class="dropdown-item">B???nh n???i ti???t</a>
                                <a href="https://localhost/prj2/ShowPost/Basic/diseases3" class="dropdown-item">B???nh t??m th???n</a>
                                <a href="https://localhost/prj2/ShowPost/Basic/diseases4" class="dropdown-item">B???nh h?? h???p</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Medicine</a>
                            <div class="dropdown-menu">
                                <a href="https://localhost/prj2/ShowPost/Basic/medicine1" class="dropdown-item">Thu???c t??y y</a>
                                <a href="https://localhost/prj2/ShowPost/Basic/medicine2" class="dropdown-item">Thu???c ????ng y</a>
                                <a href="https://localhost/prj2/ShowPost/Basic/medicine3" class="dropdown-item">Th???c ph???m ch???c n??ng</a>
                            </div>
                        </div>

                        <a href="https://localhost/prj2/ShowPost/Basic/research" class="nav-item nav-link">Science Research</a>
                        
                        <div class="nav-item dropdown">
                            <a href="http://localhost/prj2/Search" class="nav-link dropdown-toggle" data-toggle="dropdown">Search</a>
                            <div class="dropdown-menu">
                                <a href="https://localhost/prj2/Search/clinic_search" class="dropdown-item">Clinic</a>
                                <a href="https://localhost/prj2/Search/doctor_search" class="dropdown-item">Doctor</a>
                                <a href="https://localhost/prj2/Search/medicine_search" class="dropdown-item">Medicine</a>
                            </div>
                        </div>
                        
                        <?php 
                            if (isset($_SESSION['username'])){
                                require_once('E:/xampp/htdocs/prj2/View/unit/user-nav-View.php');
                            }
                            else{
                                require_once('E:/xampp/htdocs/prj2/View/unit/guest-nav-View.php');
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1>Take care of your health</h1>
                            <p>
                                Ch??m s??c cho s???c kh???e c???a c??c b???n l?? tr??ch nhi???m v?? vinh d??? c???a ch??ng t??i
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="<?php echo SITE_ROOT?>/Layout/front_end_layout/img/banner.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Discount Start -->
        <div class="discount wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <h2><span>Th??ng b??o m???i nh???t c???a gi??m ?????c</span></h2>
                </div><br>
                <div class="container discount-text">
                    <p >
                        <?php echo $data['announce']; ?> 
                    </p>
                </div>
            </div>
        </div>
        <!-- Discount End -->
        

        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <h2>C??c th??nh vi??n ch??? ch???t c???a b???nh vi???n</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?php echo SITE_ROOT?>/Layout/front_end_layout/img/messi.png" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Lionel Messi</h2>
                                <p>CEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?php echo SITE_ROOT?>/Layout/front_end_layout/img/ronaldo.png" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>CR7</h2>
                                <p>Vice Director</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?php echo SITE_ROOT?>/Layout/front_end_layout/img/messi.png" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>M10</h2>
                                <p>Finance manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?php echo SITE_ROOT?>/Layout/front_end_layout/img/ronaldo.png" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Ronaldo</h2>
                                <p>great shareholder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <h2>Tin t???ng h???p</h2>
                </div>
                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo SITE_ROOT?>/Layout/front_end_layout/img/medicine.png" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Xu???t hi???n lo???i thu???c m???i gi??p ??i???u tr??? b???nh ??au d??? d??y hi???u qu??? h??n</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Medicine</p>
                                <p><i class="far fa-calendar-alt"></i>29-Nov-2000</p>
                                <p><i class="far fa-comments"></i>20</p>
                            </div>
                            <p>
                                Lo???i thu???c n??y ???????c ??i???u ch??? sau nhi???u n??m n??? l???c nghi??n c???u c???a c??c nh?? khoa h???c thu???c V????ng Qu???c Anh.
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo SITE_ROOT?>/Layout/front_end_layout/img/diseases.png" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Bi???n ch???ng COVID-19 Delta ?</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Diseases</p>
                                <p><i class="far fa-calendar-alt"></i>29-Nov-2000</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                S??? gia t??ng b???t th?????ng c???a c??c ca COVID-19 l??m ch??ng ta ?????t c??u h???i li???u ph???i ch??ng c?? s??? xu???t hi???n c???a ch???ng Delta?
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo SITE_ROOT?>/Layout/front_end_layout/img/diseases1.png" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Virus H5N1 l?? g?? ?</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Diseases</p>
                                <p><i class="far fa-calendar-alt"></i>29-Nov-2000</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Kh?? nhi???u ng?????i v???n ch??a r?? v??? lo???i virus n??y. 
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo SITE_ROOT?>/Layout/front_end_layout/img/medicine1.png" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Gi?? thu???c gi???m s??u, tin vui v???i ng?????i b???nh ???</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Medicine</p>
                                <p><i class="far fa-calendar-alt"></i>29-Nov-2000</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                1 tin kh??ng th??? vui h??n l?? Nh?? N?????c ???? ??i???u ch???nh l???i gi?? thu???c h???p l?? .
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo SITE_ROOT?>/Layout/front_end_layout/img/research.png" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>H?????ng ??i n??o cho c??c nghi??n c???u sinh ?</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Research</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                R???t nhi???u sinh vi??n y d?????c ra tr?????ng ??ang b??n kho??n li???u c?? n??n l??m nghi??n c???u sinh ?
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo SITE_ROOT?>/Layout/front_end_layout/img/research1.png" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Ung th?? kh??ng c??n v?? ph????ng c???u ch???a</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Research</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Sau nhi???u n??m n??? l???c nghi??n c???u, c??c nh?? khoa h???c ???? t??m ra b?????c ?????t ph?? trong vi???c ch???a tr??? ung th??
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <a href="index.html" class="footer-logo">R<span>ul</span>ler Ho<span>spi</span>tal</a>
                        <h3>Qu???n Ho??n Ki???m, H?? N???i, Vi???t Nam</h3>
                        <div class="footer-menu">
                            <p>+012 345 67890</p>
                            <p>ruller@gmail.com</p>
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
                            <p>Sinh Vi??n : ????o H???i Long</p>
                        </div>
                        <div class="col-md-6">
                            <p>MSSV : 20183788</p>
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
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/js/main.js"></script>
    </body>
</html>
