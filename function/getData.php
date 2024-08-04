<?php
// Menggunakan __DIR__ untuk mendapatkan direktori dari file yang sedang berjalan
require 'db_connection.php';  // Pastikan koneksi ke database
require  'utilities.php';     // Fungsi utilitas untuk membersihkan data

// Mendapatkan data gender
$gender_query = $pdo->prepare("SELECT id, name FROM gender");
$gender_query->execute();
$genders = $gender_query->fetchAll(PDO::FETCH_ASSOC);

// Mendapatkan data marital_status
$marital_status_query = $pdo->prepare("SELECT id, name FROM marital_status");
$marital_status_query->execute();
$marital_statuses = $marital_status_query->fetchAll(PDO::FETCH_ASSOC);

// Mendapatkan data religion
$religion_query = $pdo->prepare("SELECT id, name FROM religion");
$religion_query->execute();
$religions = $religion_query->fetchAll(PDO::FETCH_ASSOC);

// Mendapatkan data education_level
$education_level_query = $pdo->prepare("SELECT id, name FROM education_level");
$education_level_query->execute();
$education_levels = $education_level_query->fetchAll(PDO::FETCH_ASSOC);

// Mendapatkan data desired position
$position_query = $pdo->prepare("SELECT id, status, name,image_jobs, description, responsibilities FROM position_table");
$position_query->execute();
$positions = $position_query->fetchAll(PDO::FETCH_ASSOC);

// Mendapatkan data status_worker
$status_worker_query = $pdo->prepare("SELECT id, name FROM status_worker");
$status_worker_query->execute();
$status_workers = $status_worker_query->fetchAll(PDO::FETCH_ASSOC);

// Mendapatkan data job_level
$job_level_query = $pdo->prepare("SELECT id, name FROM job_level");
$job_level_query->execute();
$job_levels = $job_level_query->fetchAll(PDO::FETCH_ASSOC); 

$rating_options_query = $pdo->prepare("SELECT rating_id, rating_value FROM rating_options");
$rating_options_query->execute();
$rating_options = $rating_options_query->fetchAll(PDO::FETCH_ASSOC); 

$maid_skills_query = $pdo->prepare("SELECT care_of_baby, care_of_children, care_of_elderly, care_of_disabled, general_housework, cooking, ironing, simple_sewing, gardening, wash_car, accompany_employer, care_for_pets FROM maid_skills");
$maid_skills_query->execute();
$maid_skills = $maid_skills_query->fetchAll(PDO::FETCH_ASSOC); 

$language_query = $pdo->prepare("SELECT id, name FROM language");
$language_query->execute();
$language = $language_query->fetchAll(PDO::FETCH_ASSOC); 

?>
