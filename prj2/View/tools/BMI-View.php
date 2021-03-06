<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>YOOGA - Free Yoga Website Template</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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


    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>T??nh ch??? s??? BMI</h2>
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
                        <h2>??o ch??? s??? c??n n???ng - chi???u cao BMI</h2>
                    </div>
                    <div class="about-text">
                        <form>
                            <label style="font-size: 30px; color: green; font-weight: 200px">Nh???p chi???u cao c???a b???n</label><br>
                            <input type="text" name="" placeholder="T??nh theo cm" id="height" style="color: blue"><br>
                            <label style="font-size: 30px; color: green; font-weight: 200px">Nh???p c??n n???ng c???a b???n</label><br>
                            <input type="text" name="" placeholder="T??nh theo kg" id="weight" style="color: purple"><br><br>
                            
                            <input type="reset" name="" value="Reset" id="reset" style="font-size: 50px; color: orange"><br><br>
                        </form>
                        <label><u style="font-size: 30px; color: black">K???t qu??? BMI c???a b???n:</u></label><br><br>
                        <div id="result" style="color: red"></div>
                        <label><u style="font-size: 30px; color: black;">Nh???n x??t v?? l???i khuy??n:</u></label><br>
                        <div id="comment" style="color: red"></div><br><br>
                        
                        <button id="btn" style="font-size: 30px; color: blue">T??nh to??n</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function(){
            $('#btn').click(function(){
                $('#result').html('');
                $('#comment').html('');
                var height = $('#height').val();
                var weight = $('#weight').val();
                if(weight==''||height==''){
                    $('#comment').html('Y??u c???u nh???p ????? 2 ph???n chi???u cao v?? c??n n???ng');
                    return;
                }
                if (weight==0){
                    $('#result').html('Kh??ng t??nh to??n ???????c');
                    $('#comment').html('Y??u c???u b???n nh???p ????ng th??ng tin');
                    return;
                }

                var bmi = weight / (height * height) * 10000;
                bmi = bmi.toFixed(2);
                var comment;
                if ( bmi < 16.9){
                    comment = 'Qu?? g???y';
                }
                if ( bmi>17 && bmi<18.4){
                    comment = 'B???n c?? v??? h??i g???y. C???n ch?? ?? ??n u???ng v?? t???p th??? thao ?????u ?????n';
                }
                if ( bmi>18.5 && bmi<24.9){
                    comment = 'B???n c?? 1 c?? th??? b??nh th?????ng. Ch??c m???ng nh??';
                }
                if ( bmi>25 && bmi<29.9){
                    comment = 'B???n h??i t??ng c??n r???i ???? nha!!!';
                }
                if ( bmi>30 && bmi<34.9){
                    comment = 'B??o ph?? c???p ????? 1';
                }
                if ( bmi>35 && bmi<40){
                    comment = 'B??o ph?? c???p ????? 2';
                }
                if ( bmi>40){
                    comment = 'B??o ph?? c???p ????? 3';
                }
                $('#result').html(bmi);
                $('#comment').html(comment);
            });
            $('#reset').click(function(){
                $('#result').html('');
                $('#comment').html('');
            });
        });
    </script>


    <!-- Discount Start -->
    <div class="discount " data-wow-delay="0.1s" style="margin-bottom: 90px;">
        <div class="container">
            <div class="section-header text-center">
                <h2><span>Th??ng tin v??? ch??? s??? BMI</span></h2>
            </div>
            <div class="container discount-text">
                <p align="left"><strong>
                    BMI (Body mass Index) l?? ch??? s??? ???????c t??nh t??? chi???u cao v?? c??n n???ng, l?? m???t ch??? s??? ????ng tin c???y v??? s??? m???p ???m c???a m???t ng?????i.
                </strong></p>
                <p align="left">
                    BMI kh??ng ??o l?????ng tr???c ti???p m??? c???a c?? th??? nh??ng c??c nghi??n c???u ???? ch???ng minh r???ng BMI t????ng quan v???i ??o m??? tr???c ti???p. BMI l?? ph????ng ph??p kh??ng t???n k??m v?? d??? th???c hi???n ????? t???m so??t v???n ????? s???c kho???.
                </p>
                <p align="left"><strong>
                    1. S??? d???ng BMI nh?? th??? n??o?
                </strong></p>
                <p align="left">
                    BMI ???????c s??? d???ng nh?? l?? m???t c??ng c??? t???m so??t ????? x??c ?????nh tr???ng l?????ng th??ch h???p cho ng?????i l???n. Tuy nhi??n, BMI kh??ng ph???i l?? c??ng c??? ch???n ??o??n. V?? d???, m???t ng?????i c?? ch??? s??? BMI cao, ????? x??c ?????nh tr???ng l?????ng c?? ph???i l?? m???t nguy c?? cho s???c kho??? kh??ng th?? c??c b??c s?? c???n th???c hi???n th??m c??c ????nh gi?? kh??c. Nh???ng ????nh gi?? n??y g???m ??o ????? d??y n???p da, ????nh gi?? ch??? ????? ??n, ho???t ?????ng th??? l???c, ti???n s??? gia ????nh v?? c??c s??ng l???c s???c kho??? kh??c.
                </p>
                <p align="left"><strong>
                    2. T???i sao C?? quan ki???m so??t b???nh t???t Hoa K??? - CDC s??? d???ng BMI ????? x??c ?????nh s??? th???a c??n v?? b??o ph???
                </strong></p>
                <p align="left">
                    T??nh ch??? s??? BMI l?? m???t ph????ng ph??p t???t nh???t ????? ????nh gi?? th???a c??n v?? b??o ph?? cho m???t qu???n th??? d??n ch??ng. ????? t??nh ch??? s??? BMI, ng?????i ta ch??? y??u c???u ??o chi???u cao v?? c??n n???ng, kh??ng t???n k??m v?? d??? th???c hi???n. S??? d???ng ch??? s??? BMI cho ph??p ng?????i ta so s??nh t??nh tr???ng c??n n???ng c???a h??? v???i qu???n th??? n??i chung. C??ng th???c t??nh BMI theo ????n v??? kilograms v?? m??t (xem c??ch t??nh d?????i ????y)
                </p>
                <h3 align="left"><strong>
                    C??ch t??nh v?? ????nh gi?? ch??? s??? BMI nh?? th??? n??o?
                </strong></h3>
                <p >
                    <img src="<?php echo SITE_ROOT ?>/Layout/images/chi-so-bmi-do-can-nang-chieu-cao.jpg" style="width: 100%">
                </p>
                <p align="left"><strong>
                   - C??ch ????nh gi?? ch??? s??? BMI
               </strong></p>
               <p align="left">
                ?????i v???i ng?????i l???n t??? 20 tu???i tr??? l??n, S??? d???ng b???ng ph??n lo???i chu???n cho c??? nam v?? n??? ????? ????nh gi?? ch??? s??? BMI.
            </p>
            <p >
                - BMI <16: G???y ????? III
            </p>
            <p>
                - 16 ??? BMI <17: G???y ????? II
            </p>
            <p>
                - 17 ??? BMI <18.5: G???y ????? I
            </p>
            <p>
                - 18.5 ??? BMI <25: B??nh th?????ng
            </p>
            <p>- 25 ??? BMI <30: Th???a c??n</p>
            <p>- 30 ??? BMI 35: B??o ph?? ????? 1</p>
            <p>- 35 ??? BMI <40: B??o ph?? ????? II</p>
            <p>- BMI >40: B??o ph?? ????? III</p>
        </div>
    </div>
</div>
<!-- Discount End -->



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
