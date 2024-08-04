<?php
// Include your database connection
include './function/db_connection.php';
// Include your function file if necessary
include './function/worker_function.php';

$interns = get_interns();
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
    <link href="img/favicon.png" rel="icon">

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

    <!-- Include DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Include DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>
<style>
    .gallery-item {
        transition: transform 0.3s ease;
    }

    .gallery-item:hover {
        transform: scale(1.05);
    }
</style>


</head>


<body>
    <!-- Spinner Start -->


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
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="about.html" class="nav-item nav-link ">About Us</a>
                <a href="services.php" class="nav-item nav-link">Services</a>
                <a href="job.php" class="nav-item nav-link">Job Opportunities</a>
                <a href="blog.php" class="nav-item nav-link ">Blog</a>
                <a href="contact.html" class="nav-item nav-link ">Contact</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle btn btn-primary py-4 px-lg-5 "
                        data-bs-toggle="dropdown">Register</a>
                    <div class="dropdown-menu fade-down m-0">
                        <!-- <a href="registercompany.php" class="dropdown-item ">as Company</a> -->
                        <a href="registermigrantworker.php" class="dropdown-item active">as Worker</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link"></a>
            </div>
            <!--a href="" style="color:#000 !important;background-color:#fff !important;border:0px !important;" class="btn btn-primary py-4 px-lg-5 ">Register as Talent<i class="fa fa-arrow-right ms-3"></i></a>
            <a href="" class="btn btn-primary py-4 px-lg-5 ">Register as Company<i class="fa fa-arrow-right ms-3"></i></a-->
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="./img/agam_inong_aceh.jpg" alt="Agam Inong Aceh" class="img-fluid mr-5"
                            style="width: 100px; height: auto;margin-right: 10px;">
                        <h1 class="display-3 text-white animated slideInDown">Agam Inong Aceh</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="registration.php">Forms</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Agam Inong Aceh</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    <!-- Include Lightbox CSS and JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <style>
        .gallery-item {
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }
    </style>


    <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 9999;">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true"
            style="border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); background: #d1e7fd;">
            <div class="toast-header">
                <strong class="me-auto">Notification</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Data has been successfully submitted!
            </div>
        </div>
    </div>



    <div class="container mt-5">
        <h2>Intern Data</h2>
        <div class="table-responsive">
            <table id="internTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>NIK</th>
                        <th>Address</th>
                        <th>Birthplace Date</th>
                        <th>Child Number</th>
                        <th>Siblings Number</th>
                        <th>Marital Status</th>
                        <th>Last Education</th>
                        <th>School Name</th>
                        <th>Major</th>
                        <th>Family Card Number</th>
                        <th>Father Name</th>
                        <th>Father Occupation</th>
                        <th>Father Education</th>
                        <th>Mother Name</th>
                        <th>Mother Occupation</th>
                        <th>Mother Education</th>
                        <th>Emergency Contact Name</th>
                        <th>Relationship</th>
                        <th>Emergency Phone Number</th>
                        <th>Emergency Email</th>
                        <th>Payment Proof</th>
                        <th>Foto</th>
                        <th>KTP</th>
                        <th>Akte Kelahiran</th>
                        <th>Ijazah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($interns !== false) {
                        foreach ($interns as $intern) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($intern['full_name']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['gender']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['phone_number']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['email']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['nik']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['address']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['birthplace_date']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['child_number']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['siblings_number']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['marital_status']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['last_education']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['school_name']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['major']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['family_card_number']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['father_name']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['father_occupation']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['father_education']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['mother_name']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['mother_occupation']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['mother_education']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['emergency_contact_name']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['relationship']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['emergency_phone_number']) . '</td>';
                            echo '<td>' . htmlspecialchars($intern['emergency_email']) . '</td>';
                            echo '<td>';
                            if (!empty($intern['payment_proof'])) {
                                echo '<button onclick="openPopup(\'' . htmlspecialchars($intern['payment_proof']) . '\')" class="btn btn-primary">View Payment Proof</button>';
                            } else {
                                echo 'No payment proof';
                            }
                            echo '</td>';
                    
                            echo '<td>';
                            if (!empty($intern['foto'])) {
                                echo '<button onclick="openPopup(\'' . htmlspecialchars($intern['foto']) . '\')" class="btn btn-primary">View Foto</button>';
                            } else {
                                echo 'No foto uploaded';
                            }
                            echo '</td>';
                    
                            echo '<td>';
                            if (!empty($intern['ktp'])) {
                                echo '<button onclick="openPopup(\'' . htmlspecialchars($intern['ktp']) . '\')" class="btn btn-primary">View KTP</button>';
                            } else {
                                echo 'No KTP uploaded';
                            }
                            echo '</td>';
                            echo '<td>';
                            if (!empty($intern['akte_kelahiran'])) {
                                echo '<button onclick="openPopup(\'' . htmlspecialchars($intern['akte_kelahiran']) . '\')" class="btn btn-primary">View Akte Kelahiran</button>';
                            } else {
                                echo 'No file uploaded';
                            }
                            echo '</td>';
                            echo '<td>';
                            if (!empty($intern['ijazah'])) {
                                echo '<button onclick="openPopup(\'' . htmlspecialchars($intern['ijazah']) . '\')" class="btn btn-primary">View Ijazah</button>';
                            } else {
                                echo 'No file uploaded';
                            }
                            echo '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="25">No data available.</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            $('#internTable').DataTable();
        });
    </script>

    <script>
        function openPopup(url) {
            window.open(url, 'File Preview', 'width=800,height=600');
        }
    </script>


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

    <script>
        document.getElementById('position_id').addEventListener('change', function() {
            var position = this.value;
            var otherPositionGroups = document.querySelectorAll('.other_skill_maid');
            var otherPosition = document.getElementById('other_position');

            otherPositionGroups.forEach(function(group) {
                if (position === '9' || position === 'maid') {
                    group.style.display = 'block';
                } else {
                    group.style.display = 'none';
                }
            });

            if (position === '11') {
                otherPosition.style.display = 'block';
            } else {
                otherPosition.style.display = 'none';
            }
        });

        document.getElementById('language_id').addEventListener('change', function() {
            var language = this.value;
            var otherLanguageGroups = document.getElementById('other_language');
            if (language === '4') {
                otherLanguageGroups.style.display = 'block';
            } else {
                otherLanguageGroups.style.display = 'none';
            }
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#internTable').DataTable({
                "responsive": true, // Membuat tabel responsif
                "paging": true, // Menampilkan pengaturan halaman
                "ordering": true, // Mengizinkan pengurutan kolom
                "info": true // Menampilkan informasi jumlah data
            });
        });
    </script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

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
