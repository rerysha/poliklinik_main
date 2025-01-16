<?php
include '../../config/koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $idPoli = $_SESSION['id_poli'];
    $idDokter = $_SESSION['id'];
    $hari = $_POST["hari"];
    $jamMulai = $_POST["jamMulai"];
    $jamSelesai = $_POST["jamSelesai"];

    // Cek apakah dokter sudah memiliki jadwal pada hari yang sama
    $querySameDay = "SELECT * FROM jadwal_periksa WHERE id_dokter = '$idDokter' AND hari = '$hari'";
    $resultSameDay = mysqli_query($mysqli, $querySameDay);

    if (mysqli_num_rows($resultSameDay) > 0) {
        echo '<script>alert("Anda sudah memiliki jadwal pada hari ini. Tidak bisa menambahkan jadwal lagi!");window.location.href="../../jadwalPeriksa.php";</script>';
    } else {
        // Cek apakah sudah ada dokter lain dalam poli yang sama di hari tersebut
        $querySamePoli = "SELECT * FROM jadwal_periksa 
            INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id 
            WHERE dokter.id_poli = '$idPoli' AND jadwal_periksa.hari = '$hari'";
        
        $resultSamePoli = mysqli_query($mysqli, $querySamePoli);

        if (mysqli_num_rows($resultSamePoli) > 0) {
            echo '<script>alert("Sudah ada dokter lain di poli ini pada hari yang sama! Tidak bisa menambahkan jadwal.");window.location.href="../../jadwalPeriksa.php";</script>';
        } else {
            // Cek apakah jadwal bertabrakan dengan dokter lain
            $queryOverlap = "SELECT * FROM jadwal_periksa 
                INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id 
                WHERE dokter.id_poli = '$idPoli' AND hari = '$hari' 
                AND (
                    (jam_mulai < '$jamSelesai' AND jam_selesai > '$jamMulai') OR 
                    (jam_mulai < '$jamMulai' AND jam_selesai > '$jamMulai')
                )";

            $resultOverlap = mysqli_query($mysqli, $queryOverlap);

            if (mysqli_num_rows($resultOverlap) > 0) {
                echo '<script>alert("Dokter lain telah mengambil jadwal ini di poli ini.");window.location.href="../../jadwalPeriksa.php";</script>';
            } else {
                // Query untuk menambahkan jadwal
                $query = "INSERT INTO jadwal_periksa (id_dokter, hari, jam_mulai, jam_selesai) VALUES ('$idDokter', '$hari', '$jamMulai', '$jamSelesai')";

                if (mysqli_query($mysqli, $query)) {
                    echo '<script>';
                    echo 'alert("Jadwal berhasil ditambahkan!");';
                    echo 'window.location.href = "../../jadwalPeriksa.php";';
                    echo '</script>';
                    exit();
                } else {
                    echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
                }
            }
        }
    }
}

// Tutup koneksi
mysqli_close($mysqli);
?>
