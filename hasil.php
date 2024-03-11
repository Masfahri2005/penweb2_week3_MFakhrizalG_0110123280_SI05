<style>
        body {
            font-family: 'Arial', sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h4 {
            text-align: center;
            color: #333;
        }
</style>

<?php
// Menangkap value form berdasarkan unique name & simpan ke dalam variable
$nim = $_POST['nim']; 
$nama = $_POST['nama']; 
$jk = $_POST['jk']; 
$prodi = $_POST['prodi']; 
$skill = $_POST['skill']; 
$domisili = $_POST['domisili']; 
$email = $_POST['email']; 

$nilai = 0;
foreach ($skill as $data) {
    switch ($data) {
        case 'html':
        case 'css':
            $nilai += 10;
            break;
        case 'javascript':
        case 'rwd':
            $nilai += 20;
            break;
        case 'php':
        case 'java':
            $nilai += 30;
            break;
        case 'python':
            $nilai += 50;
            break;
        default:
            break;
    }
}

// Tampilan value kedalam web browser
echo "<h4>Informasi Yang Dikirim</h4>";
echo "<table border='1'>";
echo "<tr><td>NIM</td><td>$nim</td></tr>";
echo "<tr><td>Nama</td><td>$nama</td></tr>";
echo "<tr><td>Jenis Kelamin</td><td>$jk</td></tr>";
echo "<tr><td>Program Studi</td><td>$prodi</td></tr>";
echo "<tr><td>Skill</td><td>" . implode(", ", $skill) . "</td></tr>";
echo "<tr><td>Domisili</td><td>$domisili</td></tr>";
echo "<tr><td>Email</td><td>$email</td></tr>";
echo "<tr><td>Nilai skill</td><td>$nilai</td></tr>";
echo "<tr><td>Keterangan</td><td>";
if ($nilai == 0) {
    echo "Tidak memadai";
} elseif ($nilai <= 40) {
    echo "Kurang";
} elseif ($nilai <= 60) {
    echo "Cukup";
} elseif ($nilai <= 100) {
    echo "Baik";
} elseif ($nilai <= 150) {
    echo "Sangat baik";
}
echo "</td></tr>";
echo "</table>";
?>
