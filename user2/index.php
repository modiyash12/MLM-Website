<?php
include('config.php');
        $sql="SELECT * FROM `admin`";
$result = mysqli_query($conn, $sql) ;
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">



    <title><?php echo $row['name'];?><?php echo $row['subname'];?></title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <img src="/amitbhai2/admin/uploads/logo.png" style="opacity: .8; width:90px ; height: 70px; margin-left: 10px; ">
                         <a href="index.php" class="logo"><?php echo $row['name'];?><em><?php echo $row['subname'];?></em></a>

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">About Us</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">Business Plan</a></li>
                            <li class="scroll-to-section"><a href="#Products">Our Products</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li>
                           <u1>
                                   <li class="main-button"> <a href="/amitbhai2/user/userlogin.html">LOGIN (SILVER USER)</a></li>
                               </u1>
                               <u1>
                                     <li class="main-button"> <a href="/amitbhai2/user2/userlogin2.html">LOGIN (GOLDEN USER)</a></li>
                                </u1>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">.
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/Mask-Slides.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>MASK is better than</h6>
                <h2><em>VENTILATOR</em> HOME is better than <em>ICU</em></h2>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>About <em>Us</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p><?php echo $row['aboutus']; ?></p>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <img src="assets/images/mask2.jpeg" alt="maskimg" id="our-classes-mask2">



        <div class="our-classes-overlay-color" style="width: 200px; height: 40px; margin-bottom: 300px; margin-top: 400px; text-align: center; ">
                   <a href="MLM.pdf" download="BusinessPlan.pdf" class="" >BUSINESS PLAN</a>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <!-- ***** Product Section ***** -->
    <section class="section" id="Products">
        <div class="container">
            <div class="row" id="product_Div">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>OUR <em>PRODUCTS</em></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/mask6.jpeg" class="products_Image" alt="SingleMask">
                    <h5 class="product_Head">COVID-19 Single Mask</h5>
                    <h6>150 Rs.</h6>
                    <p>Sagar Sales</p>
                    <a href="/amitbhai2/user/register.php"> <button type="button" class="btn btn-outline-primary" id="buynowButon">BUY NOW</button></a>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/mask3.jpeg" class="products_Image" alt="GroupOfMask">
                    <h5 class="product_Head">COVID-19 Pack Of 5 Mask</h5>
                    <h6>1500 Rs.</h6>
                    <p>Sagar Sales</p>
                    <a href="register2.php"><button type="button" class="btn btn-outline-primary" id="buynowButon">BUY NOW</button></a>
                </div>
                <!--
                <div class="col-lg-4">
                    <img src="assets/images/wheat2.jpg" class="products_Image" alt="WheatImage">
                    <h5 class="product_Head">Flour</h5>
                    <h6>150 Rs.</h6>
                    <p>Sagar Sales</p>
                    <a href="user/register.php"><button type="button" class="btn btn-outline-primary" id="buynowButon">BUY NOW</button></a>
                </div>
            -->
            </div>
        </div>
    </section>
    <!-- ***** Product Section ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117763.55154147788!2d75.79380939471865!3d22.724115838748787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcad1b410ddb%3A0x96ec4da356240f4!2sIndore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1597091644838!5m2!1sen!2sin" width="918" height="440" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-12 col-sm-12" style="margin-bottom: 9px;">
                                    <h3>Location:</h3>
                                    <p><?php echo $row['location']; ?></p>
                                </div>
                                <div class="col-md-12 col-sm-12" style="margin-bottom: 9px;">
                                    <h4>Email:</h4>
                                    <p><?php echo $row['email']; ?></p>
                                </div>
                                <div class="col-md-12 col-sm-12" style="margin-bottom: 9px;">
                                    <h4>Call:</h4>
                                    <p><?php echo $row['phoneno']; ?></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy <?php echo $row['name']; ?> <?php echo $row['subname']; ?>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>




    <!-- Bootstrap -->

    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body></html>
