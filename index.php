<?php
require './function/getData.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Talentxid</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="./img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="img/logo.png" width="200px" /></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link ">About Us</a>
                <a href="services.php" class="nav-item nav-link">Services</a>
                <a href="job.php" class="nav-item nav-link ">Job Opportunities</a>
                <a href="blog.php" class="nav-item nav-link ">Blog</a>
                <a href="contact.html" class="nav-item nav-link ">Contact</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle btn btn-primary py-4 px-lg-5 "
                        data-bs-toggle="dropdown">Register</a>
                    <div class="dropdown-menu fade-down m-0">
                        <!-- <a href="registercompany.php" class="dropdown-item ">as Company</a> -->
                        <a href="registermigrantworker.php" class="dropdown-item ">as Worker</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link"></a>
            </div>
            <!--a href="" style="color:#000 !important;background-color:#fff !important;border:0px !important;" class="btn btn-primary py-4 px-lg-5 ">Register as Talent<i class="fa fa-arrow-right ms-3"></i></a>
            <a href="" class="btn btn-primary py-4 px-lg-5 ">Register as Company<i class="fa fa-arrow-right ms-3"></i></a-->
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="./img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Empowering Indonesian
                                    Migrant Workers</h5>
                                <h1 class="display-3 text-white animated slideInDown">Unlock Your Potential with
                                    TalentXid</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Join TalentXid and gain access to verified job
                                    opportunities, legal aid, and essential services. Take your career to new heights
                                    and thrive in a supportive community.</p>
                                <a href="#"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Explore
                                    Opportunities</a>
                                <a href="#" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    TalentXid</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="./img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">For Company</h5>
                                <h1 class="display-3 text-white animated slideInDown">Get Your Top-tier Remote Talents
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">Access to a wider pool of skilled and
                                    cost-effective talent and scalable workforce solutions. Hassle-free remote hiring,
                                    compliance processes and payroll management!</p>
                                <a href="services.php"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Find Talents</a>
                                <a href="registercompany.php"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-briefcase text-primary mb-4"></i>
                            <h5 class="mb-3">Job Placement</h5>
                            <p>Connecting you with safe and fair job opportunities across various sectors.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-gavel text-primary mb-4"></i>
                            <h5 class="mb-3">Financial Literacy</h5>
                            <p>Providing education and resources to help you manage your finances effectively.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Vocational Training</h5>
                            <p>Offering skill development programs tailored to your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-money-bill-wave text-primary mb-4"></i>
                            <h5 class="mb-3">Community Support</h5>
                            <p>Creating forums and support groups for sharing experiences and seeking advice.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About TalentXid</h6>
                    <h1 class="mb-4"> Empowering Indonesian Migrant Workers </h1>
                    <p class="mb-4">TalentXid is a comprehensive platform dedicated to supporting Indonesian migrant
                        workers and seafarers. Our mission is to empower individuals through job opportunities,
                        financial literacy programs, and a supportive community, ensuring a better future for themselves
                        and their families.
                    </p>

                    <h6 class="section-title bg-white text-start text-primary pe-3">Key Services</h6>
                    <ul class="mb-4">
                        <li>Home Asistant
                        </li>
                        <li>Caregiver</li>
                        <li>Nurse</li>
                        <li>Nurse Assistant
                        </li>
                        <li>Welder</li>
                        <li>Industrial Worker
                        </li>
                        <li>Construction Worker
                        </li>
                        <li>Fisherman</li>
                        <li>Maid</li>
                        <li>Shipp Crew</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <!-- div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Countries</h6>
                <h1 class="mb-5">Choose Your Working Destination</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Singapore</h5>
                                    <small class="text-primary">9 Jobs</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Malaysia</h5>
                                    <small class="text-primary">0 Jobs</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Japan</h5>
                                    <small class="text-primary">0 Jobs</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Indonesia</h5>
                            <small class="text-primary">0 Jobs</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div-->
    <!-- Categories Start -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Looking for Global Opportunies?</h6>
                <h1 class="mb-5">Explore Work Abroad Program</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php if (empty($positions)): ?>
                <div class="col-lg-6 col-md-8">
                    <div class="card no-jobs-card text-center p-5">
                        <div class="card-body">
                            <h1>Job not available</h1>
                            <p class="mt-4">There are currently no job vacancies available. Please check back later
                                or contact us for more information.</p>
                            <a href="./contact.html" class="btn btn-primary mt-3">Contact Us</a>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <?php foreach ($positions as $position): ?>
                <?php if ($position['status']): ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php echo $position['image_jobs']; ?>" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="job.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Explore More</a>
                                <a href="registerworker.php" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Apply Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-4"><?php echo $position['name']; ?></h3>
                            <div class="mb-3"></div>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>Full-Time</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>40 Hrs/Wk</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>1
                                Position</small>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s"><br>
                    <h1 class="mb-5"><a class="btn btn-primary py-3 px-5 mt-2" href="job.php">Explore More</a></h1>
                </div>
            </div>
        </div>
    </div>


    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Looking for Talents?</h6>
                <h1 class="mb-5">Explore Our Top-tier Talents</h1>
            </div>
            <div class="row g-4">
                <?php if (!empty($positions)): ?>
                <?php foreach ($positions as $position): ?>
                <?php if ($position['status']): ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo $position['image_talents']; ?>" alt="<?php echo $position['name']; ?>">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0"><?php echo $position['name']; ?></h5>
                            <small>10+ Talents</small>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php else: ?>
                <div class="col-lg-6 col-md-8">
                    <div class="card no-jobs-card text-center p-5">
                        <div class="card-body">
                            <h1>Job not available</h1>
                            <p class="mt-4">There are currently no job vacancies available. Please check back later
                                or contact us for more information.</p>
                            <a href="./contact.html" class="btn btn-primary mt-3">Contact Us</a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div> -->


    <!-- Team End -->



    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">Schools and
                    Communities</h1>
            </div>
            <div class="text-center wow fadeInUp">
                <img class="borde p-2 mx-auto mb-3" src="./img/school_communities.jpg" style="width: auto; height: 100px;">
            </div>
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">Training Centers</h1>
            </div>
            <div class="text-center wow fadeInUp">
                <img class="borde p-2 mx-auto mb-3" src="./img/training_centers.jpg" style="width: auto; height: 100px;">
            </div>
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">Placement Agencies</h1>
            </div>
            <div class="text-center wow fadeInUp">
                <img class="borde p-2 mx-auto mb-3" src="./img/placement_agencies.jpg" style="width: auto; height: 100px;">
            </div>
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">Overseas Agencies</h1>
            </div>
            <div class="text-center wow fadeInUp">
                <img class="borde p-2 mx-auto mb-3" src="./img/overseas_agencies.jpg" style="width: auto; height: 100px;">
            </div>
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">Partners</h1>
            </div>
            <div class="text-center wow fadeInUp">
                <img class="borde p-2 mx-auto mb-3" src="./img/partner.jpg" style="width: auto; height: 100px;">
            </div>
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">Support</h1>
            </div>
            <div class="text-center wow fadeInUp">
                <img class="borde p-2 mx-auto mb-3" src="./img/partner_support.jpg"
                    style="width: auto; height: 100px;">
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-3">About Us</h4>
                    <div class="row g-2 pt-2">
                        <p>We connects highly skilled professionals with businesses seeking remote talent solutions.</p>
                        <p>We bridge talent across borders by providing exceptional remote work opportunities. We
                            understand the unique cultural and professional synergies between Indonesia and other
                            countries and leverage this knowledge to foster smooth, productive working relationships.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p><b>MX Global Pte Ltd</b><br>
                        Midview City, 22 Sin Ming Lane, #06-76, Postal 573969
                    </p>
                    <p><b>PT Max Solution Indonesia</b>
                        <br>Jakarta, Indonesia<br>
                        +62 815 9221 333<br>
                        hello@mxsolution.id
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        © 2024 MX Global Pte Ltd | PT Max Solution Indonesia
                    </div>
                    <div class="col-md-6 text-center text-md-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
