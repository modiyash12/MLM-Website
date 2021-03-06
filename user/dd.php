
 <html>

 <head>
     <title> USER LOGIN </title>
     <meta charset="utf-8">

     <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

     <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

     <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

     <style type="text/css">
         body {
             margin: 0;
             padding: 0;
             background-size: cover;
             background-position: center;
             font-family: sans-serif;
             background-repeat: no-repeat;
         }

         .login-box {
             width: 380px;
             height: 420px;
             background-color: #212529;
             color: #fff;
             top: 60%;
             left: 50%;
             position: absolute;
             transform: translate(-50%, -50%);
             box-sizing: border-box;
             padding: 70px 30px;
         }

         .avatar {
             width: 100px;
             height: 100px;
             border-radius: 50%;
             position: absolute;
             top: -50px;
             left: calc(50% - 50px);
         }

         h1 {
             margin: 0;
             padding: 0 0 20px;
             text-align: center;
             font-size: 22px;
         }

         .login-box p {
             margin: 0;
             padding: 0;
             font-weight: bold;
         }

         .login-box input {
             width: 100%;
             margin-bottom: 20px;
         }

         .login-box input[type="text"],
         input[type="password"] {
             border: none;
             border-bottom: 1px solid #fff;
             background: transparent;
             outline: none;
             height: 40px;
             color: #fff;
             font-size: 16px;
         }

         .login-box input[type="submit"] {
             border: none;
             outline: none;
             height: 40px;
             background: #1c8adb;
             color: #fff;
             font-size: 18px;
             border-radius: 20px;
         }

         .login-box input[type="submit"]:hover {
             cursor: pointer;
             background: #39dc79;
             color: #000;
         }

         .login-box a {
             text-decoration: none;
             font-size: 14px;
             color: #fff;
         }

         .login-box a:hover {
             color: #39dc79;
         }

         .header {
             overflow: hidden;
             background-color: #f1f1f1;
             padding: 20px 10px;
             background-color: #0000FF;
         }

         .header a {
             float: left;
             color: black;
             text-align: center;
             padding: 12px;
             text-decoration: none;
             font-size: 18px;
             line-height: 25px;
             border-radius: 4px;
         }

         .header a.logo {
             font-size: 30px;
             font-weight: bold;
         }

         .header a:hover {
             background-color: #ddd;
             color: black;
         }

         .header a.active {
             background-color: dodgerblue;
             color: white;
         }

         .header-right {
             float: right;
             box-shadow: 0 5px 0 darkblue;
             color: white;
             margin-right: 20px;
         }

         .header-right a:hover {
             background-color: #1A237E;
         }

         .header-right a:active {
             box-shadow: none;
             top: 5px;
         }


         * {
             box-sizing: border-box;
         }

         .column {
             float: left;
             width: 33.33%;
             padding: 5px;
         }

         .row::after {
             content: "";
             clear: both;
             display: table;
         }

         .top {
             text-align: center;
             margin-top: 6px;
             background-color: #0283c9;
         }

         @media screen and (max-width: 500px) {
             .header a {
                 float: none;
                 display: block;
                 text-align: left;
             }

             .header-right {
                 float: none;
             }

             .bottom {
                 background-color: #0283c9;
             }

             .h3 {
                 margin-top: 5px;
             }

             #main_Head {
                 background-color: #ffffff;
                 display: flex;
                 flex-direction: column;
             }
         }

     </style>


 </head>

 <body bgcolor="#CCEEFF">

     <!--  <div class="header">
         <a href="#default" class="logo">AMIT BHARGAVA</a>
         <div class="header-right">
             <a class="active" href="index.html">HOME</a>
         </div>
     </div>
    -->

     <img src="assets/images/mask2.jpeg" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.6;" alt="">

     <!-- ***** Header Area Start ***** -->
     <header class="header-area header-sticky" style="background-color: #212529">
         <div class="container">
             <div class="row">
                 <div class="col-12" id="main_Head">
                     <nav class="main-nav">
                         <!-- ***** Logo Start ***** -->
                         <a href="index.html" class="logo">SARTHAK<em> SALES</em></a>
                         <!-- ***** Logo End ***** -->
                         <!-- ***** Menu Start ***** -->
                         <ul class="nav">
                             <li class="scroll-to-section"><a href="#top">Home</a></li>
                         </ul>

                         <!-- ***** Menu End ***** -->
                     </nav>
                 </div>
             </div>
         </div>
     </header>
     <!-- ***** Header Area End ***** -->



     <div class="login-box">
         <img src="avatar.png" class="avatar">
         <h1>FORGOT PASSWORD</h1>
         <form action="forgetpass.php" method="POST">
             <div class="form-group">
                                <label for="exampleInputPassword1">Mobile Number</label>
                                <input type="number" class="form-control" id="number" name="number" placeholder="Enter Number">
                            </div>
                            <button type="submit" name="sendotp" class="btn btn-success">Send OTP</button>
         </form>

         <form action="verifyotp.php" method="POST">
             <div class="form-group">
                                <label for="exampleInputPassword1">OTP</label>
                                <input type="number" class="form-control" id="otpnumber" name="otpnumber" placeholder="Enter Your OTP">
                            </div>
                            <button type="submit" name="verifyotp" class="btn btn-success">Verify OTP</button>
     </div>

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

 </body>

 </html>
