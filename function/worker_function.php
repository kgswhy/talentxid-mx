<?php
require 'db_connection.php';
require 'utilities.php';
// Fungsi untuk validasi dan sanitasi input
function register_worker($data, $files)
{
    global $pdo; // Koneksi database PDO global

    try {
        // Data untuk tabel worker
        $workerData = [
            'full_name' => isset($data['full_name']) ? validate_input($data['full_name']) : '',
            'gender' => isset($data['gender']) ? validate_input($data['gender']) : '',
            'phone_number' => isset($data['phone_number']) ? validate_input($data['phone_number']) : '',
            'email' => isset($data['email']) ? validate_input($data['email']) : '',
            'nik' => isset($data['nik']) ? validate_input($data['nik']) : '',
            'address' => isset($data['address']) ? validate_input($data['address']) : '',
            'birthplace_date' => isset($data['birthplace_date']) ? validate_input($data['birthplace_date']) : '',
            'child_number' => isset($data['child_number']) ? validate_input($data['child_number']) : '',
            'siblings_number' => isset($data['siblings_number']) ? validate_input($data['siblings_number']) : '',
            'marital_status' => isset($data['marital_status']) ? validate_input($data['marital_status']) : '',
            'last_education' => isset($data['last_education']) ? validate_input($data['last_education']) : '',
            'school_name' => isset($data['school_name']) ? validate_input($data['school_name']) : '',
            'major' => isset($data['major']) ? validate_input($data['major']) : '',
            'family_card_number' => isset($data['family_card_number']) ? validate_input($data['family_card_number']) : '',
            'father_name' => isset($data['father_name']) ? validate_input($data['father_name']) : '',
            'father_occupation' => isset($data['father_occupation']) ? validate_input($data['father_occupation']) : '',
            'father_education' => isset($data['father_education']) ? validate_input($data['father_education']) : '',
            'mother_name' => isset($data['mother_name']) ? validate_input($data['mother_name']) : '',
            'mother_occupation' => isset($data['mother_occupation']) ? validate_input($data['mother_occupation']) : '',
            'mother_education' => isset($data['mother_education']) ? validate_input($data['mother_education']) : '',
            'emergency_contact_name' => isset($data['emergency_contact_name']) ? validate_input($data['emergency_contact_name']) : '',
            'relationship' => isset($data['relationship']) ? validate_input($data['relationship']) : '',
            'emergency_phone_number' => isset($data['emergency_phone_number']) ? validate_input($data['emergency_phone_number']) : '',
            'emergency_email' => isset($data['emergency_email']) ? validate_input($data['emergency_email']) : '',
            'payment_proof' => isset($data['payment_proof']) ? $data['payment_proof'] : null,
        ];

        // Transaksi: Mulai transaksi
        $pdo->beginTransaction();

        // Query untuk tabel worker
        $sqlInternJapan = "INSERT INTO intern_japan (
            full_name, gender, phone_number, email, nik, address, birthplace_date, child_number, siblings_number, 
            marital_status, last_education, school_name, major, family_card_number, father_name, father_occupation, 
            father_education, mother_name, mother_occupation, mother_education, emergency_contact_name, relationship, 
            emergency_phone_number, emergency_email, payment_proof
        ) VALUES (
            :full_name, :gender, :phone_number, :email, :nik, :address, :birthplace_date, :child_number, :siblings_number, 
            :marital_status, :last_education, :school_name, :major, :family_card_number, :father_name, :father_occupation, 
            :father_education, :mother_name, :mother_occupation, :mother_education, :emergency_contact_name, :relationship, 
            :emergency_phone_number, :emergency_email, :payment_proof
        )";

        // Eksekusi query untuk tabel worker
        $stmtWorker = $pdo->prepare($sqlInternJapan);
        $stmtWorker->execute($workerData);

        // Dapatkan ID pekerja yang baru saja dimasukkan
        $pdo->commit();

        return true; // Registrasi berhasil
    } catch (PDOException $e) {
        // Transaksi: Rollback jika terjadi kesalahan
        $pdo->rollback();
        echo 'Worker Registration Error: ' . $e->getMessage(); // Log kesalahan
        return false; // Registrasi gagal
    }
}

function register_intern($data, $files)
{
    global $pdo; // Koneksi database PDO global

    try {
        // Handle file upload for payment_proof
        $paymentProofPath = null;
        if (isset($files['payment_proof']) && $files['payment_proof']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'payment_proof/'; // Directory to save the uploaded file
            $paymentProofPath = $uploadDir . basename($files['payment_proof']['name']);
            if (!move_uploaded_file($files['payment_proof']['tmp_name'], $paymentProofPath)) {
                throw new Exception('Failed to upload file.');
            }

            // Modify the path format
            $paymentProofPath = './function/' . $paymentProofPath;
        }

        // Upload foto
        $fotoPath = null;
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'foto/'; // Directory untuk menyimpan file yang diupload
            $fotoPath = $uploadDir . basename($_FILES['foto']['name']);
            if (!move_uploaded_file($_FILES['foto']['tmp_name'], $fotoPath)) {
                throw new Exception('Failed to upload foto file.');
            }
            $fotoPath = './function/' . $fotoPath; // Modifikasi format path jika diperlukan
        }

        // Upload KTP
        $ktpPath = null;
        if (isset($_FILES['ktp']) && $_FILES['ktp']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'ktp/'; // Directory untuk menyimpan file yang diupload
            $ktpPath = $uploadDir . basename($_FILES['ktp']['name']);
            if (!move_uploaded_file($_FILES['ktp']['tmp_name'], $ktpPath)) {
                throw new Exception('Failed to upload KTP file.');
            }
            $ktpPath = './function/' . $ktpPath; // Modifikasi format path jika diperlukan
        }

        // Upload Akte Kelahiran
        $akteKelahiranPath = null;
        if (isset($_FILES['akte_kelahiran']) && $_FILES['akte_kelahiran']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'akte_kelahiran/'; // Directory untuk menyimpan file yang diupload
            $akteKelahiranPath = $uploadDir . basename($_FILES['akte_kelahiran']['name']);
            if (!move_uploaded_file($_FILES['akte_kelahiran']['tmp_name'], $akteKelahiranPath)) {
                throw new Exception('Failed to upload Akte Kelahiran file.');
            }
            $akteKelahiranPath = './function/' . $akteKelahiranPath; // Modifikasi format path jika diperlukan
        }

        // Upload Ijazah
        $ijazahPath = null;
        if (isset($_FILES['ijazah']) && $_FILES['ijazah']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'ijazah/'; // Directory untuk menyimpan file yang diupload
            $ijazahPath = $uploadDir . basename($_FILES['ijazah']['name']);
            if (!move_uploaded_file($_FILES['ijazah']['tmp_name'], $ijazahPath)) {
                throw new Exception('Failed to upload Ijazah file.');
            }
            $ijazahPath = './function/' . $ijazahPath; // Modifikasi format path jika diperlukan
        }

        // Data untuk tabel worker
        $workerData = [
            'full_name' => isset($data['full_name']) ? validate_input($data['full_name']) : '',
            'gender' => isset($data['gender']) ? validate_input($data['gender']) : '',
            'phone_number' => isset($data['phone_number']) ? validate_input($data['phone_number']) : '',
            'email' => isset($data['email']) ? validate_input($data['email']) : '',
            'nik' => isset($data['nik']) ? validate_input($data['nik']) : '',
            'foto' => $fotoPath,
            'ktp' => $ktpPath,
            'akte_kelahiran' => $akteKelahiranPath,
            'ijazah' => $ijazahPath,
            'address' => isset($data['address']) ? validate_input($data['address']) : '',
            'birthplace_date' => isset($data['birthplace_date']) ? validate_input($data['birthplace_date']) : '',
            'child_number' => isset($data['child_number']) ? validate_input($data['child_number']) : '',
            'siblings_number' => isset($data['siblings_number']) ? validate_input($data['siblings_number']) : '',
            'marital_status' => isset($data['marital_status']) ? validate_input($data['marital_status']) : '',
            'last_education' => isset($data['last_education']) ? validate_input($data['last_education']) : '',
            'school_name' => isset($data['school_name']) ? validate_input($data['school_name']) : '',
            'major' => isset($data['major']) ? validate_input($data['major']) : '',
            'family_card_number' => isset($data['family_card_number']) ? validate_input($data['family_card_number']) : '',
            'father_name' => isset($data['father_name']) ? validate_input($data['father_name']) : '',
            'father_occupation' => isset($data['father_occupation']) ? validate_input($data['father_occupation']) : '',
            'father_education' => isset($data['father_education']) ? validate_input($data['father_education']) : '',
            'mother_name' => isset($data['mother_name']) ? validate_input($data['mother_name']) : '',
            'mother_occupation' => isset($data['mother_occupation']) ? validate_input($data['mother_occupation']) : '',
            'mother_education' => isset($data['mother_education']) ? validate_input($data['mother_education']) : '',
            'emergency_contact_name' => isset($data['emergency_contact_name']) ? validate_input($data['emergency_contact_name']) : '',
            'relationship' => isset($data['relationship']) ? validate_input($data['relationship']) : '',
            'emergency_phone_number' => isset($data['emergency_phone_number']) ? validate_input($data['emergency_phone_number']) : '',
            'emergency_email' => isset($data['emergency_email']) ? validate_input($data['emergency_email']) : '',
            'payment_proof' => $paymentProofPath,
        ];

        // Transaksi: Mulai transaksi
        $pdo->beginTransaction();

        // Query untuk tabel worker
        $sqlInternJapan = "INSERT INTO intern_japan (
            full_name, gender, phone_number, email, nik, foto, ktp, akte_kelahiran, ijazah, address, birthplace_date, child_number, siblings_number, 
            marital_status, last_education, school_name, major, family_card_number, father_name, father_occupation, 
            father_education, mother_name, mother_occupation, mother_education, emergency_contact_name, relationship, 
            emergency_phone_number, emergency_email, payment_proof
        ) VALUES (
            :full_name, :gender, :phone_number, :email, :nik, :foto, :ktp, :akte_kelahiran, :ijazah,:address, :birthplace_date, :child_number, :siblings_number, 
            :marital_status, :last_education, :school_name, :major, :family_card_number, :father_name, :father_occupation, 
            :father_education, :mother_name, :mother_occupation, :mother_education, :emergency_contact_name, :relationship, 
            :emergency_phone_number, :emergency_email, :payment_proof
        )";

        // Eksekusi query untuk tabel worker
        $stmtWorker = $pdo->prepare($sqlInternJapan);
        $stmtWorker->execute($workerData);

        // Commit the transaction
        $pdo->commit();

        return true; // Registrasi berhasil
    } catch (PDOException $e) {
        // Transaksi: Rollback jika terjadi kesalahan
        $pdo->rollback();
        echo 'Worker Registration Error: ' . $e->getMessage(); // Log kesalahan
        return false; // Registrasi gagal
    } catch (Exception $e) {
        // Handle general exceptions
        $pdo->rollback();
        echo 'Error: ' . $e->getMessage(); // Log kesalahan
        return false; // Registrasi gagal
    }
}

function get_interns()
{
    global $pdo; // Koneksi database PDO global

    try {
        // Query untuk mendapatkan data dari tabel intern_japan
        $sql = 'SELECT * FROM intern_japan';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        // Fetch all rows as an associative array
        $interns = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $interns;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage(); // Log kesalahan
        return false;
    }
}

function get_workers()
{
    global $pdo;

    $sql = "SELECT w.*, 
                g.name AS gender_name, 
                ms.name AS marital_status_name, 
                r.name AS religion_name, 
                ce.name AS current_education_level_name, 
                le.name AS last_education_level_name, 
                p.name AS position_table_name, 
                sw.name AS status_worker_name
            FROM worker w 
            LEFT JOIN gender g ON w.gender_id = g.id 
            LEFT JOIN marital_status ms ON w.marital_status_id = ms.id 
            LEFT JOIN religion r ON w.religion_id = r.id 
            LEFT JOIN education_level ce ON w.current_education_level_id = ce.id 
            LEFT JOIN education_level le ON w.last_education_level_id = le.id 
            LEFT JOIN position_table p ON w.desired_position_id = p.id 
            LEFT JOIN status_worker sw ON w.status_worker_id = sw.id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_worker_by_id($id)
{
    global $pdo;

    // Pastikan ID adalah angka
    if (!is_numeric($id)) {
        return null;
    }

    // Konversi ke integer untuk menghindari SQL injection
    $worker_id = (int) $id;

    // Query untuk mendapatkan informasi pekerja dengan ID tertentu
    $stmt = $pdo->prepare("SELECT w.*, 
                                  g.name AS gender_name, 
                                  ms.name AS marital_status_name, 
                                  r.name AS religion_name, 
                                  ce.name AS current_education_level_name, 
                                  le.name AS last_education_level_name, 
                                  p.name AS position_table_name, 
                                  sw.name AS status_worker_name
                            FROM worker w 
                            LEFT JOIN gender g ON w.gender_id = g.id 
                            LEFT JOIN marital_status ms ON w.marital_status_id = ms.id 
                            LEFT JOIN religion r ON w.religion_id = r.id 
                            LEFT JOIN education_level ce ON w.current_education_level_id = ce.id 
                            LEFT JOIN education_level le ON w.last_education_level_id = le.id 
                            LEFT JOIN position_table p ON w.desired_position_id = p.id 
                            LEFT JOIN status_worker sw ON w.status_worker_id = sw.id 
                            WHERE w.id = :id");

    // Mengikat parameter untuk mencegah SQL injection
    $stmt->bindParam(':id', $worker_id);

    // Eksekusi query
    $stmt->execute();

    // Mengambil hasil sebagai array asosiatif
    $worker = $stmt->fetch(PDO::FETCH_ASSOC);

    // Jika tidak ada pekerja dengan ID ini, kembalikan null
    return $worker ?: null;
}

function update_status_worker_by_id($worker_id, $new_status)
{
    global $pdo;

    // Pastikan ID pekerja adalah angka dan status adalah angka
    if (!is_numeric($worker_id) || !is_numeric($new_status)) {
        throw new InvalidArgumentException('Invalid worker ID or status.');
    }

    // Konversi ID dan status ke integer untuk keamanan
    $worker_id = (int) $worker_id;
    $new_status = (int) $new_status;

    // Query untuk memperbarui status pekerja
    $stmt = $pdo->prepare('UPDATE worker SET status_worker_id = :new_status WHERE id = :worker_id');
    $stmt->bindParam(':worker_id', $worker_id);
    $stmt->bindParam(':new_status', $new_status);

    // Eksekusi query dan pastikan itu berhasil
    if ($stmt->execute()) {
        return true; // Mengindikasikan bahwa pembaruan berhasil
    } else {
        return false; // Mengindikasikan bahwa pembaruan gagal
    }
}

// Fungsi untuk mendapatkan jumlah pekerja
function get_total_workers()
{
    global $pdo;

    try {
        $sql = 'SELECT COUNT(*) AS total FROM worker';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $totalWorkers = $row['total'];
        return $totalWorkers;
    } catch (PDOException $e) {
        error_log('Error: ' . $e->getMessage());
        return false;
    }
}

function submit_interview_assessment($worker_id, $candidate_name, $applied_position, $interview_date, $interviewer, $educational_background_id, $prior_work_experience_id, $technical_skills_id, $verbal_communication_id, $candidate_enthusiasm_id, $teambuilding_skills_id, $initiative_id, $time_management_id, $dedication_id, $overall_recommendation, $notes)
{
    global $pdo;

    try {
        // Query untuk memasukkan data penilaian wawancara ke dalam tabel worker_interview
        $sql = "INSERT INTO worker_interview (
                    worker_id,
                    candidate_name,
                    applied_position,
                    interview_date,
                    interviewer,
                    educational_background_id,
                    prior_work_experience_id,
                    technical_skills_id,
                    verbal_communication_id,
                    candidate_enthusiasm_id,
                    teambuilding_skills_id,
                    initiative_id,
                    time_management_id,
                    dedication_id,
                    overall_recommendation,
                    notes
                ) VALUES (
                    :worker_id,
                    :candidate_name,
                    :applied_position,
                    :interview_date,
                    :interviewer,
                    :educational_background_id,
                    :prior_work_experience_id,
                    :technical_skills_id,
                    :verbal_communication_id,
                    :candidate_enthusiasm_id,
                    :teambuilding_skills_id,
                    :initiative_id,
                    :time_management_id,
                    :dedication_id,
                    :overall_recommendation,
                    :notes
                )";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':worker_id', $worker_id);
        $stmt->bindParam(':candidate_name', $candidate_name);
        $stmt->bindParam(':applied_position', $applied_position);
        $stmt->bindParam(':interview_date', $interview_date);
        $stmt->bindParam(':interviewer', $interviewer);
        $stmt->bindParam(':educational_background_id', $educational_background_id);
        $stmt->bindParam(':prior_work_experience_id', $prior_work_experience_id);
        $stmt->bindParam(':technical_skills_id', $technical_skills_id);
        $stmt->bindParam(':verbal_communication_id', $verbal_communication_id);
        $stmt->bindParam(':candidate_enthusiasm_id', $candidate_enthusiasm_id);
        $stmt->bindParam(':teambuilding_skills_id', $teambuilding_skills_id);
        $stmt->bindParam(':initiative_id', $initiative_id);
        $stmt->bindParam(':time_management_id', $time_management_id);
        $stmt->bindParam(':dedication_id', $dedication_id);
        $stmt->bindParam(':overall_recommendation', $overall_recommendation);
        $stmt->bindParam(':notes', $notes);
        $stmt->execute();

        return true; // Submission berhasil
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage(); // Log kesalahan
        return false; // Submission gagal
    }
}

function get_worker_interview($worker_id)
{
    global $pdo;

    // Pastikan ID worker valid (numeric)
    if (!is_numeric($worker_id)) {
        return null;
    }

    try {
        // Query untuk mendapatkan data penilaian wawancara berdasarkan worker_id
        $sql = 'SELECT * FROM worker_interview WHERE worker_id = :worker_id';

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':worker_id', $worker_id, PDO::PARAM_INT); // Mengikat parameter worker_id
        $stmt->execute();

        // Ambil data dan kembalikan sebagai array asosiatif
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage(); // Log kesalahan (untuk keperluan debugging)
        return null; // Kembalikan null jika terjadi kesalahan
    }
}

// Di dalam worker_function.php
function get_worker_interview_by_id($interview_id)
{
    global $pdo; // Pastikan Anda telah membuat koneksi database $pdo di file db_connection.php

    // Validasi input interview_id (pastikan bertipe integer)
    if (!is_numeric($interview_id)) {
        throw new InvalidArgumentException('Invalid interview ID.');
    }

    try {
        // Query untuk mengambil data penilaian wawancara berdasarkan interview_id
        $sql = 'SELECT * FROM worker_interview WHERE interview_id = :interview_id';

        // Persiapan prepared statement
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':interview_id', $interview_id, PDO::PARAM_INT); // Mengikat parameter dengan nilai yang sesuai

        // Eksekusi query
        $stmt->execute();

        // Ambil data dan kembalikan sebagai array asosiatif
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Tangani kesalahan database jika terjadi
        echo 'Error: ' . $e->getMessage();
        return null; // Kembalikan null jika terjadi kesalahan
    }
}

?>
