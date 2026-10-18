<?php
// Array Multidimensi 
$mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "Aditya MoalAllright",
        "jurusan" => "Pendidikan Sistem dan Teknologi Mobil Terbang",
        "email" => "adit@upi.edun",
        "nilai" => 88
    ],
    [
        "nim" => "25002",
        "nama" => "Cece Yeager",
        "jurusan" => "Pendidikan Logika dan Pusingkaa",
        "email" => "cece@upi.edun",
        "nilai" => 69
    ],
    [
        "nim" => "25003",
        "nama" => "Budi Sentosa",
        "jurusan" => "Pendidikan Fisika dan Apasaja",
        "email" => "budi@upi.edun",
        "nilai" => 65
    ],
    [
        "nim" => "25004", 
        "nama" => "Dewi Setrika",
        "jurusan" => "Pendidikan Alam Sekitar dan Alam Semesta",
        "email" => "dewi@upi.edun",
        "nilai" => 90
    ],
    [
        "nim" => "25005",
        "nama" => "Zubaedah Ackerman",
        "jurusan" => "Pendidikan Bahasa Suryani dan Bahasa Alien",
        "email" => "zubaedah@upi.edun",
        "nilai" => 55
    ],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Daftar Mahasiswa Abadi</title>
    <!-- Pake Bootstrap biar bagus hasilnya -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* TEMA: Merah, Kuning, Putih Karna aku lagi suka warna ini hehe */
        body {
            background-color: #f8f9fa; 
        }
        .header-custom {
            background-color: #dc3545;
            color: #ffc107; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .btn-custom {
            background-color: #ffc107; 
            color: #000;
            font-weight: bold;
            border: none;
        }
        .btn-custom:hover {
            background-color: #e0a800;
        }
        .table-custom thead {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="header-custom mb-4 text-center">
            <h2 class="fw-bold">Daftar Mahasiswa Abadi</h2>
            <p class="mb-0 text-white">Mini Website PHP Dasar Yaa Abangkuuhh</p>
        </div>

        <!-- Tombol menuju form POST -->
        <a href="form_pesan.php" class="btn btn-custom mb-3">Isi Form Pesan</a>

        <div class="table-responsive bg-white p-3 rounded shadow-sm">
            <table class="table table-bordered table-hover table-custom align-middle">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $mhs) :

                        // Logika Grade yang benar telah cece sesuaikan dengan contoh modul
                        if ($mhs["nilai"] >= 80) {
                            $grade = "A";
                        } elseif ($mhs["nilai"] >= 70) {
                            $grade = "B";
                        } elseif ($mhs["nilai"] >= 60) {
                            $grade = "C";
                        } else {
                            $grade = "D";
                        }

                        // Logika Status Lulus/Tidak Lulus juga sama pake referensi modul
                        if ($mhs["nilai"] >= 70) {
                            $status = "<span class='badge bg-success'>Lulus</span>";
                        } else {
                            $status = "<span class='badge bg-danger'>Tidak Lulus</span>";
                        }
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $mhs["nim"]; ?></td>
                            <td><?= $mhs["nama"]; ?></td>
                            <td><?= $mhs["jurusan"]; ?></td>
                            <td><?= $mhs["nilai"]; ?></td>
                            <td class="fw-bold text-center"><?= $grade; ?></td>
                            <td class="text-center"><?= $status; ?></td>
                            <td>
                                <!-- Tombol Detail Metode GET -->
                                <a href="detail.php?nim=<?= $mhs['nim']; ?>&nama=<?= $mhs['nama']; ?>&jurusan=<?= $mhs['jurusan']; ?>&email=<?= $mhs['email']; ?>&nilai=<?= $mhs['nilai']; ?>&grade=<?= $grade; ?>&status=<?= strip_tags($status); ?>" class="btn btn-outline-danger btn-sm">Lihat Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>