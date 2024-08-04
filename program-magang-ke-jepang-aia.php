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

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .gallery-item {
            transition: transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
            vertical-align: middle;
        }

        .gallery-item .btn-primary {
            font-size: 14px;
            border-radius: 0;
            transition: background-color 0.3s ease;
        }

        .gallery-item .btn-primary:hover {
            background-color: #007bff;
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

    <div class="container-xxl py-5">
        <div class="container">

            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <!-- Video Section -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <!-- Video Element -->
                                <video class="img-fluid position-absolute w-100 h-100" controls
                                    style="object-fit: cover;">
                                    <source src="./img/agam_inong_aceh2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>

                        <!-- Text Content Section -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <h6 class="section-title bg-white text-start text-primary pe-3">Agam Inong Aceh</h6>
                            <h1 class="mb-4">Tentang Program Magang ke Jepang</h1>
                            <p class="mb-4">Program Pemagangan atau Persiapan SSW ini dilengkapi dengan kemudahan
                                Biaya Pendidikan dan Biaya Persiapan lainnya terkait program pemagangan.
                            </p>

                            <h6 class="section-title bg-white text-start text-primary pe-3">Persyaratan</h6>
                            <ul class="mb-4">
                                <li>Pendidikan minimal SMA/SMK</li>
                                <li>Umur 18 - 25</li>
                                <li>Tinggi badan 160 untuk pria, 150 untuk wanita</li>
                                <li>BMI ideal</li>
                                <li>Tidak bertato</li>
                                <li>Tidak bertindik (untuk pria)</li>
                                <li>Sehat jasmani dan rohani</li>
                                <li>Tidak memiliki riwayat patah tulang</li>
                                <li>Tidak memiliki penyakit mata lebih dari -4</li>
                                <li>Bersedia mengikuti pelatihan bahasa Jepang dan pelatihan skill selama 6 bulan di
                                    Training Center</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About End -->

            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <h6 class="section-title bg-white text-start text-primary pe-3">Jadwal</h6>
                            <ul class="mb-4">
                                <li>Pendaftaran 25 Juli s/d 11 Agustus 2024</li>
                                <li>Pembekalan 14 Agustus 2024</li>
                                <li>Test Seleksi 20 Agustus 2024</li>
                            </ul>
                            <h6 class="section-title bg-white text-start text-primary pe-3">Test Seleksi</h6>
                            <ul class="mb-4">
                                <li>Test Akademis: Matematika Dasar, Psikotest, IQ dan Pengetahuan Bahasa Jepang</li>
                                <li>Test Wawancara</li>
                                <li>Test Fisik</li>
                            </ul>
                            <h6 class="section-title bg-white text-start text-primary pe-3">Masa Kontrak Magang</h6>
                            <ul class="mb-4">
                                <li>1 tahun </li>
                                <li>3 tahun </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <!-- Video Element -->
                                <video class="img-fluid position-absolute w-100 h-100" controls
                                    style="object-fit: cover;">
                                    <source src="./img/agam_inong_aceh.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 9999;">
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true"
                    style="border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); background: #d1e7fd;">
                    <div class="toast-header">
                        <strong class="me-auto">Notification</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Data has been successfully submitted!
                    </div>
                </div>
            </div>



            <div class="container-xxl py-5" id="workerRegistrationForm">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">Pendaftaran Magang</h6>
                        <h1 class="mb-5">Daftar Sebagai Peserta Magang</h1>
                    </div>
                    <form action="./function/submit_daftar_program_magang_ke_jepang.php" method="post"
                        enctype="multipart/form-data">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <h3>Informasi Pribadi</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="full_name">Nama Lengkap Calon Peserta: <span
                                                style="color: red;">*</span></label>
                                        <input type="text" id="full_name" name="full_name" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin: <span
                                                style="color: red;">*</span></label>
                                        <select id="gender" name="gender" class="form-control" required>
                                            <option value="" selected>Select Gender</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_number">No. Telepon: <span
                                                style="color: red;">*</span></label>
                                        <input type="text" id="phone_number" name="phone_number"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email: <span style="color: red;">*</span></label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nik">NIK: <span style="color: red;">*</span></label>
                                        <input type="text" id="nik" name="nik" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="foto">Foto: <span style="color: red;">*</span></label>
                                        <input type="file" id="foto" name="foto" class="form-control"
                                            required accept="image/*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ktp">KTP: <span style="color: red;">*</span></label>
                                        <input type="file" id="ktp" name="ktp" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="akte_kelahiran">Akte Kelahiran: <span
                                                style="color: red;">*</span></label>
                                        <input type="file" id="akte_kelahiran" name="akte_kelahiran"
                                            class="form-control" required accept=".pdf">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ijazah">Ijazah: <span style="color: red;">*</span></label>
                                        <input type="file" id="ijazah" name="ijazah" class="form-control"
                                            required accept=".pdf">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Alamat Rumah Lengkap: <span
                                                style="color: red;">*</span></label>
                                        <input type="text" id="address" name="address" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birthplace_date">Tempat Tanggal Lahir (Banda Aceh, 01-01-2000):
                                            <span style="color: red;">*</span></label>
                                        <input type="text" id="birthplace_date" name="birthplace_date"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="child_number">Anak ke -: <span
                                                style="color: red;">*</span></label>
                                        <input type="number" id="child_number" name="child_number"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="siblings_number">Dari berapa bersaudara: <span
                                                style="color: red;">*</span></label>
                                        <input type="text" id="siblings_number" name="siblings_number"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="marital_status">Status Pernikahan: <span
                                                style="color: red;">*</span></label>
                                        <select id="marital_status" name="marital_status" class="form-control"
                                            required>
                                            <option value="" selected>Select Marital Status</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                            <option value="Sudah Menikah">Sudah Menikah</option>
                                            <option value="Cerai">Cerai</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Section Medical History and Dietary Restriction -->
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <h3>Latar Belakang Pendidikan</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_education">Pendidikan Terakhir: <span
                                                        style="color: red;">*</span></label>
                                                <input type="text" id="last_education" name="last_education"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="school_name">Nama Sekolah / Perguruan Tinggi: <span
                                                        style="color: red;">*</span></label>
                                                <input type="text" id="school_name" name="school_name"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="major">Jurusan: </label>
                                                <input type="text" id="major" name="major"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <h3>Latar Belakang Keluarga</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="family_card_number">Nomor Kartu Keluarga: </label>
                                                <input type="number" id="family_card_number"
                                                    name="family_card_number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_name">Nama Ayah: </label>
                                                <input type="text" id="father_name" name="father_name"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_occupation">Pekerjaan Ayah: </label>
                                                <input type="text" id="father_occupation" name="father_occupation"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_education">Pendidikan Terakhir Ayah: </label>
                                                <input type="text" id="father_education" name="father_education"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_name">Nama Ibu: </label>
                                                <input type="text" id="mother_name" name="mother_name"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_occupation">Pekerjaan Ibu: </label>
                                                <input type="text" id="mother_occupation" name="mother_occupation"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_education">Pendidikan Terakhir Ibu: </label>
                                                <input type="text" id="mother_education" name="mother_education"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <h3>Kontak Darurat</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emergency_contact_name">Nama Kontak Darurat: <span
                                                        style="color: red;">*</span></label>
                                                <input type="text" id="emergency_contact_name"
                                                    name="emergency_contact_name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="relationship">Hubungan: <span
                                                        style="color: red;">*</span></label>
                                                <input type="text" id="relationship" name="relationship"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emergency_phone_number">No Telepon: <span
                                                        style="color: red;">*</span></label>
                                                <input type="number" id="emergency_phone_number"
                                                    name="emergency_phone_number" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emergency_email">Email: <span
                                                        style="color: red;">*</span></label>
                                                <input type="email" id="emergency_email" name="emergency_email"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="container mt-4">
                                        <div class="bg-white p-4 rounded-lg shadow-md">
                                            <h3 class="text-xl font-semibold mb-4">Informasi Pembayaran</h3>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                                <div class="bg-gray-100 p-4 rounded-md">
                                                    <p class="text-lg font-medium mb-1">Informasi Rekening:</p>
                                                    <p class="text-gray-700">BSI 726496538 a/n Himpunan Sekolah
                                                        Madrasah NU</p>
                                                </div>
                                                <div class="bg-gray-100 p-4 rounded-md">
                                                    <p class="text-lg font-medium mb-1">Jumlah Pembayaran:</p>
                                                    <p class="text-gray-700">Rp2.000.000</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="payment_proof"
                                                    class="block text-sm font-medium text-gray-700">Upload Bukti
                                                    Pembayaran:</label>
                                                <input type="file" id="payment_proof" name="payment_proof"
                                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                    accept=".jpg, .png, .pdf">
                                                <small class="form-text text-muted mt-1 text-gray-500">File types: JPG,
                                                    PNG, PDF</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row g-4">
                                <div class="col-lg-12 text-center mt-5">
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <!-- Worker Registration Form End -->



            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-6 col-md-6">
                            <h4 class="text-white mb-3">About Us</h4>
                            <div class="row g-2 pt-2">
                                <p>We connects highly skilled professionals with businesses seeking remote talent
                                    solutions.</p>
                                <p>We bridge talent across borders by providing exceptional remote work opportunities.
                                    We
                                    understand the unique cultural and professional synergies between Indonesia and
                                    other
                                    countries and leverage this knowledge to foster smooth, productive working
                                    relationships.
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
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                    class="bi bi-arrow-up"></i></a>

            <!-- Bootstrap JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


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
