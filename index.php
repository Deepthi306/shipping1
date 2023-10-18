<?php include 'admin/controller/config.php';

?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/fav.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">

    <title>Global Shipping Services</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <!-- TOP NAV -->
    <div class="top-nav" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p> <i class='bx bxs-envelope'></i> ops@globalshippingservices.co.in</p>
                    <p> <i class='bx bxs-phone-call'></i> +91 799 536 1180</p>
                </div>
                <div class="col-auto social-icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img style="height: 70px;" src="img/logo1.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Gallary">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Services">Services</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Contact</a>
            </div>
        </div>
    </nav>

    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider">
        <?php
        $csql = mysqli_query($conn, "select * from banner ");
        while ($coursel = mysqli_fetch_array($csql)) {
        ?>
            <div class="slide slide1" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(admin/<?php echo $coursel['banner'] ?>);">
                <div class="container">

                    <div class="row">
                        <div class="col-12 text-center text-white">
                            <h1 class="display-3 my-4"><?php echo $coursel['title'] ?></h1>

                        </div>
                    </div>
                </div>
            </div>
        <?php  } ?>
    </div>

    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 py-5">
                    <div class="row">

                        <div class="col-12">
                            <div class="info-box">
                                <div class="ms-4">
                                    <h2>ABOUT US</h2>
                                    <h3>Welcome to Global Shipping Services!</h3>
                                    <p>
                                        At Global Shipping Services, we take immense pride in being a leading and trusted shipping agency dedicated to
                                        providing exceptional services in the realm of logistics and maritime transportation. Our mission is to ensure
                                        seamless and efficient shipping solutions for our esteemed clients, connecting businesses and individuals worldwide.
                                        we have garnered extensive experience and expertise in the shipping industry, allowing us to offer a comprehensive
                                        range of services tailored to meet the diverse needs of our customers. Our team of highly skilled professionals is
                                        committed to excellence and customer satisfaction, striving to deliver excellence in every aspect of our operations.
                                        Give us an opportunity, and you'll experience a shipping agency that values transparency, reliability, and professionalism
                                        above all else. Whatever your shipping needs may be, we are here to provide innovative solutions and exceed your
                                        expectations every step of the way. Thank you for considering Global Shipping Services as your shipping agency of choice.
                                        We look forward to serving you and contributing to the growth and success of your business.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img height="100%" style="width: 100%;" src="img/array-ship.png" alt="">
                </div>
            </div>
            <br>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icon6.png" alt="">
                        <h5>Vision</h5>
                        <p>Empowering Global Trade with Seamless Shipping Solutions</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icon3.png" alt="">
                        <h5>Mission</h5>
                        <p>To be the world's leading shipping agency, dedicated to providing reliable, efficient, and innovative shipping solutions that exceed our customers' expectations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icon5.png" alt="">
                        <h5>Values</h5>
                        <p>We are Customer-Centricity and Integrity with Reliability and with Innovation and Environmental Responsibility, Safety and Security Diversity and Inclusion of Social Responsibility</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MILESTONE -->
    <section id="milestone">
        <div class="container">
            <div class="row text-center justify-content-center gy-4">
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">900+</h1>
                    <p class="mb-0">Happy Clients</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">100+</h1>
                    <p class="mb-0">Cargo Ships</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">50+</h1>
                    <p class="mb-0">Cranes</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">200+</h1>
                    <p class="mb-0">Trucks</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Our Services</h6>
                        <h1>Owner protective agent ( OPA )</h1>
                    </div>
                </div>
                <div class="col-6">
                    <p class="mx-lg-auto">We represent on behalf of the shipowner to safeguard their interests during the vessel's port call or while the ship is in a foreign port.
                        The role of an owner protective agent is primarily to provide support and coordination for the shipowner and their vessel while it is at a specific port location.</p>
                    <p class="mx-lg-auto">We facilitate to smooth port operations, ensuring compliance with local regulations, and protecting the interests of the shipowner during the vessel's stay at the port. </p>

                </div>

                <div class="col-6">
                    <h2> Our responsibilities as an owner protective agent
                        Port Agency Services</h2>
                    <li>Cargo Operations</li>
                    <li>Carg Matters</li>
                    <li>Documentation</li>
                    <li>Security</li>
                    <li>Financial Matters</li>
                    <li>Communication</li>
                    <li>Local Knowledge</li>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-light" id="Gallary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6></h6>
                        <h1>GALLERY</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="projects-slider" class="owl-theme owl-carousel">

            <?php
            $gsql = mysqli_query($conn, "select * from gallery ");
            while ($coursel = mysqli_fetch_array($gsql)) {
            ?>
                <div class="project">
                    <div class="overlay"></div>
                    <img height="600px" src="admin/<?php echo $coursel['gallery'] ?>" alt="">
                </div>

            <?php } ?>
        </div>
    </section>

    <!-- <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Team</h6>
                        <h1>Team Members</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/team_1.jpg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Marvin McKinney</h5>
                        <p>Marketing Coordinator</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/team_2.jpg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Kathryn Murphy</h5>
                        <p>Ethical Hacker</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/team_3.jpg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Darrell Steward</h5>
                        <p>Software Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="bg-light" id="reviews">

        <div class="owl-theme owl-carousel reviews-slider container">

            <?php
            $tsql = mysqli_query($conn, "select * from testimonals ");
            while ($coursel = mysqli_fetch_array($tsql)) {
            ?>
                <div class="review">
                    <div class="person">
                        <img src="admin/<?php echo $coursel['image'] ?>" alt="">
                        <h5><?php echo $coursel['name'] ?></h5>
                    </div>
                    <h3><?php echo $coursel['content'] ?></h3>

                    <i class='bx bxs-quote-alt-left'></i>
                </div>
            <?php } ?>


        </div>
    </section>

    <section id="Services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>GENERAL SERVICES</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g1.jpg" alt="">
                        <div class="content">
                            <h5>Indian Cargo Gear Book Renewal / Issue new Book with validity of 5 years</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g2.jpg" alt="">
                        <div class="content">
                            <h5>Cash to the Master</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g3.jpg" alt="">
                        <div class="content">
                            <h5>Ship’s spares delivery</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g4" alt="">
                        <div class="content">
                            <h5>Crew change</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g5.jpg" alt="">
                        <div class="content">
                            <h5>Ticketing and Hotel Arrangements</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g6.jpg" alt="">
                        <div class="content">
                            <h5>Engine, Deck, Electrical, Cabin Store supplies</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g7" alt="">
                        <div class="content">
                            <h5>Grease, Solvents, Paints & Chemicals</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g8.jpg" alt="">
                        <div class="content">
                            <h5>BA Charts & other necessary stationery items</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g9" alt="">
                        <div class="content">
                            <h5>Oxygen / Acetylene Cylinders Refilling</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g10" alt="">
                        <div class="content">
                            <h5>Sludge and Bilge Removal Services</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g11.jpg" alt="">
                        <div class="content">
                            <h5>Marine Technical Services</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g12.jpg" alt="">
                        <div class="content">
                            <h5>Fresh Water Supply</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g13.jpg" alt="">
                        <div class="content">
                            <h5>Bunker Supply</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g14.jpg" alt="">
                        <div class="content">
                            <h5>Garbage Removal</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g15.jpg" alt="">
                        <div class="content">
                            <h5>Fire Fighting & Lifesaving Appliances services</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g16.jpg" alt="">
                        <div class="content">
                            <h5>Hull cleaning services</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post mb-3">
                        <img height="250px" src="img/ships/g17.jpg" alt="">
                        <div class="content">
                            <h5>Ship repair services</h5>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .footer-top ul li {
            position: relative;
            z-index: 1;
            list-style: none;
        }

        .footer-top ul li a {
            color: #fff;
            text-decoration: none;
            margin-bottom: 15px;
            display: block;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
            font-weight: 500;
            text-transform: capitalize;

        }
    </style>
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-4">
                        <h4 class="navbar-brand"><img src="img/logo1.png"></h4>

                        <p class="text-white">Our primary focus is on fostering innovation and enhancing business processes through the alignment of people, processes, and systems.</p>
                    </div>
                    <div class="col-lg-4">
                        <ul>
                            <h3 class="text-white">Links</h3>
                            <li><a href="index.php"><i class="fa fa-angle-double-right me-3"></i>Home</a></li>
                            <li><a href="about.php"><i class="fa fa-angle-double-right me-3"></i>About Us</a></li>
                            <li><a href="portfolio.php"><i class="fa fa-angle-double-right me-3"></i>Portfolio</a></li>
                            <li><a href="termsandservices.php"><i class="fa fa-angle-double-right me-3"></i>Terms and Services</a></li>
                            <li><a href="privacy.php"><i class="fa fa-angle-double-right me-3"></i>Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- <div class="col-lg-4">

                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-pinterest'></i></a>
                        </div>
                        <div class="col-auto conditions-section">
                            <a href="#">privacy</a>
                            <a href="#">terms</a>
                            <a href="#">disclaimer</i></a>
                        </div>
                    </div> -->
                    <div class="col-lg-4">
                        <div class="single-footer-wid contact_widget_2">
                            <div class="wid-title">
                                <h4 class="text-white">Contact Us</h4>
                            </div>
                            <div class="contact-us">
                                <div class="single-contact-info">

                                    <div class="contact-info">
                                        <p class="text-white"> <i class="fa fa-angle-double-right me-3"></i>A Block !st Floor, Sea Doll Aparatments
                                            Maharaniperta, Visakhapatnam
                                            Andhra Pradesh 530002 </p>
                                    </div>
                                </div>
                                <div class="single-contact-info">

                                    <div class="contact-info">
                                        <p class="text-white"> <i class="fa fa-angle-double-right me-3"></i> ops@globalshippingservices.co.in</p>
                                    </div>
                                </div>
                                <div class="single-contact-info">

                                    <div class="contact-info">
                                        <p class="text-white"> <i class="fa fa-angle-double-right me-3"></i>+91 799 536 1180</p>
                                    </div>
                                </div>
                                <div class="col-auto social-icons">
                                    <a href="#"><i class='bx bxl-facebook'></i></a>
                                    <a href="#"><i class='bx bxl-twitter'></i></a>
                                    <a href="#"><i class='bx bxl-instagram'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="text-white mb-0">Copyright Global Shipping Services 2023. All rights Reserved</p> Designed By <a class="text-white" hrefs="">Veretebrate</a>
        </div>

    </footer>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover" style="background-image: url(img/array-ship.png); min-height:300px;">
                                <div>

                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Get in touch</h1>
                                        <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">First name</label>
                                        <input type="text" class="form-control" placeholder="Jon" id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" placeholder="Doe" id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Johndoe@example.com" id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                        <textarea name="" placeholder="This is looking great and nice." class="form-control" id="" rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>