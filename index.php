<?php include"assets/db/config.php" ?>

<?php

    if (isset($_POST['email'])){
        $to = "smshovon1995@gmail.com";
        $subject = $_POST ['subject'];
        $txt = $_POST ['message'];
        $headers = "From:".$_POST['email']. "\r\n";
        mail($to,$subject,$txt,$headers);
    }
?>


<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>shovon</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area">
        <div class="navigation fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active"><a class="page-scroll" href="#home">Home</a></li>
                                    
                                    <?php
                                    
                                        $query = "SELECT * FROM nav ";
                                        $select_query = mysqli_query($connection, $query);

                                        while($row = mysqli_fetch_assoc($select_query)){

                                            $nav_id = $row['id'];
                                            $nav_name = $row['name'];
                                    ?>
                                    
                                    <li class="nav-item"><a class="page-scroll" href="#<?php echo $nav_name; ?>"><?php echo $nav_name;?></a></li> <?php } ?>
                                </ul> 
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->

        <div id="parallax" class="header-content d-flex align-items-center">
            <div class="header-shape shape-one layer" data-depth="0.10">
                <img src="assets/images/banner/shape/shape-1.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-tow layer" data-depth="0.30">
                <img src="assets/images/banner/shape/shape-2.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-three layer" data-depth="0.40">
                <img src="assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-fore layer" data-depth="0.60">
                <img src="assets/images/banner/shape/shape-2.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-five layer" data-depth="0.20">
                <img src="assets/images/banner/shape/shape-1.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-six layer" data-depth="0.15">
                <img src="assets/images/banner/shape/shape-4.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-seven layer" data-depth="0.50">
                <img src="assets/images/banner/shape/shape-5.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-eight layer" data-depth="0.40">
                <img src="assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-nine layer" data-depth="0.20">
                <img src="assets/images/banner/shape/shape-6.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-ten layer" data-depth="0.30">
                <img src="assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="header-content-right">
                            <h4 class="sub-title">Hello, I’m</h4>
                            <h1 class="title">Md. Shovon Sarkar</h1>
                            <p>A Freelance graphics designer</p>
                            <a class="main-btn" href="#work">View my Work</a>
                        </div> <!-- header content right -->
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <div class="header-image d-none d-lg-block">
                            <img src="assets/images/about.jpg" alt="hero">
                        </div> <!-- header image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-social">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-social-icon">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-behance-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div> <!-- header social -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header social -->
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title">About Me</h2>
                        <p>This is Shovon is a freelance graphic designer specializing in print media. He also love web related work, especially social media cover and banner add design.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50">
                        <h5 class="about-title">Hi There! I'm Md. Shovon Sarkar</h5>
                        <p>A Graphic Designer and Branding expert. I have a strong sense of invention, imagination, and skill all across the board. My experience allows me to complete my tasks effectively and in a timely manner. I have developed excellent communication skills and I like to work close to my clients to deliver and ensure high.</p>
                        <ul class="clearfix">
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-calendar"></i>
                                    </div>
                                    <div class="info-text">
                                        <p>12 Feb 1996</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="info-text">
                                        <p>smshovon1995@gmail.com</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <div class="info-text">
                                        <p>+88015 2156 9197</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-map-marker"></i>
                                    </div>
                                    <div class="info-text">
                                        <p>Dhaka, Narayangoanj</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- about content -->
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="about-skills pt-25">
                       
                        <?php
                            $query = "SELECT * FROM skill ";
                            $select_query = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_assoc($select_query)){

                                $skill_id = $row['id'];
                                $skill_name = $row['name'];
                                $skill_percentage = $row['percentage'];
                        ?>
                    
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title"><?php echo $skill_name; ?></h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter"><?php echo $skill_percentage; ?></span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="<?php echo $skill_percentage; ?>"></div>
                                </div>
                            </div>
                        </div> <?php } ?>
                 
                    </div> <!-- about skills -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="services" class="services-area gray-bg pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-30">
                        <h2 class="title">My Services</h2>
                        <p>As a freelance graphic designer, I’m able to offer extremely competitive project rates without sacrificing quality. I’ve included feedback from previous clients in this proposal regarding past projects as well as examples of previous work for you to review. On the final page, you’ll find the pricing details for your project. <br>If you have any questions after reviewing this proposal, feel free to touch base via contact.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                         
                <?php
                    $query = "SELECT * FROM services ";
                    $select_query = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($select_query)){

                        $service_id = $row['id'];
                        $service_name = $row['name'];
                        $service_icon = $row['icon'];
                        $service_details = $row['details'];
                ?>
               
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <img src="assets/images/icon/<?php echo $service_icon; ?>" alt="">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><?php echo $service_name; ?></h4>
                            <p><?php echo $service_details; ?></p>
                        </div>
                    </div> 
                </div><?php } ?>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== CALL TO ACTION PART START ======-->

    <section id="call-to-action" class="call-to-action pt-125 pb-130 bg_cover" style="background-image: url(assets/images/call-to-action.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="call-action-content text-center">
                        <h2 class="action-title">Have any project on mind?</h2>
                        <p>If you have any questions after reviewing this proposal, feel free to touch base via contact.</p>
                        <ul>
                            <li><a class="main-btn custom" href="https://drive.google.com/open?id=1BkwqYDhM3va13889QLKaiEoKCdvEQS0N">download cv</a></li>
                            <li><a class="main-btn custom-2" href="#contact">hire me</a></li>
                        </ul>
                    </div> <!-- call action content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION PART ENDS ======-->

    <!--====== WORK PART START ======-->

    <section id="portfolio" class="work-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title pb-25">
                        <h2 class="title">My Recent Works</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <div class="row">
                <?php
                    $query = "SELECT * FROM works ";
                    $select_query = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($select_query)){

                        $work_id = $row['id'];
                        $work_name = $row['name'];
                        $work_image = $row['image'];
                        $work_image_2 = $row['image_2'];
                        $work_link = $row['link'];
                ?>
               
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/<?php echo $work_image; ?>" alt="work">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title"><?php echo $work_name; ?></h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/<?php echo $work_image; ?>"><i class="lni-plus"></i></a></li>
                                    <li><a href="<?php echo $work_link; ?>" target="_blank"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div> <?php } ?>
            </div> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="work-more text-center mt-50">
                        <a class="main-btn" href="https://www.behance.net/smshovon" target="_blank">more works</a>
                    </div> <!-- work more -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== WORK PART ENDS ======-->


    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">Get In Touch</h2>
                        <p>If you have any questions after reviewing this proposal, feel free to touch base via contact.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
               
                    <?php
                    $query = "SELECT * FROM get_touch ";
                    $select_query = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($select_query)){

                        $touch_id = $row['id'];
                        $touch_name = $row['name'];
                        $touch_icon = $row['icon'];
                        $touch_text = $row['text'];

                ?>
               
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="contact-box text-center mt-30">
                        <div class="contact-icon">
                            <?php echo $touch_icon; ?>
                        </div>
                        <div class="contact-content">
                            <h6 class="contact-title"><?php echo $touch_name; ?></h6>
                            <p><?php echo $touch_text; ?></p>
                        </div>
                    </div> <!-- contact box -->
                </div> <?php } ?>
            </div> 
            <div class="row">
               
               
                   <?php

        if(isset($_POST['submit'])){

            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){

                $name = mysqli_real_escape_string($connection, $name);
                $email = mysqli_real_escape_string($connection, $email);
                $subject = mysqli_real_escape_string($connection, $subject);
                $message = mysqli_real_escape_string($connection, $message);

                $query = "INSERT INTO contact (name, email, subject, message, send_date ) ";
                $query .= "VALUES ('{$name}', '{$email}', '{$subject}', '{$message}', now() )";
                $contact_query = mysqli_query($connection, $query);

                if(!$contact_query){
                    die("Query Failed !" .mysqli_error($connection));
                } 
            } 
        }  
    ?>
               
               
               
               
                <div class="col-lg-6">
                    <div class="contact-form pt-30">
                        <form id="contact-form" action="index.php" method="post">
                            <div class="single-form">
                                <input type="text" name="name" placeholder="Name">
                            </div> <!-- single form -->
                            
                            <div class="single-form">
                                <input type="email" name="email" placeholder="Email">
                            </div> <!-- single form -->
                            
                            <div class="single-form">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                            
                            <div class="single-form">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div> <!-- single form -->
                            <p class="form-message"></p>
                            <div class="single-form">
                                <button class="main-btn" type="submit" name="submit">Send Message</button>
                            </div> <!-- single form -->
                        </form>
                    </div> <!-- contact form -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-map mt-60">
                        <div class="gmap_canvas">                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29245.285742888438!2d90.48727678629065!3d23.616497917939647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b10812a520a3%3A0x6d3af4457bec4c90!2sNarayanganj!5e0!3m2!1sen!2sbd!4v1578301074425!5m2!1sen!2sbd" width="600" height="480" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div> <!-- contact map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-130 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer-content text-center">
                            <a href="index.html">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                            <p class="mt-">This is Shovon is a freelance graphic designer specializing in print media. He also love web related work, especially social media cover and banner add design.</p>
                            <ul>
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="footer-copyright pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text text-center pt-20">
                            <p>Copyright © 2022. Template Crafted by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                        </div> <!-- copyright text -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Parallax js ======-->
    <script src="assets/js/parallax.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>


    <!--====== Appear js ======-->
    <script src="assets/js/jquery.appear.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>


    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>
