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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


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
                <h1 class="display-3 text-white animation slideInDown">Pendaftaran Pekerja</h1>
                <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="registration.php">Forms</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Pendaftaran Pekerja</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

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

    <div class="container-xxl py-5" id="workerRegistrationForm">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Pendaftaran Pekerja
                </h6>
                <h1 class="mb-5">Daftar sebagai Pekerja</h1>
            </div>
            <form action="./function/submit_worker.php" method="post" enctype="multipart/form-data">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <h3>Informasi Pribadi</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap: <span style="color: red;">*</span></label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nationality_id">Kebangsaan: <span style="color: red;">*</span></label>
                                <input type="text" id="nationality_id" name="nationality_id" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender_id">Jenis Kelamin: <span style="color: red;">*</span></label>
                                <select id="gender_id" name="gender_id" class="form-control" required>
                                    <option value="" dipilih>Pilih Jenis Kelamin</option>
                                    <?php
                                    foreach ($genders as $gender) {
                                        echo "<option value=\"{$gender['id']}\">{$gender['name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="marital_status_id">Status Pernikahan: <span
                                        style="color: red;">*</span></label>
                                <select id="marital_status_id" name="marital_status_id" class="form-control"
                                    required>
                                    <option value=""select>Pilih Tingkat Status Perkawinan</option>
                                    <?php
                                    foreach ($marital_statuses as $level) {
                                        echo "<option value=\"{$level['id']}\">{$level['name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="birthplace">Tempat lahir: <span style="color:red;">*</span></label>
                                <input type="text" id="birthplace" name="birthplace" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="birthday">Ulang tahun: <span style="color: red;">*</span></label>
                                <input type="date" id="birthday" name="birthday" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="height">Tinggi: <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="number" id="height" name="height" class="form-control"
                                        required>
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Berat">Berat: <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="number" id="weight" name="weight" class="form-control"
                                        required>
                                    <span class="input-group-text">kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num_of_children">Jumlah Anak</label>
                                <input type="text" id="num_of_children" name="num_of_children"
                                    class="form-control" required>
                                <span style="font-size: small;">If you do not have children, please enter "0" or
                                    "-".</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="children_ages">Usia Anak</label>
                                <input type="text" class="form-control" name="children_ages" id="children_ages">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="education_level_id">Tingkat Pendidikan Terakhir: <Span
                                        style="color: red;">*</Span></label>
                                <select id="education_level_id" name="education_level_id" class="form-control">
                                    <option value=""select>Pilih Tingkat Pendidikan Terakhir</option>
                                    <?php
                                    foreach ($education_levels as $level) {
                                        echo "<option value=\"{$level['id']}\">{$level['name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lingual_id">Bahasa: <Span style="color: red;">*</Span></label>
                                <select id="language_id" name="language_id" class="form-control">
                                    <option value="" dipilih>Pilih Bahasa</option>
                                    <?php
                                    foreach ($language as $level) {
                                        echo "<option value=\"{$level['id']}\">{$level['name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12" id="other_language" style="display: none;">
                            <div class="form-group">
                                <label for="bahasa">Bahasa Lain: </label>
                                <input type="Text" id="language_remark" name="language_remark"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="experience">Pengalaman Kerja: <span style="color: red;">*</span></label>
                                <textarea name="experience" id="experience" class="form-control" rows="2"></textarea>
                            </div>
                        </div>

                        <!-- Section Medical History and Dietary Restriction -->
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <h3>Riwayat Medis dan Pembatasan Diet</h3>
                                </div>
                                <div class="col-md-6">
                                    <class class="form-group">
                                        <label for="mental_ilness">Penyakit Mental: <span
                                                style="color: red;">*</span></label>
                                        <select name="mental_illness" id="mental_illness" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </class>
                                </div>
                                <div class="col-md-6">
                                    <class class="form-group">
                                        <label for="epilepsy">Epilepsi: <span style="color: red;">*</span></label>
                                        <select name="epilepsy" id="epilepsy" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </class>
                                </div>
                                <div class="col-md-6">
                                    <class class="form-group">
                                        <label for="asthma">Asma: <span style="color: red;">*</span></label>
                                        <select name="asthma" id="asthma" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </class>
                                </div>
                                <div class="col-md-6">
                                    <class class="form-group">
                                        <label for="diabetes">Diabetes: <span style="color: red;">*</span></label>
                                        <select name="diabetes" id="diabetes" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </class>
                                </div>
                                <div class="col-md-6">
                                    <class class="form-group">
                                        <label for="hipertensi">Hipertensi: <span style="color: red;">*</span></label>
                                        <select name="hypertension" id="hypertension" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </class>
                                </div>
                                <div class="col-md-6">
                                    <class class="form-group">
                                        <label for="allergies">Alergi: <span style="color: red;">*</span></label>
                                        <select name="allergies" id="allergies" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </class>
                                </div>
                                <div class="col-md-6">
                                    <class class="form-group">
                                        <label for="Tuberkulosis">Tuberkulosis: <span
                                                style="color: red;">*</span></label>
                                        <select name="tuberculosis" id="tuberculosis" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </class>
                                </div>
                                <div class="col-md-6">
                                    <class class="form-group">
                                        <label for="Penyakit Jantung">Penyakit Jantung: <span
                                                style="color: red;">*</span></label>
                                        <select name="heart_disease" id="heart_disease" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </class>
                                </div>
                                <div class="col-md-6">
                                    <class class="form-group">
                                        <label for="Malaria">Malaria<span style="color: red;">*</span></label>
                                        <select name="malaria" id="malaria" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </class>
                                </div>
                                <div class="col-md-6">
                                    <class class="form-group">
                                        <label for="Surgery">Pembedahan: <span style="color: red;">*</span></label>
                                        <select name="surgery" id="surgery" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </class>
                                </div>
                                <div class="col-md-6">
                                    <class class="form-group">
                                        <label for="Bedah Plastik">Bedah Plastik: <span
                                                style="color: red;">*</span></label>
                                        <select name="plastic_surgery" id="plastic_surgery" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </class>
                                </div>
                                <div class="col-md-6">
                                    <class class="form-group">
                                        <label for="Disabilitas Fisik">Disabilitas Fisik: <span
                                                style="color: red;">*</span></label>
                                        <select name="physical_disabilities" id="physical_disabilities"
                                            class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </class>
                                </div>
                            </div>
                        </div>
                        <!-- Section Skill and Experience -->
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <h3>Keterampilan dan Pengalaman</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="position_id">Posisi: <span style="color: red;">*</span></label>
                                        <select id="position_id" name="position_id" class="form-control" required>
                                            <option value=""select>Pilih Posisi yang Diinginkan</option>
                                            <?php
                                            foreach ($positions as $position) {
                                                if ($position['status']) {
                                                    echo "<option value=\"{$position['id']}\">{$position['name']}</option>";
                                                }
                                            }
                                            ?>
                                            <option value="11">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12" id="other_position" style="display: none;">
                                    <div class="form-group">
                                    <label>Posisi Lainnya</label>
                                    <input type="text" name="position_remark" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 mt-2">
                                <div class="col-md-6 other_skill_maid" id="skill_maid_1" style="display: none;">
                                    <div class="form-group ">
                                    <label for="care_of_baby">Perawatan Bayi (di bawah 3 tahun): <span
                                    style="color: red;">*</span></label>
                                        <select name="care_of_baby" id="care_of_baby" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 other_skill_maid" id="skill_maid_2" style="display: none;">
                                    <div class="form-group">
                                    <label for="care_of_children">Pengasuhan Anak (3 - 15 tahun): <span
                                    style="color: red;">*</span></label>
                                        <select name="care_of_children" id="care_of_children" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 other_skill_maid" id="skill_maid_3" style="display: none;">
                                    <div class="form-group">
                                    <label for="care_of_elderly">Perawatan Lansia: <span
                                    style="color: red;">*</span></label>
                                        <select name="care_of_elderly" id="care_of_elderly" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 other_skill_maid" id="skill_maid_4" style="display: none;">
                                    <div class="form-group">
                                    <label for="care_of_disabled">Perawatan Penyandang Disabilitas: <span
                                    style="color: red;">*</span></label>
                                        <select name="care_of_disabled" id="care_of_disabled" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 other_skill_maid" id="skill_maid_5" style="display: none;">
                                    <div class="form-group">
                                    <label for="general_housework">Pekerjaan Rumah Umum: <span
                                    style="color: red;">*</span></label>
                                        <select name="general_housework" id="general_housework" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 other_skill_maid" id="skill_maid_6" style="display: none;">
                                    <div class="form-group">
                                    <label for="cooking">Memasak: <span style="color: red;">*</span></label>
                                    <select name="cooking" id="cooking" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 other_skill_maid" id="skill_maid_7" style="display: none;">
                                    <div class="form-group">
                                    <label for="ironing">Menyetrika: <span style="color: red;">*</span></label>
                                    <select name="ironing" id="ironing" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 other_skill_maid" id="skill_maid_8" style="display: none;">
                                    <div class="form-group">
                                    <label for="simple_sewing">Menjahit Sederhana: <span
                                    style="color: red;">*</span></label>
                                        <select name="simple_sewing" id="simple_sewing" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 other_skill_maid" id="skill_maid_9" style="display: none;">
                                    <div class="form-group">
                                    <label for="gardening">Berkebun: <span style="color: red;">*</span></label>
                                    <select name="gardening" id="gardening" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 other_skill_maid" id="skill_maid_10" style="display: none;">
                                    <div class="form-group">
                                    <label for="wash_car">Cuci Mobil: <span style="color: red;">*</span></label>
                                    <select name="wash_car" id="wash_car" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 other_skill_maid" id="skill_maid_11" style="display: none;">
                                    <div class="form-group">
                                    <label for="accompany_employer">Menemani Majikan ke Kantor: <span
                                    style="color: red;">*</span></label>
                                        <select name="accompany_employer" id="accompany_employer"
                                            class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 other_skill_maid" id="skill_maid_12" style="display: none;">
                                    <div class="form-group">
                                    <label for="care_for_pets">Merawat Hewan Peliharaan: <span
                                    style="color: red;">*</span></label>
                                        <select name="care_for_pets" id="care_for_pets" class="form-control">
                                            <option value="1">Ya</option>
                                            <option value="0" selected>Tidak</option>
                                        </select>
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
